var currentStep = 0;
jQuery(document).ready(function () {
    const steps = jQuery(".stepArea");
    const nextBtn = jQuery(".next-step");
    const prevBtn = jQuery(".prev-step");
    const progressBar = jQuery(".step-progressBar");
    const recordBtn = jQuery("#recordBtn");  // Assuming the record button has id "recordBtn"
    let focusTimer;
    let isRecording = false;  // To track if recording is active

    // Update Progress Bar
    const updateProgressBar = () => {
        const percentage = (currentStep / (steps.length - 1)) * 100;
        progressBar.css("width", `${percentage}%`);
    };

    // Check Step Count and Toggle Buttons
    function checkStepCount() {
        if (currentStep > 0) {
            prevBtn.addClass("active");
        } else {
            prevBtn.removeClass("active");
        }

        if (currentStep === steps.length - 1) {
            nextBtn.attr("type", "submit");
        } else {
            nextBtn.attr("type", "button");
        }

        updateProgressBar();
    }

    // Email Validation
    const validateEmail = (email) => {
        return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    };

    // Step Validation Logic
    function isStepValid(stepIndex) {
        const inputs = steps.eq(stepIndex).find('button, input, select, textarea');
        const errorArea = steps.eq(stepIndex).find(".step-error");

        let isValid = true;  // Flag to track validation status

        // Check all inputs in the current step
        inputs.each(function () {
            const input = jQuery(this);

            if (!input.val() && input.attr("required")) {
                input.closest(".steps-inputArea").addClass("error");
                errorArea.addClass("show");
                errorArea.html(input.prop("tagName").toLowerCase() === "select" ? "Please select an option." : "Please fill field(s).");
                isValid = false;  // Mark as invalid
            } else if (input.attr("data-type") === "email" && !validateEmail(input.val())) {
                input.closest(".steps-inputArea").addClass("error");
                errorArea.addClass("show");
                errorArea.html("Enter a valid email address");
                isValid = false;  // Mark as invalid
            } else {
                input.closest(".steps-inputArea").removeClass("error");
                errorArea.removeClass("show");
            }
        });

        /*if (stepIndex === 0 && !isRecording) {
            errorArea.addClass("show");
            errorArea.html("Please start recording before proceeding.");
            isValid = false;
        }*/

        // Clear error after a short delay if validation passed
        if (isValid) {
            setTimeout(() => {
                errorArea.removeClass("show");
                errorArea.html("");
            }, 1000);  // Delay clearing the error message
        }

        return isValid;
    }

    // Focus First Input in Current Step
    function focusFirstInput(stepIndex) {
        focusTimer = setTimeout(() => {
            const firstInput = steps.eq(stepIndex).find("button,input,textarea").first();
            if (firstInput.length) firstInput[0].focus();
        }, 650);
    }

    // Next Step Logic
    nextBtn.on("click", function (e) {
        e.preventDefault();
        clearTimeout(focusTimer);

        if (isStepValid(currentStep) && currentStep < steps.length) {
            const btnType = nextBtn.attr("type");
            if (btnType !== "submit") {
                steps.eq(currentStep).addClass("completed").removeClass("active");
                currentStep++;
                if (currentStep < steps.length) {
                    steps.eq(currentStep).addClass("active");
                    focusFirstInput(currentStep);
                } else {
                    currentStep = steps.length - 1;
                }
                checkStepCount();
            } else {
                nextBtn.parents("form").trigger("submit");
            }
        }
    });

    // Previous Step Logic
    prevBtn.on("click", function (e) {
        e.preventDefault();
        clearTimeout(focusTimer);
        if (currentStep > 0) {
            steps.eq(currentStep).removeClass("active");
            steps.eq(currentStep - 1).removeClass("completed").addClass("active");
            currentStep--;
            focusFirstInput(currentStep);
            checkStepCount();
        }
    });

    // Record Button Click Logic
    // recordBtn.on("click", function (e) {
    //     e.preventDefault();
    //     e.stopPropagation();  // Prevent event propagation

    //     isRecording = !isRecording;  // Toggle recording state
    //     if (isRecording) {
    //         // Start recording logic here
    //         console.log("Recording started");
    //         recordBtn.text("Stop Recording");
    //     } else {
    //         // Stop recording logic here
    //         console.log("Recording stopped");
    //         recordBtn.text("Start Recording");
    //     }
    // });

    // Handle Enter/Tab Key Events for Inputs
    steps.find("button, input, select, textarea").on("keydown", function (e) {
        if (e.key === "Enter" || e.key === "Tab") {
            e.preventDefault();
            focusOut();
            nextBtn.click();
        }
    });

    // Focus Out Logic
    function focusOut() {
        var field = document.createElement("input");
        field.setAttribute("type", "text");
        document.body.appendChild(field);

        setTimeout(() => {
            field.focus();
            setTimeout(() => field.setAttribute("style", "display:none;"), 50);
        }, 50);
    }
});

// Ensure the window scrolls to the bottom when loading
window.scrollTo(0, document.body.scrollHeight);
