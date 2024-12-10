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
                console.log('audioChunks in record btn funct', audioChunks);
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
    console.log("Audio URL in createAudioPlayer funct:", audioUrl);
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

    console.log("questionLoader", questionLoader);

    if (questionLoader) {
        const text = questions[currentIndex];
        const questionText = questionLoader.querySelector("p");
        const loader = questionLoader.querySelector(".loader");

        // Disable the record button while the question is being displayed
        recordBtn.disabled = true;
        recordIcon.style.color = "gray";
        isQuestionDisplayed = false;

        // Scroll to the questionLoader element
        questionLoader.scrollIntoView({ behavior: "smooth", block: "center" });

        // Set up the question text and display the audio player
        setTimeout(() => {
            // Display the question text with typewriter effect
            typeWriter(text, questionText);

            // Stop the loader animation
            loader.style.animation = "none";

            // Add a play button for the question text
            const playButton = document.createElement("button");
            playButton.classList.add("play-question-button");
            playButton.innerHTML = "<i class='fa-solid fa-play play-icon'></i>";
            playButton.innerHTML +=
                "<i class='fa-solid fa-pause pause-icon' style='display: none;'></i>";

            // Append play button next to the question text
            questionText.parentElement.appendChild(playButton);

            // Generate the Blob for the question text
            generateAudioBlob(text, (audioURL) => {
                playButton.addEventListener("click", () => {
                    togglePlayPause(playButton, audioURL);
                });
            });
        }, 1000);
    }
}

// Function to generate audio Blob from text using SpeechSynthesis
function generateAudioBlob(text, callback) {
    if (typeof SpeechSynthesisUtterance !== "undefined") {
        const audioChunks = [];
        const audioContext = new (window.AudioContext || window.webkitAudioContext)();
        const destination = audioContext.createMediaStreamDestination();

        console.log('SpeechSynthesisUtterance is available.', destination);

        // Check if MediaRecorder is supported
        if (typeof MediaRecorder === "undefined") {
            console.error("MediaRecorder is not supported in this browser.");
            fallbackSpeakText(text); // Fallback for unsupported browsers
            return;
        }

        const mediaRecorder = new MediaRecorder(destination.stream, { mimeType: "audio/webm" });
        console.log('MediaRecorder is available.', mediaRecorder);

        // Collect audio chunks
        mediaRecorder.ondataavailable = (event) => {
            if (event.data.size > 0) {
                audioChunks.push(event.data);
            }
        };

        // Process audio Blob when recording stops
        mediaRecorder.onstop = () => {
            const audioBlob = new Blob(audioChunks, { type: "audio/webm" });
            console.log('audioChunks in gAB', audioChunks);
            const audioURL = URL.createObjectURL(audioBlob);
            console.log('Audio URL:', audioURL);
            callback(audioURL); // Return the audio URL via callback
        };

        // Configure speech synthesis
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.onend = () => {
            mediaRecorder.stop();
            audioContext.close();
            console.log("Speech synthesis and recording completed.");
        };

        // Start MediaRecorder and speech synthesis
        const source = audioContext.createMediaStreamSource(destination.stream);
        source.connect(destination);
        mediaRecorder.start();
        window.speechSynthesis.speak(utterance);

    } else {
        console.error("SpeechSynthesisUtterance is not available in this browser.");
    }
}

// Fallback function for speech synthesis (without recording)
function fallbackSpeakText(text) {
    const utterance = new SpeechSynthesisUtterance(text);
    window.speechSynthesis.speak(utterance);
    console.warn("Fallback: Audio recording is unavailable, speaking text directly.");
}

// Function to toggle play/pause and handle generated Blob URL
function togglePlayPause(playButton, audioURL) {
    console.log("Audio URL:", audioURL); // Debugging

    const playIcon = playButton.querySelector(".play-icon");
    const pauseIcon = playButton.querySelector(".pause-icon");

    // Find or create an audio element dynamically
    let audioElement = playButton.querySelector("audio");

    if (!audioElement) {
        console.log("Creating a new audio element...");
        audioElement = document.createElement("audio");
        audioElement.src = audioURL;
        audioElement.style.display = "none"; // Hide the audio element
        playButton.appendChild(audioElement);

        // Error handling for audio playback
        audioElement.addEventListener("error", (e) => {
            console.error("Audio playback error:", e);
        });

        // Load audio before playback
        audioElement.load();
    }

    // Toggle play/pause state
    if (audioElement.paused) {
        console.log("Playing audio...");
        audioElement.play().then(() => {
            console.log("Audio is playing.");
            playIcon.style.display = "none"; // Hide play icon
            pauseIcon.style.display = "inline-block"; // Show pause icon
        }).catch((err) => {
            console.error("Error during audio playback:", err);
        });
    } else {
        console.log("Pausing audio...");
        audioElement.pause();
        playIcon.style.display = "inline-block"; // Show play icon
        pauseIcon.style.display = "none"; // Hide pause icon
    }

    // Reset icons when playback ends
    audioElement.onended = () => {
        playIcon.style.display = "inline-block"; // Show play icon
        pauseIcon.style.display = "none"; // Hide pause icon
    };
}


// Function to speak text with ResponsiveVoice.js (fallback)
function speakTextWithResponsiveVoice(text) {
    if (typeof responsiveVoice !== "undefined") {
        responsiveVoice.speak(text, "US English Female");
    } else {
        console.error("ResponsiveVoice is not available.");
    }
}

// Populate available voices on page load (optional)
// if (speechSynthesis !== undefined) {
//     synth.onvoiceschanged = () => console.log(synth.getVoices());

// }

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
