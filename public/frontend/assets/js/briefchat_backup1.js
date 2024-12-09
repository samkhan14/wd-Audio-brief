// Initialize variables
const recordBtn = document.getElementById("recordBtn");
const recordSection = document.querySelector(".record-section");
const canselrecbtn = document.getElementById("canselrecbtn");
const recordIcon = document.getElementById("recordIcon");
const errorMessage = document.getElementById("errorMessage");
const currentQuestionDiv = document.getElementById("currentQuestion");
const questionText = document.getElementById("questionText");
const chatContainer = document.getElementById("chatContainer");
let mediaRecorder,
    audioChunks = [],
    questions = [],
    currentIndex = -1,
    audioQAData = null;
let audioContext, analyser, source, dataArray, bufferLength, animationId;
let timerInterval,
    seconds = 0,
    minutes = 0;
let stream;
// Minimum duration threshold in seconds
const MIN_RECORDING_DURATION = 1;

let startTime, endTime;
let isSpeaking = false;

let startSpeakingTime = 0;
let stopSpeakingTime = 0;
let recordingDuration = 0;
let isQuestionDisplayed = false;
let isRecordingCanceled = false;
let isProcessing = false;
recordBtn.disabled = true;

canselrecbtn.style.marginRight = "10px";
// Clear localStorage when the page loads
localStorage.removeItem("audioQAData");
// first screen code
function animateIntroBox() {
    let headlineText = "Hi,<br>Let’s get started with your site setup";
    const messageText = "First, tell me what your site is all about.";
    const headlineElement = document.getElementById("headline");
    const messageElement = document.getElementById("message");
    const startChatButton = document.getElementById("startChat");
    const introScreen = document.getElementById("introScreen");
    const chatScreen = document.getElementById("chatScreen");

    let i = 0;
    let j = 0;

    function typeHeadline() {
        if (headlineText.charAt(i) === "<") {
            headlineElement.innerHTML += "<br>";
            i += 4;
        }

        if (i < headlineText.length) {
            headlineElement.innerHTML += headlineText.charAt(i++);
            setTimeout(typeHeadline, 25);
        } else {
            setTimeout(typeMessage, 500);
        }
    }

    // Function for typewriter effect on message
    function typeMessage() {
        if (j < messageText.length) {
            messageElement.innerHTML += messageText.charAt(j++);
            setTimeout(typeMessage, 25);

        } else {
            recordBtn.disabled = false;
            if (startChatButton) {
                startChatButton.classList.add("show");
            }
        }
    }

    // Show the intro box (headline + particle) after DOM is ready
    setTimeout(() => {
        introScreen.classList.add("intro-visible");
        setTimeout(typeHeadline, 500);
    }, 1000);
}

// Function to start recording
recordBtn.addEventListener("click", async () => {
    errorMessage.style.display = "none";
    errorMessage.textContent = ""; // Clear any previous message
    // Clear error message if it was previously shown
    if (isProcessing) {
        console.log("Please wait until the current response is complete.");
        return;
    }

    if (mediaRecorder && mediaRecorder.state === "recording") {
        console.log("Stopping the recording...");
        mediaRecorder.stop();
        recordIcon.classList.remove("fa-paper-plane");
        recordIcon.classList.add("fa-microphone");
        stopTimer();
        recordingWaveStop();

        if (stream) {
            stream.getTracks().forEach((track) => track.stop());
        }

        canselrecbtn.style.display = "none";
    } else {
        console.log("Starting the recording...");
        try {
            isRecordingCanceled = false;
            isSpeaking = false;
            audioChunks = [];
            stream = await navigator.mediaDevices.getUserMedia({
                audio: true,
            });

            var speechEvents = hark(stream, {
                threshold: -45,
            });

            mediaRecorder = new MediaRecorder(stream);

            speechEvents.on("speaking", function () {
                console.log("Speaking");
                isSpeaking = true;
            });

            speechEvents.on("stopped_speaking", function () {
                console.log("Speaking Stoped");
            });

            // Web Audio API setup for waveform visualization
            audioContext = new (window.AudioContext ||
                window.webkitAudioContext)();
            analyser = audioContext.createAnalyser();
            analyser.fftSize = 2048;
            bufferLength = analyser.frequencyBinCount;
            dataArray = new Uint8Array(bufferLength);
            source = audioContext.createMediaStreamSource(stream);
            source.connect(analyser);
            recordingWaveStart();

            mediaRecorder.ondataavailable = (e) => {
                console.log("Data available...");
                audioChunks.push(e.data);
            };

            mediaRecorder.onstop = async () => {
                if (isRecordingCanceled) {
                    // showErrorMsg(
                    //     "Recording was canceled. No audio will be submitted."
                    // );
                    console.log('Recording was canceled. No audio will be submitted.');
                    return;
                }

                const audioBlob = new Blob(audioChunks, {
                    type: "audio/webm",
                });
                audioChunks = [];
                console.log("Audio Blob:", audioBlob);
                createAudioPlayer(audioBlob, "Here is your response.");
                isProcessing = true;
                showOnlyBoxAsLoader();
                recordBtn.disabled = true;
                recordIcon.style.color = "gray";
                try {
                    await handleAudioSubmission(audioBlob);
                } catch (error) {
                    console.error("Error during audio submission:", error);
                    showErrorMsg("Failed to submit the recording. Please try again.");
                } finally {
                    isProcessing = false;
                    // recordIcon.style.color = "revert-layer";
                }

                source.disconnect();
                analyser.disconnect();
                audioContext.close();
                speechEvents.stop();
            };

            mediaRecorder.start();

            // Change the icon to 'Stop' (circle) icon
            recordIcon.classList.remove("fa-microphone");
            recordIcon.classList.add("fa-paper-plane");

            $(document).find(".record-section").addClass("recordingStated");
            errorMessage.style.display = "none";
            startTimer();
            canselrecbtn.style.display = "inline-block";
        } catch (error) {
            console.error("Error starting recording:", error);
            showErrorMsg(
                "Error accessing microphone. Please check permissions."
            );
        }
    }
});

function showErrorMsg(msg) {
    errorMessage.classList.add(
        "firstIntroScreen",
        "chat-message",
        "question",
        "currentQuestion"
    );
    errorMessage.innerHTML = `
    <div class="aiIconArea loader">
        <img src="/wdspeech/frontend/assets/images/star_vector.png" alt="">
    </div>
    <div class="textArea">
        <p></p>
    </div>
`;
    chatContainer.appendChild(errorMessage);
    const errortext = errorMessage.querySelector("p");
    const loader = errorMessage.querySelector(".loader");

    setTimeout(() => {
        typeWriter(msg, errortext);
        errorMessage.style.display = "flex";
        loader.style.animation = "none";
    }, 2000);
}

const recordingWaveStart = () => {
    $("#soundWave").show();
    const screenWidth = window.innerWidth;
    let numberOfBars;

    if (screenWidth <= 768) {
        // Mobile screen (less than or equal to 768px)
        numberOfBars = 40; // Fewer bars for mobile
    } else {
        // Desktop or larger screens
        numberOfBars = 100; // Full number of bars for larger screens
    }

    // Clear existing bars, if any
    const soundWave = document.getElementById("soundWave");
    soundWave.innerHTML = ""; // Removes existing bars

    // Create bars
    for (let i = 0; i < numberOfBars; i++) {
        const bar = document.createElement("div");
        bar.classList.add("bar");
        soundWave.appendChild(bar);
    }

    // Set random animation durations for the bars
    document.querySelectorAll(".bar").forEach((bar) => {
        bar.style.animationDuration = `${Math.random() * 0.7 + 0.2}s`;
    });
};


const recordingWaveStop = () => {
    $("#soundWave").hide();
    const bars = document.getElementsByClassName("bar");
    const barsArray = Array.from(bars);
    barsArray.forEach((bar) => {
        bar.remove();
    });
};

// Save the audio file and append to chat
const createAudioPlayer = (audioBlob, textContent = "Here is your response.") => {
    const audioUrl = URL.createObjectURL(audioBlob);

    // Create a container for the audio response
    const chatMessage = document.createElement("div");
    chatMessage.classList.add("chat-message", "audio-response");

    // Create the text element
    const textElement = document.createElement("div");
    textElement.classList.add("audio-response-text");
    textElement.textContent = textContent;

    // Create the waveform container
    const waveformContainer = document.createElement("div");
    waveformContainer.classList.add("audio-waveform-container");

    // Create a play/pause button
    const playPauseBtn = document.createElement("button");
    playPauseBtn.classList.add("audio-play-pause-btn", "fa-solid", "fa-play");

    // Initialize WaveSurfer instance
    const waveSurfer = WaveSurfer.create({
        container: waveformContainer,
        waveColor: "#3c7cff",
        progressColor: "#5d90f7",
        height: 30,
        responsive: true,
    });

    waveSurfer.load(audioUrl);

    // Toggle play/stop functionality
    playPauseBtn.addEventListener("click", () => {
        if (waveSurfer.isPlaying()) {
            waveSurfer.pause();
            playPauseBtn.classList.remove("fa-pause");
            playPauseBtn.classList.add("fa-play");
        } else {
            waveSurfer.play();
            playPauseBtn.classList.remove("fa-play");
            playPauseBtn.classList.add("fa-pause");
        }
    });

    // Reset the button icon when audio ends
    waveSurfer.on("finish", () => {
        playPauseBtn.classList.remove("fa-pause");
        playPauseBtn.classList.add("fa-play");
    });

    // Create timer and duration display
    const timeDisplay = document.createElement("div");
    timeDisplay.classList.add("audio-time-duration");

    // Update duration when ready
    waveSurfer.on("ready", () => {
        const totalSeconds = waveSurfer.getDuration();
        timeDisplay.textContent = `00:00 / ${formatTime(totalSeconds)}`;
    });

    // Update current time while playing
    waveSurfer.on("audioprocess", () => {
        const currentTime = waveSurfer.getCurrentTime();
        const totalDuration = waveSurfer.getDuration();
        timeDisplay.textContent = `${formatTime(currentTime)} / ${formatTime(
            totalDuration
        )}`;
    });

    // Helper function to format time in mm:ss
    const formatTime = (seconds) => {
        const minutes = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${String(minutes).padStart(2, "0")}:${String(secs).padStart(
            2,
            "0"
        )}`;
    };

    // Append text, button, waveform, and time display to the chat container
    chatMessage.appendChild(textElement);
    chatMessage.appendChild(playPauseBtn);
    chatMessage.appendChild(waveformContainer);
    chatMessage.appendChild(timeDisplay);

    // Append the chat message to the chat container
    chatContainer.appendChild(chatMessage);
    chatContainer.style.display = "block";
    chatContainer.scrollTop = chatContainer.scrollHeight;
};

async function handleAudioSubmission(audioBlob) {

    const audioFile = new File([audioBlob], "recording.webm", {
        type: "audio/webm",
    });

    const formData = new FormData();
    formData.append("audio", audioFile);
    formData.append("question_index", currentIndex);
    if (isSpeaking) {
        isSpeaking = false;

        try {
            let response;
            if (currentIndex === -1) {
                console.log("Submitting initial brief...");
                response = await fetch("/wdspeech/submit-audio", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                    body: formData,
                });

                if (!response.ok) {
                    const errorData = await response.json();
                    throw new Error(
                        errorData.error || "An unknown error occurred."
                    );
                }

                const data = await response.json();
                questions = data.questions.questions;
                console.log("Questions:", questions);
                currentIndex = 0;
                displayCurrentQuestion();
            } else {
                console.log("Submitting answer...");
                response = await fetch("/wdspeech/submit-answer", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                    body: formData,
                });

                if (!response.ok) {
                    const errorData = await response.json();
                    throw new Error(
                        errorData.error || "An unknown error occurred."
                    );
                }

                 // Clear the error message after success
            errorMessage.style.display = "none";
            errorMessage.textContent = "";

                const data = await response.json();
                if (data.answers && data.answers.length > 0) {
                    const latestAnswer = data.answers[data.answers.length - 1];
                    let savedAnswers =
                        JSON.parse(localStorage.getItem("audioQAData")) || [];
                    savedAnswers.push(latestAnswer);
                    localStorage.setItem(
                        "audioQAData",
                        JSON.stringify(savedAnswers)
                    );
                    console.log(
                        "Updated answers:",
                        JSON.parse(localStorage.getItem("audioQAData"))
                    );
                }

                currentIndex++;
                if (currentIndex < questions.length) {
                    setTimeout(() => {
                    displayCurrentQuestion();
                      }, 200);
                } else {
                    $(document)
                        .find(".currentQuestion")
                        .removeClass("currentQuestion");
                    $(document).find(".stepMenuArea").addClass("activeBtn");
                    // Hide question area when no more questions
                    const thankYouMessage = document.createElement("div");
                    thankYouMessage.classList.add(
                        "firstIntroScreen",
                        "chat-message",
                        "question",
                        "currentQuestion"
                    );
                    thankYouMessage.innerHTML = `
                        <div class="aiIconArea">
                            <img src="/wdspeech/frontend/assets/images/star_vector.png" alt="">
                        </div>
                        <div class="textArea">
                            <p class="thank-you-msg">Thank you for your Brief Response please fill out the form below</p>
                        </div>
                    `;
                    chatContainer.appendChild(thankYouMessage);
                    recordBtn.disabled = true;
                }

                if (data.status === "complete") {
                    audioQAData = data;
                    console.log("All questions answered:", data);
                    localStorage.setItem(
                        "audioQAData",
                        JSON.stringify(audioQAData)
                    );
                }
            }
        } catch (error) {
            console.error("Error during submission:", error);
            showErrorMsg(error.message);
          
        }
    } else {
        console.log("Error: no audio recoded");
        showErrorMsg("Audio Not Recorded or Unclear");
    }
}

function showOnlyBoxAsLoader(){
    if(isSpeaking){

        $(document).find(".currentQuestion").removeClass("currentQuestion");
        const questionLoader = document.createElement("div");

        // setTimeout(() => {
            questionLoader.classList.add(
                "firstIntroScreen",
                "chat-message",
                "question",
                "currentQuestion"
            );

            questionLoader.innerHTML = `
                <div class="aiIconArea loader">
                    <img src="/wdspeech/frontend/assets/images/star_vector.png" alt="">
                </div>
                <div class="textArea">
                    <p>Analyzing Your Audio...</p>
                </div>
            `;

            chatContainer.appendChild(questionLoader);
        // }, 2000);
    }
}

function displayCurrentQuestion() {
    const questionLoader = document.querySelector(".currentQuestion");
     console.log("questionLoader", questionLoader);
    if(questionLoader){
         console.log("questionLoader1 2", questionLoader);
            const text = questions[currentIndex];
    const questionText = questionLoader.querySelector("p");
    const loader = questionLoader.querySelector(".loader");

    recordBtn.disabled = true;
    recordIcon.style.color = "gray";
    isQuestionDisplayed = false;
    
      // Scroll to the questionLoader element
        questionLoader.scrollIntoView({ behavior: "smooth", block: "center" });

    setTimeout(() => {
        typeWriter(text, questionText);
        loader.style.animation = "none";

    }, 2000);    
    
   } 

}

function typeWriter(text, element, speed = 50) {
    let index = 0;
    element.textContent = "";
    function typeNextChar() {
        if (index < text.length) {
            element.textContent += text.charAt(index);
            index++;
            setTimeout(typeNextChar, speed);
        } else {
            recordBtn.disabled = false;
            recordIcon.style.color = "revert-layer";
            isQuestionDisplayed = true;
        }
    }

    typeNextChar();
}

function startTimer() {
    seconds = 0;
    minutes = 0;

    // Clear any existing interval
    if (timerInterval) {
        clearInterval(timerInterval);
    }

    console.log("asd");

    const setTime = () => {
        // Start the timer
        timerInterval = setTimeout(() => {
            seconds++;
            if (seconds === 60) {
                minutes++;
                seconds = 0;
            }
            console.log("asdasdasdasad");
            // console.log(
            //     `Timer: ${minutes}:${seconds < 10 ? "0" + seconds : seconds}`
            // );

            // Update any timer display here (you can create a DOM element like <div id="timer"></div> to show)
            document.getElementById("timer").textContent = `${
                minutes < 10 ? "0" + minutes : minutes
            }:${seconds < 10 ? "0" + seconds : seconds}`;
            setTime();
        }, 1000); // Update every second
    };

    setTime();
}

function stopTimer() {
    $(document).find(".record-section").removeClass("recordingStated");
    clearInterval(timerInterval);
    console.log(
        `Final recording time: ${minutes}:${
            seconds < 10 ? "0" + seconds : seconds
        }`
    );

    // Optionally reset the timer display after stopping
    document.getElementById("timer").textContent = "00:00";
}

// Cancel recording logic
canselrecbtn.addEventListener("click", () => {
    console.log("Cancel recording...");
    isRecordingCanceled = true;
    if (mediaRecorder && mediaRecorder.state === "recording") {
        mediaRecorder.stop();
        audioChunks = [];
    }

    // Reset UI and stop streams
    recordIcon.classList.remove("fa-paper-plane");
    recordIcon.classList.add("fa-microphone");
    stopTimer();
    recordingWaveStop();

    if (stream) {
        stream.getTracks().forEach((track) => track.stop());
    }

    canselrecbtn.style.display = "none"; // Hide cancel button
    // errorMessage.textContent = "Recording canceled.";
    // errorMessage.style.display = "block"; // Show cancellation message
});
