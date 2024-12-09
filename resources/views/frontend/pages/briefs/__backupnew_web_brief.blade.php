@extends('frontend.layouts.steps.master')
@push('customStyles')
    <style>
        @media (max-width: 576px) {
            .stepArea>.section-heading>h2 {
                font-size: 1.5rem;
            }
        }

        .btn {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            position: relative;
        }

        .btn-text {
            margin-right: auto;
        }

        .mic-icon {
            fill: white;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .recordbtn_wrapper {
            display: flex;
            justify-content: center;
        }

        .error {
            color: red;
        }

        .loader {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-left-color: #007bff;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
            margin: 0px auto;
            display: block;
            margin-left: 47%;
        }

        .recording-indicator {
            margin-top: 10px;
            font-weight: bold;
            color: red;
            font-size: 14px;

        }

        div#errorMessage {
            font-size: 16px;
        }

        p#questionText {
            font-size: 15px;
            width: 50%;
            margin: 0 auto;
            display: block;
        }


        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
@endpush

@section('container')
    <?php

    $company_name = isset($_GET['company_name']) ? $_GET['company_name'] : '';
    $service = isset($_GET['service']) ? $_GET['service'] : '';
    ?>

    <input type="hidden" id="company_name" value="{{ request()->get('company_name', '') }}" />

    <section class="steps-section mesh-shapes" id="brief_section">
        <div class="steps-body">
            <div class="container">
                <form class="steps-form" action="#" method="post" id="homebrief">
                    @csrf
                    <div class="stepsControls">
                        <button type="button" class="prev-step">
                            <i class="fa-solid fa-arrow-left-long"></i>
                        </button>
                        <button type="button" class="next-step active">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                    </div>
                    <?php if(!$company_name) { ?>
                    <div class="stepArea active" id="step-1">
                        <div class="section-heading">
                            <h2>Step <span class="color-primary">01</span>: <span class="break-mob">Let's Start With The
                                    Basics</span></h2>
                        </div>
                        <div class="steps-inputArea">
                            <input type="text" name="cname" id="cname"
                                value="{{ request()->get('company_name', '') }}"
                                placeholder="Please Enter Your Business Name" enterkeyhint="done" autofocus required />
                            <div class="step-error"></div>
                        </div>
                    </div>
                    <?php } ?>

                    {{-- brief recording area --}}
                    <div class="stepArea <?php echo $company_name ? 'active' : ''; ?>" id="step-2">
                        <div class="section-heading">
                            <h2>Step <span class="color-primary">0<?php echo $company_name ? '1' : '2'; ?></span>: <span class="break-mob">Record
                                    Your Brief</span></h2>
                        </div>
                        <div class="steps-inputArea">
                            <div class="recordbtn_wrapper">
                                <button id="recordBtn" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" class="mic-icon">
                                        <path
                                            d="M12 14C13.66 14 15 12.66 15 11V5C15 3.34 13.66 2 12 2C10.34 2 9 3.34 9 5V11C9 12.66 10.34 14 12 14ZM19 11C19 15 15.87 18 12 18C8.13 18 5 15 5 11H7C7 13.76 9.24 16 12 16C14.76 16 17 13.76 17 11H19ZM15 22V20H9V22H15Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                                <div class="step-error"></div>
                            </div>
                            <div id="loader" class="loader" style="display: none;"></div>
                            <div id="errorMessage" class="error" style="display: none;"></div>
                            <div id="currentQuestion" style="display: none;">
                                <h3 class="text-lg font-semibold">Question:</h3>
                                <p id="questionText"></p>
                                <div id="recordingIndicator" class="recording-indicator" style="display: none;">
                                    Recording...
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- end rec area    --}}
                    <div class="stepArea" id="step-3">
                        <div class="section-heading">
                            <h2>Step <span class="color-primary">0<?php echo $company_name ? '2' : '3'; ?></span>: <span
                                    class="break-mob">Getting You Onboard</span></h2>
                        </div>
                        <div class="steps-inputArea">
                            <input type="text" id="cus_name" name="name" placeholder="Enter Your Name"
                                enterkeyhint="done" required />
                            <div class="step-error"></div>
                        </div>
                    </div>
                    <div class="stepArea" id="step-4">
                        <div class="section-heading">
                            <h2>Step <span class="color-primary">0<?php echo $company_name ? '3' : '4'; ?></span>: <span
                                    class="break-mob">Getting You Onboard</span></h2>
                        </div>
                        <div class="steps-inputArea">
                            <input type="text" id="cus_email" data-type="email" name="email"
                                placeholder="Please Enter Your Email" enterkeyhint="done" required />
                            <div class="step-error"></div>
                        </div>
                    </div>
                    <div class="stepArea" id="step-5">
                        <div class="section-heading">
                            <h2>Step <span class="color-primary">0<?php echo $company_name ? '4' : '5'; ?></span>: <span
                                    class="break-mob">Getting You Onboard</h2>
                        </div>
                        <div class="steps-inputArea">
                            <input type="number" id="cus_phone" name="phoneNumber" enterkeyhint="done"
                                placeholder="Enter Your Number" />
                            <div class="step-error"></div>
                        </div>
                    </div>

                    <input type="hidden" id="service" name="service" value="{{ request()->get('service', '') }}" />
                </form>
            </div>
        </div>
        <div class="steps-footer position-relative">
            <div class="step-error"></div>
            <div class="container">
                <button type="button" class="next-step">
                    <img src="{{ env('IMAGE_PATH') == '' ? asset('frontend/') : env('IMAGE_PATH') }}/assets/images/steps/keyboard.png"
                        alt="" />
                </button>
            </div>
        </div>
    </section>

    <script>
        const recordBtn = document.getElementById('recordBtn');
        const loader = document.getElementById('loader');
        const errorMessage = document.getElementById('errorMessage');
        const recordingIndicator = document.getElementById('recordingIndicator');
        const currentQuestionDiv = document.getElementById('currentQuestion');
        const questionText = document.getElementById('questionText');
        let mediaRecorder;
        let audioChunks = [];
        let questions = []; // Array to hold questions
        let currentIndex = -1; // Index to track current question
        let audioQAData = null;

        // Start or stop recording when button is clicked
        recordBtn.addEventListener('click', async () => {
            if (mediaRecorder && mediaRecorder.state === "recording") {
                console.log('Stopping the recording...');
                mediaRecorder.stop();
                recordBtn.textContent = 'Start Recording';
                recordingIndicator.style.display = 'none';
            } else {
                console.log('Starting the recording...');
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({
                        audio: true
                    });
                    mediaRecorder = new MediaRecorder(stream);

                    mediaRecorder.ondataavailable = (e) => {
                        console.log('Data available...');
                        audioChunks.push(e.data);
                    };

                    mediaRecorder.onstop = async () => {
                        console.log('Recording stopped, processing the data...');
                        const audioBlob = new Blob(audioChunks, {
                            type: 'audio/webm'
                        });
                        audioChunks = []; // Reset the audio chunks for next recording

                        // Log the blob to check its size and type
                        console.log('Audio Blob:', audioBlob);

                        // Submit audio
                        await handleAudioSubmission(audioBlob);
                    };

                    mediaRecorder.start();
                    recordBtn.textContent = 'Stop Recording';
                    recordingIndicator.style.display = 'block';
                    errorMessage.style.display = 'none'; // Hide error message if any
                } catch (error) {
                    console.error('Error starting recording:', error);
                    errorMessage.textContent = 'Error accessing microphone. Please check permissions.';
                    errorMessage.style.display = 'block';
                }
            }
        });

        async function handleAudioSubmission(audioBlob) {
            loader.style.display = 'block';

            const audioFile = new File([audioBlob], 'recording.webm', {
                type: 'audio/webm'
            });

            // Log the audio file size and details
            console.log('Audio File:', audioFile);

            const formData = new FormData();
            formData.append('audio', audioFile);
            formData.append('question_index', currentIndex);

            try {
                if (currentIndex === -1) {
                    console.log('Submitting initial brief...');
                    const response = await fetch('/submit-audio', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: formData
                    });

                    const data = await response.json();
                    console.log('submit audio data:', data);
                    questions = data.questions.questions;
                    currentIndex = 0;
                    displayCurrentQuestion();
                } else {

                    console.log('Submitting answer...');
                    const response = await fetch('/submit-answer', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: formData
                    });

                    const data = await response.json();
                    console.log('submit ans data:', data);
                    currentIndex++;
                    if (currentIndex < questions.length) {
                        displayCurrentQuestion();
                    } else {
                        currentQuestionDiv.style.display = 'none';
                    }

                    if (data.status === 'complete') {
                        audioQAData = data;
                        console.log('All questions answered:', data);
                        // Save the audioQAData in localStorage as a JSON string
                        localStorage.setItem('audioQAData', JSON.stringify(audioQAData));
                        recordBtn.disabled = true;
                    }
                }
            } catch (error) {
                console.error('Error during submission:', error);
                errorMessage.textContent = error.message;
                errorMessage.style.display = 'block';
            } finally {
                loader.style.display = 'none';
            }
        }

        // Function to display the current question
        function displayCurrentQuestion() {
            currentQuestionDiv.style.display = 'block';
            questionText.textContent = questions[currentIndex]; // Display the current question
        }
    </script>

    @push('customScripts')
    @endpush
@endsection
