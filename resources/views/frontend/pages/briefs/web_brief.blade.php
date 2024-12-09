@extends('frontend.layouts.steps.master')
@section('container')
    @push('customStyles')
        <style>
            :root {
                --primary-rgb: 60, 124, 255;
            }

            body {
                background-image: url(/frontend/assets/images/voice_bg.png);
                background-size: cover;
                width: 100%;
                background-repeat: no-repeat;
                z-index: 9;
                position: relative;
                display: block;
            }

            .hidden {
                display: none;
            }

            .step-progress-area {
                display: none !important;
            }

            .d-block {
                display: block !important;
            }

            .voice-setup {
                position: relative;
                width: 674px;
                height: calc(100vh - 30px);
                margin: 0% auto 1%;
            }

            .chat-bubble {
                padding: 20px 0px 20px 70px;
                border-radius: 15px;
                position: relative;
                margin-bottom: 20px;
                text-align: left;
                font-family: Arial, sans-serif;
                border: 1px solid #a0e2ff;
                background-color: #fff;
                filter: drop-shadow(0px 1px 1px #57c3f2);
                overflow: scroll;
            }

            .chat-bubble::before {
                content: url(/frontend/assets/images/star_vector.png);
                position: absolute;
                left: 15px;
                top: 30px;
            }

            div#currentQuestion::before {
                content: url(/frontend/assets/images/star_vector.png);
                position: absolute;
                left: 15px;
                top: 30px;
            }

            /*div#introScreen h2::before {
                                content: url(/frontend/assets/images/star_vector.png);
                                position: absolute;
                                left: -50px;
                                top: 10px;
                                opacity: 0;
                                animation: fadeinParticle 1s forwards;
                            }*/

            /* Fade-in particle (can be adjusted) */
            @keyframes fadeinParticle {
                0% {
                    opacity: 0;
                    transform: translateY(-10px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* When the intro box is visible */
            .intro-visible {
                opacity: 1;
                /* Box will appear */
            }

            #introScreen {
                opacity: 0;
                transition: opacity 1s ease-in-out;
                /* Fade-in effect for the box */
            }

            .chat-bubble p {
                margin-bottom: 10px;
            }

            .chat-bubble h2,
            .chat-bubble p {
                margin: 0;
                font-size: 16px;
                color: #000;
                font-weight: 500;
                font-family: sans-serif;
            }

            audio {
                width: 57%;
                height: 40px;
            }

            .audio-container {
                background-color: #f0f0f0;
                /* Set your desired background color */
                padding: 10px;
                /* Optional padding */
                border-radius: 8px;
                /* Optional rounded corners */
                width: fit-content;
                /* Adjust container width based on audio player */
            }

            .audio-container audio {

                background-color: transparent;
                /* Remove default audio player background */
            }

            .chat-bubble h3 {
                margin: 5px 0 0;
                font-size: 16px;
                color: #000;
                font-family: sans-serif;
                font-weight: 700;
            }

            .chat-bubble span {
                display: inline-block;
                background-color: #00c4ff;
                color: white;
                border-radius: 50%;
                padding: 8px;
                margin-right: 10px;
                font-size: 16px;
            }

            .actions {
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
            }

            .action-btn {
                background-color: #fff;
                border: 1px solid #00c4ff;
                color: #00c4ff;
                border-radius: 8px;
                padding: 10px 15px;
                cursor: pointer;
                transition: 0.3s;
                font-size: 14px;
            }

            .action-btn:hover {
                background-color: #00c4ff;
                color: #fff;
            }

            .record-section {
                /* margin-top: 5%; */
                display: block;
                /* justify-content: space-between;
                        align-items: center;
                        background-color: #fff; */
                padding: 8px 8px 8px 15px;
                border-radius: 20px;
                /* box-shadow: 0 6px 24px 0 rgba(0, 6, 36, .078); */
                position: absolute;
                width: 100%;
                bottom: 0px;
                opacity: 1;
                transition: all 0.3s;
                /* background: linear-gradient(#fff, #fff) padding-box, linear-gradient(60deg, #a3c7ff, #a4c7ff 65%, #7dd8ae 96%) border-box; */
                /* border: 1px solid transparent; */
                left: 50%;
                transform: translate(-50%, 0%);
                max-width: 630px;
            }

            .record-section p {
                margin: 0;
                font-size: 16px;
                font-family: 'Poppins', sans-serif;
                color: #939393;
            }

            button#recordBtn svg {
                width: 15px;
                height: 18px;
                vertical-align: baseline;
            }

            .loader {
                /*content: url(/frontend/assets/images/star_vector.png);*/
                height: 30px;
                width: 30px;
                animation: flickerAnimation 2s infinite;

            }


            @keyframes flickerAnimation {
                0% {
                    opacity: 1;
                }

                50% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }


            @keyframes waveAnimation {

                0%,
                100% {
                    transform: scaleY(1);
                }

                50% {
                    transform: scaleY(2);
                }
            }


            @keyframes spin {
                to {
                    transform: rotate(360deg);
                }
            }

            .record-section:not(.recordingStated) #recordBtn {
                background: #edf1ff;
            }

            .record-section:not(.recordingStated) #recordBtn>i {
                color: var(--primary);
            }

            .button_area {
                display: flex;
                justify-content: center;
                margin: 10px 0 0;
            }

            .btnrec.stepMenuArea {display: flex;justify-content: center;}

            #recordBtn {
                position: relative;
                top: 0px;
                left: 0;
                right: 0;
                bottom: 0;
                margin: 0px 20px;
                background-color: var(--primary);
                color: white;
                border: none;
                border-radius: 14px;
                transition: 0.3s;
                height: 42px;
                width: 42px;
                transition: all 0.3s;
                border: 1px solid rgba(var(--primary-rgb), 0.15);
            }

            #canselrecbtn {
                position: relative;
                background-color: #ffbcba;
                color: white;
                border: none;
                border-radius: 14px;
                transition: 0.3s;
                height: 42px;
                width: 42px;
                transition: all 0.3s;
                border: 1px solid rgba(var(--primary-rgb), 0.15);
            }

            #recordBtn i {
                color: #fff;
                font-size: 14px;
                transition: all 0.3s;
            }

            #canselrecbtn i {
                color: #ff0004;
                font-size: 14px;
                transition: all 0.3s;
            }

            #recordBtn:not(:disabled):hover {
                background-color: var(--primary) !important;
            }

            #recordBtn:not(:disabled):hover i {
                color: #fff !important;
            }


            div#errorMessage {
                position: static;
                bottom: 0;
                color: red;
                font-size: 14px;
                margin-top: 20px;
            }

            .recording-indicator {
                margin-top: 10px;
                color: red;
                font-weight: bold;
            }

            div#currentQuestion h3 {
                font-size: 19px;
                font-weight: 700;
            }

            p#questionText {
                font-size: 15px;
                line-height: 25px;
            }

            div#currentQuestion {
                margin-top: 10px;
                padding: 20px 0px 20px 70px;
                border-radius: 15px;
                position: relative;
                margin-bottom: 20px;
                text-align: left;
                font-family: Arial, sans-serif;
                border: 1px solid #a0e2ff;
                background-color: #fff;
                filter: drop-shadow(0px 1px 1px #57c3f2);
            }



            #waveformCanvas {
                width: 80%;
                height: 24px;
            }

            .start_recording_bar {display: flex;align-items: center;justify-content: center;}

            #recordBtn::before,
            #recordBtn::after {
                content: "";
                position: absolute;
                width: 200%;
                height: 200%;
                background: rgba(var(--primary-rgb), 0.3);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                border-radius: 50%;
                right: -20px;
                bottom: -20px;
                -webkit-animation: btnWaves 2s ease-in-out infinite;
                animation: btnWaves 2s ease-in-out infinite;
                z-index: -2;
            }

            #recordBtn::before {
                -webkit-animation-delay: 0s;
                animation-delay: 0s;
            }

            #recordBtn::after {
                -webkit-animation-delay: 0.5s;
                animation-delay: 0.5s;
            }

            .record-section.recordingStated #recordBtn::before,
            .record-section.recordingStated #recordBtn::after,
            #recordBtn:disabled::before,
            #recordBtn:disabled::after {
                display: none;
            }

            @keyframes btnWaves {
                0% {
                    -webkit-transform: scale(0.2, 0.2);
                    transform: scale(0.2, 0.2);
                    opacity: 0;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                }

                50% {
                    opacity: 0.9;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";
                }

                100% {
                    -webkit-transform: scale(0.9, 0.9);
                    transform: scale(0.9, 0.9);
                    opacity: 0;
                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                }
            }

            @keyframes blink {
                0% {
                    opacity: 1;
                }

                50% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            #questionText::after {
                content: '|';
                animation: blink 1s step-start infinite;
            }


            .audio-response {
                padding: 10px;
                margin: 10px 0;
                box-shadow: 0px 10px 24px 0px rgba(0, 6, 36, .08);
                border-radius: 12px;
                position: relative;
                width: 100%;
                /*background: linear-gradient(270deg, #407AFF 0%, #185AE9 100%);*/
                background: #edf1ff;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
                width: 80%;
                float: right;
                border: 1px solid rgba(var(--primary-rgb), 0.45);
            }

            .wrap-audio-player {
                display: flex;
                width: 100%;
                justify-content: space-between;
                padding: 15px 0;
            }

            button.play-question-button {
                background-color: transparent;
                border: none;
                width: 30px;
                display: inline-block;
            }

            button.play-question-button i {
                color: #3c7cff;
            }

            .audio-response p {
                font-size: 14px;
                text-align: left;
                display: block;
                width: 100%;
                text-transform: capitalize;
            }

            button.audio-play-pause-btn {
                border-color: transparent;
                height: 30px !important;
                width: 30px !important;
                background-position: center;
                background: transparent;
                color: var(--primary);
            }

            .audio-play-icon {
                background: url(/frontend/assets/images/playerbtn.png) no-repeat;
            }

            .audio-stop-icon {
                background: url(/frontend/assets/images/audio-stop.png) no-repeat;
                background-size: contain;
                filter: invert(1);
            }

            .audio-waveform-container {
                height: 30px;
                width: 70%;
            }

            .audio-time-duration {
                font-size: 11px;
                padding: 5px;
                border-radius: 15px;
                font-weight: 600;
                color: var(--primary);
            }

            .question {
                padding: 10px 10px;
                border-radius: 15px;
                position: relative;
                text-align: left;
                margin: 30px 0;
                font-family: Arial, sans-serif;
                border: 1px solid transparent;
                background-color: #fff;
                width: 100%;
            }

            .currentQuestion {
                filter: drop-shadow(0px 1px 1px #57c3f2);
                border-color: #a0e2ff;
            }

            .chat-message.question {
                display: flex;
                /*flex-direction: row-reverse;*/
                gap: 5px;
                float: left;
            }

            .question p {
                font-size: 15px;
                line-height: 25px;
                width: 100%;

            }

            div#chatContainer {
                height: calc(100vh - 255px);
                overflow: scroll;
                padding: 10px 20px;
                z-index: 0;
                position: absolute;
                top: 20px;
                width: 100%;
                margin-top: 8%;
            }
            .btnrec.stepMenuArea a {
                position: relative;
                margin: 10px 0 0;
            }

            .fadein-box {
                opacity: 0;
                animation: fadeIn 1s forwards;
                background-color: #fff;
                padding: 20px 20px 20px 80px;
                border-radius: 10px;
                box-shadow: 0px 10px 24px 0px rgba(0, 6, 36, .08);
                width: 750px;
                margin: 100px auto 10px auto;
                text-align: left;
            }

            div#introScreen h2 {
                font-size: 21px;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
                color: #000;
                position: relative;
            }

            div#introScreen p {
                font-size: 16px;
                color: #000000de;
                font-weight: 400;
                margin: 0;
            }

            .stepMenuArea {
                position: relative;
            }

            .stepMenuArea>a {
                background: #edf1ff;
                padding: 0.625rem 2rem;
                border-radius: 5rem;
                color: var(--primary);
                font-weight: 600;
                font-size: 14px;
                position: absolute;
                z-index: 1000;
                transition: all 0.3s;
                border: 1px solid rgba(var(--primary-rgb), 0.45);
            }

            .stepMenuArea.activeBtn>a {
                background: var(--primary);
                color: #fff;
            }

            .stepMenuArea:not(.loaded)>a {
                opacity: 0;
                visibility: hidden;
            }
/*
            .stepMenuArea.loaded>li {
                opacity: 0;
                pointer-events: none;
            } */



            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            #startChat {
                opacity: 0;
                transition: opacity 2s ease-in-out;
                /* This controls the fade-in effect */
            }

            /* The button will fade in when this class is added */
            .fadein-button.show {
                display: block !important;
                opacity: 3 !important;
            }

            button#startChat {
                background: linear-gradient(to right, #36d1dc, #5b86e5);
                border: none;
                color: white;
                padding: 10px 20px;
                font-size: 16px;
                border-radius: 25px;
                cursor: pointer;
                margin-top: 20px;
            }

            button#startChat:hover {
                background: linear-gradient(to right, #5b86e5, #36d1dc);
            }

            /* Styling for chat screen */
            .chat-screen {
                /*opacity: 0;*/
                transition: opacity 1s ease-in-out;
            }

            /* When the chat screen is visible, fade it in */
            .chat-screen.show {
                opacity: 1;
            }

            #audio-player-container {
                --seek-before-width: 0%;
                --volume-before-width: 100%;
                --buffered-width: 0%;
                position: relative;
                margin: 100px 2.5% auto 2.5%;
                width: 95%;
                max-width: 500px;
                height: 132px;
                background: #fff;
            }

            #audio-player-container::before {
                position: absolute;
                content: '';
                width: calc(100% + 4px);
                height: calc(100% + 4px);
                left: -2px;
                top: -2px;
                background: linear-gradient(to left, #007db5, #ff8a00);
                z-index: -1;
            }


            div#timer {
                background: rgba(var(--primary-rgb), 0.1);
                color: var(--primary);
                font-size: 12px;
                padding: 5px 10px;
                border-radius: 15px;
                opacity: 1;
                transition: all 0.3s;
                min-width: 55px;
                text-align: left;
            }

            .sound-wave {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 1px;
            }

            .bar {
                animation-name: wave-lg;
                animation-iteration-count: infinite;
                animation-timing-function: ease-in-out;
                animation-direction: alternate;
                background: #ADADAD;
                margin: 0 1.5px;
                height: 5px;
                width: 1px;
            }

            .bar:nth-child(-n+7),
            .bar:nth-last-child(-n+7) {
                animation-name: wave-md;
            }

            .bar:nth-child(-n+3),
            .bar:nth-last-child(-n+3) {
                animation-name: wave-sm;
            }

            @keyframes wave-sm {
                0% {
                    opacity: 0.35;
                    height: 5px;
                }

                100% {
                    opacity: 1;
                    height: 15px;
                }
            }

            @keyframes wave-md {
                0% {
                    opacity: 0.35;
                    height: 7px;
                }

                100% {
                    opacity: 1;
                    height: 15px;
                }
            }

            @keyframes wave-lg {
                0% {
                    opacity: 0.35;
                    height: 10px;
                }

                100% {
                    opacity: 1;
                    height: 30px;
                }
            }

            button.inquirybtn {
                background-color: #3a75fc;
                color: #fff;
                padding: 10px 20px;
                border-color: transparent;
                border-radius: 30px;
                font-size: 17px;
                position: relative;
            }

            form#inquiryForm {
                width: 54%;
                margin: 0 auto;
            }

            @keyframes fadeInFromUp {
                from {
                    transform: translate(0%, -25px);
                    opacity: 0;
                }

                to {
                    transform: translate(0%, 0px);
                    opacity: 1;
                }
            }

            .firstIntroScreen {
                display: flex;
                padding: 30px 15px 30px 24px;
                animation: fadeInFromUp 1s forwards;
                background-color: #fff;
                box-shadow: 0px 10px 24px 0px rgba(0, 6, 36, .08);
                width: 100%;
                max-width: 630px;
                margin: 0px auto 20px;
                min-height: 85px;
                border-radius: 12px;
                opacity: 0;
                transform: translate(0%, -25px);
                transition: all 0.3s;
            }

            .firstIntroScreen .aiIconArea img {
                height: 24px;
                width: 24px;
                object-fit: contain;
                margin: 0 15px 0 0;
            }

            .firstIntroScreen .textArea {
                display: flex;
                flex-direction: column;
                gap: 10px;
                width: 100%;
            }

            .firstIntroScreen .textArea>* {
                margin: 0;
            }

            .firstIntroScreen .textArea>h2 {
                font-size: 18px;
                line-height: 1.3;
                font-weight: 600;
                color: #000;
                font-family: "Poppins", sans-serif;
            }

            .firstIntroScreen .textArea>p {
                font-size: 16px;
                line-height: 1.5;
            }

            .firstIntroScreen .textArea>.btnArea>button {
                background: linear-gradient(35deg, #0021ff, #116dff 50%, #5ff2ae 110%);
                color: #fff;
                border: 0;
                outline: 0;
                padding: 8px 20px;
                font-size: 16px;
                border-radius: 50px;
            }

            .firstIntroScreen .textArea>.btnArea {
                max-height: 100px;
                transition: all 0.3s;
                transform: scaleY(1);
                opacity: 1;
                transform-origin: 0 0;
            }

            .firstIntroScreen .textArea>.btnArea.hiddenArea {
                max-height: 0;
                transform: scaleY(0);
                opacity: 0;
            }

            .firstIntroScreen.chat-message.question {
                margin-top: 20px;
            }

            div#introScreen .textArea {
                gap: 3px;
            }

            #chatScreen:not(.show) .record-section {
                opacity: 0;
                visibility: hidden;
                transform: translate(-50%, 10px);
            }

            #chatScreen ::-webkit-scrollbar {
                width: 4px;
                height: 4px;
            }

            .record-section:not(.recordingStated) #timer {
                opacity: 0;
            }

            .record-section .placeholderArea {
                position: absolute;
                font-size: 14px;
                color: #999;
                left: 26px;
                display: none;
            }

            .audio-response+.audio-response {
                margin-top: 20px;
            }

            .record-section.recordingStated .placeholderArea {
                display: none;
            }

            #brief_section {
                position: absolute;
                top: 0;
                left: 0;
                background: #fff;
                opacity: 1;
                transition: all 0.3s;
                z-index: 1;
            }

            #brief_section:not(.show) {
                opacity: 0;
                visibility: hidden;
            }

            @media (max-width: 576px) {
                ul.menu.stepMenuArea {
                    display: block;
                }

                .stepsControls {
                    top: auto !important;
                    bottom: 3.5rem;
                }

                .stepArea>.section-heading>h2 {
                    font-size: 1.5rem;
                }

                a.chatEnd {
                    font-size: 11px;
                    padding: 0.625rem 1.4rem;
                    margin-top: 15px;
                }

                ul.menu.stepMenuArea>li>a {
                    justify-content: center;
                }

                .firstIntroScreen {
                    padding: 30px 26px 20px 24px;
                }

                div#chatContainer {
                    height: calc(98vh - 185px);
                }

                .stepsControls {
                    top: calc(50% + var(--header-height) / 2);
                }

                /*.steps-section {*/
                /*    height: 80vh;*/
                /*}*/
                .sound-wave {
                    width: 65%;
                }

                .voice-setup {
                    height: calc(97vh - 30px);
                }

                .fadein-box {
                    width: 90%;
                    padding: 10px 10px 20px 60px;
                }

                div#introScreen h2 {
                    font-size: 16px;
                }

                .voice-setup {
                    width: 90%;
                }

                .audio-response {
                    width: 100%;
                }

                .question p {
                    font-size: 14px;
                }

                .audio-time-duration {
                    font-size: 9px;
                }

                .audio-waveform-container {
                    width: 62%;
                }

                .record-section {
                    bottom: 2.5rem;
                }
            }

            .step-progress-area {
                display: flex;
                flex-direction: column;
                justify-content: center;
                position: fixed;
                top: var(--header-height);
                left: 0;
                width: 100%;
                height: 0.875rem;
                overflow: hidden;
                z-index: 2;
            }

            .step-progressBar {
                position: relative;
                height: 0.5rem;
                background: var(--primary);
                width: 0%;
                min-width: 3%;
                transition: all 0.6s;
            }

            .step-progressBar::before,
            .step-progressBar::after {
                content: "";
                position: absolute;
            }

            .step-progressBar::before {
                top: 0;
                left: -50%;
                width: 50%;
                height: 100%;
                background: linear-gradient(to right,
                        rgba(255, 255, 255, 0),
                        rgba(255, 255, 255, 0.8),
                        rgba(255, 255, 255, 0));
                animation: shine 2s linear infinite;
            }

            .step-progressBar::after {
                top: 50%;
                right: 0;
                height: 0.8125rem;
                width: 0.8125rem;
                border-radius: 50%;
                background-color: var(--primary);
                transform: translate(50%, -50%);
                z-index: 1;
            }

            .dBlock {
                display: block !important;
            }
        </style>
    @endpush

    <?php
    //     $company_name = isset($_GET['company_name']) ? $_GET['company_name'] : '';
    //
    ?>



    <div class="chat-screen" id="chatScreen">
        <section class="voice-container">
            <div class="voice-setup" id="voiceSetup">
                <div id="chatContainer" class="chat-container">
                    <div class="firstIntroScreen" id="firstIntroScreen" data-typeHeading="Bring your ideas to life with AI"
                        data-typePara="Tell us your site needs and goals, then get a tailor-made website with all the tools you need to go live faster.">
                        <div class="aiIconArea">
                            <img src="/frontend/assets/images/star_vector.png" alt="" />
                        </div>
                        <div class="textArea">
                            <h2></h2>
                            <p></p>
                            <div class="btnArea hiddenArea">
                                <button type="text">Start Chat</button>
                            </div>
                        </div>
                    </div>
                    <div class="firstIntroScreen d-none mt-0" id="introScreen">
                        <div class="aiIconArea">
                            <img src="/frontend/assets/images/star_vector.png" alt="" />
                        </div>
                        <div class="textArea">
                            <p id="headline">
                                </h2>
                            <p><b id="message"></b></p>
                        </div>
                    </div>
                    <div id="errorMessage" class="error" style="display: none;"></div>
                </div>

                <div class="record-section">
                    <div class="record-section-part">
                        <div class="start_recording_bar">
                            <div class="timer" id="timer">00:00</div>
                            {{-- <div class="placeholderArea">Ready to chat? Press and talk!</div> --}}
                            <div class='sound-wave' id='soundWave' style="display: none;">
                            </div>
                        </div>
                        <div class="button_area">
                        <button id="recordBtn">
                            <i id="recordIcon" class="fas fa-microphone"></i>
                        </button>
                        <button id="canselrecbtn" style="display: none;">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="btnrec stepMenuArea">
                        <a href="javascript:void(0)" class="chatEnd">End Chat & Continue</a>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="step-progress-area">
        <div class="step-progressBar"></div>
    </div>

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
                    <!--<?php //if(!$company_name) {
                    ?>-->
                    <!--    <div class="stepArea active" id="step-1">-->
                    <!--      <div class="section-heading">-->
                    <!--        <h2>Step <span class="color-primary">01</span>: <span class="break-mob">Let's Start With The Basics</span></h2>-->
                    <!--      </div>-->
                    <!--      <div class="steps-inputArea">-->
                    <!--        <input-->
                    <!--          type="text"-->
                    <!--          name="cname"-->
                    <!--          id="cname"-->
                    <!--          value="{{ request()->get('company_name', '') }}"-->
                    <!--          placeholder="Please Enter Your Business Name"-->
                    <!--          enterkeyhint="done"-->
                    <!--          autofocus-->
                    <!--          required-->
                    <!--        />-->
                    <!--        <div class="step-error"></div>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--<?php //}
                    ?>-->
                    <div class="stepArea active" id="step-1">
                        <div class="section-heading">
                            <h2>Step <span class="color-primary">01</span>: <span class="break-mob">Getting You
                                    Onboard</span></h2>
                        </div>
                        <div class="steps-inputArea">
                            <input type="text" id="cus_name" name="name" placeholder="Enter Your Name"
                                enterkeyhint="done" />
                            <div class="step-error"></div>
                        </div>
                    </div>
                    <div class="stepArea" id="step-2">
                        <div class="section-heading">
                            <h2>Step <span class="color-primary">02</span>: <span class="break-mob">Getting You
                                    Onboard</span></h2>
                        </div>
                        <div class="steps-inputArea">
                            <!--<input-->
                            <!--  type="text"-->
                            <!--  id="cus_email"-->
                            <!--  data-type="email"-->
                            <!--  name="email"-->
                            <!--  placeholder="Please Enter Your Email"-->
                            <!--  enterkeyhint="done"-->
                            <!--/>-->
                            <input type="text" id="cus_email" name="email" placeholder="Please Enter Your Email"
                                enterkeyhint="done" />
                            <div class="step-error"></div>
                        </div>
                    </div>
                    <div class="stepArea" id="step-3">
                        <div class="section-heading">
                            <h2>Step <span class="color-primary">03</span>: <span class="break-mob">Getting You
                                    Onboard</span></h2>
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



    @push('customScripts')
        <script defer src="https://unpkg.com/wavesurfer.js"></script>
        <!-- Using CDN -->
        <script src="/frontend/assets/js/hark.js"></script>
        <script src="https://code.responsivevoice.org/responsivevoice.js?key=xlj3iCXj"></script>

        {{-- <script src="https://cdn.jsdelivr.net/npm/hark/hark.js"></script> --}}


        <script>
            jQuery(document).ready(function() {
                var headingText = $(document).find("#firstIntroScreen").attr("data-typeHeading");
                var paraText = $(document).find("#firstIntroScreen").attr("data-typePara");

                function typeText(element, text, callback) {
                    var i = 0;
                    $(element).text('');

                    var typingInterval = setInterval(function() {
                        $(element).append(text.charAt(i));
                        i++;
                        if (i === text.length) {
                            clearInterval(typingInterval);
                            if (callback) callback();
                        }
                    }, 25);
                }

                typeText("#firstIntroScreen h2", headingText, function() {
                    typeText("#firstIntroScreen p", paraText, function() {
                        $(document).find("#firstIntroScreen .btnArea").removeClass("hiddenArea")
                    });
                });

                $(document).on("click", "#firstIntroScreen .btnArea button", function(e) {
                    e.preventDefault();
                    $(document).find("#firstIntroScreen").addClass("d-none");
                    $(document).find("#introScreen").removeClass("d-none");
                    animateIntroBox();
                    $(document).find("#chatScreen, #chatContainer").css("display", "block");
                    $(document).find("#chatScreen").addClass("show");
                    $(document).find(".stepMenuArea").addClass("loaded");

                })

                $(document).on("click", ".chatEnd", function() {
                    $(document).find(".stepMenuArea").removeClass("loaded");
                    $(document).find("#brief_section").addClass("show");
                    $(document).find(".step-progress-area").addClass("dBlock");

                })
            });
        </script>
    @endpush
@endsection
