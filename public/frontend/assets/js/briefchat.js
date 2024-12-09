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

let recognition;
let isRecording = false;

// Speech Synthesis API for toggling play/pause
let synth = window.speechSynthesis;
let currentUtterance = null;

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

// Initialize Web Speech API
if ("webkitSpeechRecognition" in window || "SpeechRecognition" in window) {
    console.log("Speech Recognition API is supported in this browser.");
    const SpeechRecognition =
        window.SpeechRecognition || window.webkitSpeechRecognition;
    recognition = new SpeechRecognition();
    recognition.lang = "en-US";
    recognition.interimResults = false;
    recognition.maxAlternatives = 1;

    recognition.onresult = (event) => {
        const transcript = event.results[0][0].transcript;
        setTimeout(() => {
            displayRecordedText(transcript);
        }, 1000);
    };

    recognition.onerror = (event) => {
        console.error("Speech recognition error:", event.error);
        displayRecordedText("Error recognizing speech. Please try again.");
    };

    recognition.onend = () => {
        console.log("Speech recognition stopped.");
        //  recordBtn.textContent = "Start Recording";
        isRecording = false;
    };
} else {
    console.error("Speech Recognition API not supported in this browser.");
    alert(
        "Speech Recognition API not supported in this browser. Please try Chrome or Edge."
    );
}

const displayRecordedText = (text) => {
    const recordedTextElement = document.createElement("p");
    recordedTextElement.textContent = text;
    const audioResponseElement = $(document)
        .find(".chat-message.audio-response")
        .last();
    if (audioResponseElement.length > 0) {
        // Append the recorded text to the latest audio-response container
        typeWriter(text, recordedTextElement);
        audioResponseElement.append(recordedTextElement);

        chatContainer.scrollTop = chatContainer.scrollHeight;
    } else {
        console.error("No audio response container found.");
    }
};

// Function to start recording
recordBtn.addEventListener("click", async () => {
    errorMessage.style.display = "none";
    errorMessage.textContent = ""; // Clear any previous message
    // Clear error message if it was previously shown
    if (isProcessing) {
        console.log("Please wait until the current response is complete.");
        return;
    }

    if (isRecording) {
        recognition.stop();
    } else {
        recognition.start();
        isRecording = true;
        // recordBtn.textContent = "Stop Recording";
    }

    // Display the recognized text

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
                    console.log(
                        "Recording was canceled. No audio will be submitted."
                    );
                    return;
                }

                const audioBlob = new Blob(audioChunks, {
                    type: "audio/webm",
                });
                audioChunks = [];
                console.log("Audio Blob:", audioBlob);
                createAudioPlayer(audioBlob);
                isProcessing = true;
                showOnlyBoxAsLoader();
                recordBtn.disabled = true;
                recordIcon.style.color = "gray";
                try {
                    await handleAudioSubmission(audioBlob);
                } catch (error) {
                    console.error("Error during audio submission:", error);
                    showErrorMsg(
                        "Failed to submit the recording. Please try again."
                    );
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
        <img src="/frontend/assets/images/star_vector.png" alt="">
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
const createAudioPlayer = (audioBlob) => {
    const audioUrl = URL.createObjectURL(audioBlob);
    const audio = document.createElement("audio");
    audio.src = audioUrl;

    // Create the waveform container
    const waveformContainer = document.createElement("div");
    waveformContainer.classList.add("audio-waveform-container");
    // Create a play/pause button
    const playPauseBtn = document.createElement("button");
    playPauseBtn.classList.add("audio-play-pause-btn", "fa-solid", "fa-play");
    playPauseBtn.style.fontSize = "20px";
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
    const chatMessage = document.createElement("div");
    chatMessage.classList.add("chat-message", "audio-response");

    const wrapAudioPlayer = document.createElement("div");
    wrapAudioPlayer.classList.add("wrap-audio-player");

    wrapAudioPlayer.appendChild(playPauseBtn);
    wrapAudioPlayer.appendChild(waveformContainer);
    wrapAudioPlayer.appendChild(timeDisplay);
    chatMessage.appendChild(wrapAudioPlayer);

    // chatMessage.appendChild(playPauseBtn);
    // chatMessage.appendChild(waveformContainer);
    // chatMessage.appendChild(timeDisplay);
    chatContainer.appendChild(chatMessage);
    chatContainer.style.display = "block";
    chatContainer.scrollTop = chatContainer.scrollHeight;

    return audioUrl;
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
                response = await fetch("/submit-audio", {
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
                response = await fetch("/submit-answer", {
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
                            <img src="/frontend/assets/images/star_vector.png" alt="">
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

function showOnlyBoxAsLoader() {
    if (isSpeaking) {
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
                    <img src="/frontend/assets/images/star_vector.png" alt="">
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

    if (questionLoader) {

        const text = questions[currentIndex];
        const textArea = questionLoader.querySelector(".textArea");
        const questionText = questionLoader.querySelector("p");
        const loader = questionLoader.querySelector(".loader");

        // Disable the record button while the question is being displayed
        recordBtn.disabled = true;
        recordIcon.style.color = "gray";
        isQuestionDisplayed = false;
        // Scroll to the questionLoader element
        questionLoader.scrollIntoView({ behavior: "smooth", block: "center" });

          // Stop the loader animation
          loader.style.animation = "none";
        // player container for question
        const textPlayerContainer = document.createElement("div");
        textPlayerContainer.classList.add("text-player-container");
        textArea.appendChild(textPlayerContainer);

        const playButton = document.createElement("button");
        playButton.classList.add("play-question-button");
        playButton.innerHTML = "<i class='fa-solid fa-play play-icon'></i>";
        playButton.innerHTML += "<i class='fa-solid fa-pause pause-icon' style='display: none;'></i>";
        textPlayerContainer.appendChild(playButton);

       // questionText.innerHTML += " ";
        // Function to create the wave container dynamically
        function createTextWaveContainer() {
            const textWaveContainer = document.createElement('div');
            textWaveContainer.classList.add('text-wave-container');

            // Add the default wave image for UI
            textWaveContainer.innerHTML = '<div class="default-text-wave"><img src="/frontend/assets/images/wave1.png" alt="Wave Image"></div>';
            // Append the wave container to the questionText div
            textPlayerContainer.appendChild(textWaveContainer);
            return textWaveContainer;
        }

        const textWaveContainer = createTextWaveContainer(); // Create the default wave container

        playButton.addEventListener("click", () => {
           // togglePlayPause(playButton, text, textWaveContainer); // Pass the wave container to handle animation
        });

        setTimeout(() => {
            // Display the question text with typewriter effect
            typeWriter(text, questionText);
        }, 3000);

    }

}

// Function to toggle play/pause
function togglePlayPause(playButton, text, textWaveContainer) {

    const playIcon = playButton.querySelector(".play-icon");
    const pauseIcon = playButton.querySelector(".pause-icon");

    // Check if speech synthesis is supported
    if (typeof responsiveVoice !== "undefined") {

        if (responsiveVoice.isPlaying()) {
            // If the voice is playing, pause it and show play icon
            responsiveVoice.pause();
            playIcon.style.display = "inline-block";
            pauseIcon.style.display = "none";

            // Stop wave animation when pausing
            stopWaveAnimation(textWaveContainer);
        } else {
            // If the voice is not playing, speak the text, generate waveform, and show pause icon
            responsiveVoice.speak(text, "US English Female", {

                onstart: function() {
                    speakAndGenerateWaveform(text, textWaveContainer); // Start generating waveform
                },

                onend: function() {
                    // Callback for when speech ends, show play icon again
                    playIcon.style.display = "inline-block";
                    pauseIcon.style.display = "none";

                    // Stop wave animation when finished
                    stopWaveAnimation(textWaveContainer);
                }

            });

            playIcon.style.display = "none";
            pauseIcon.style.display = "inline-block";
        }

    } else {
        console.error("ResponsiveVoice is not available.");
    }
}

// Function to start generating waveform animation
function speakAndGenerateWaveform(text, waveContainer) {
    console.log("Generating waveform for: " + text);

    // Apply animation to the wave
    waveContainer.classList.add("animate-wave");
}

// Function to stop waveform animation
function stopWaveAnimation(waveContainer) {
    waveContainer.classList.remove("animate-wave");
}

// CSS for wave animation
const style = document.createElement("style");
style.innerHTML = `
    .text-wave-container {
        position: relative;
        height: 20px;
        width: 70%;
        margin-top: 15px;
    }

    .default-text-wave {
        width: 100%;
        height: 2px;
        background-color: #3c7cff;
        // background: linear-gradient(90deg, rgba(0, 123, 255, 0.5) 25%, rgba(0, 123, 255, 0.2) 50%, rgba(0, 123, 255, 0.5) 75%);
        // background-size: 200% 100%;
        // animation: waveAnimation 1.5s infinite linear;
    }

    .text-player-container {
        display: flex;
    }

     .text-player-container img {
        width: 100%;
        margin-top: -26px;
        }

    .animate-wave .default-text-wave {
        animation: waveAnimation 1.5s infinite linear;
    }

    @keyframes waveAnimation {
        0% {
            background-position: -200% 0;
        }
        100% {
            background-position: 200% 0;
        }
    }

    .play-question-button {
        background: none;
        border: none;
        cursor: pointer;
    }

    .play-icon, .pause-icon {
        font-size: 24px;
    }
`;
document.head.appendChild(style);

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
