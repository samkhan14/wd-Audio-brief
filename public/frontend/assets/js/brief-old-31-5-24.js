var currentStep = 0;
jQuery(document).ready(function () {
  const steps = jQuery(".stepArea");
  const nextBtn = jQuery(".next-step");
  const prevBtn = jQuery(".prev-step");
  const progressBar = jQuery(".step-progressBar");
  let focusTimer;

  const updateProgressBar = () => {
    const percentage = (currentStep / (steps.length - 1)) * 100;
    progressBar.css("width", `${percentage}%`);
  };

  function checkStepCount() {
    if (currentStep > 0) {
      prevBtn.addClass("active");
    } else {
      prevBtn.removeClass("active");
    }

    if (currentStep < steps.length - 1) {
      nextBtn.addClass("active");
    } else {
      nextBtn.removeClass("active");
    }
    updateProgressBar();
  }

  const validateEmail = (email) => {
    return email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
  };

  function isStepValid(stepIndex) {
    const inputs = steps
      .eq(stepIndex)
      .find(
        'input[type="text"], input[type="email"],input[type="number"], input[type="text"], select, textarea'
      );
    const errorArea = jQuery(".step-error");

    for (let i = 0; i < inputs.length; i++) {
      const input = inputs.eq(i);

      if (!input.val() && input.attr("required")) {
        input.closest(".steps-inputArea").addClass("error");
        errorArea.addClass("show");
        if (input.prop("tagName").toLowerCase() === "select") {
          errorArea.html("Please select an option.");
        } else {
          errorArea.html("Please fill field(s).");
        }
        return false;
      } else {
        if (input.attr("type") === "email" && !validateEmail(input.val())) {
          input.closest(".steps-inputArea").addClass("error");
          errorArea.addClass("show");
          errorArea.html("Enter a valid email address");
          return false;
        }

        input.closest(".steps-inputArea").removeClass("error");
        errorArea.removeClass("show");
        setTimeout(function () {
          errorArea.html("");
        }, 300);
      }
    }

    return true;
  }

  function focusFirstInput(stepIndex) {
    focusTimer = setTimeout(function () {
      const firstInput = steps.eq(stepIndex).find("input, textarea").first();
      if (firstInput.length) {
        firstInput[0].focus();
      }
    }, 650);
  }

  nextBtn.on("click", function (e) {
    e.preventDefault();
    clearTimeout(focusTimer);
    if (isStepValid(currentStep) && currentStep < steps.length - 1) {
      steps.eq(currentStep).addClass("completed").removeClass("active");
      currentStep++;
      if (currentStep < steps.length) {
        steps.eq(currentStep).addClass("active");
        focusFirstInput(currentStep);
      } else {
        currentStep = steps.length - 1;
      }
      checkStepCount();
    }
  });

  prevBtn.on("click", function (e) {
    e.preventDefault();
    clearTimeout(focusTimer);
    if (currentStep > 0) {
      steps.eq(currentStep).removeClass("active");
      steps
        .eq(currentStep - 1)
        .removeClass("completed")
        .addClass("active");
      currentStep--;
      focusFirstInput(currentStep);
      checkStepCount();
    }
  });

  steps.find("input, select, textarea").on("keypress", function (e) {
    if (e.which === 13) {
      e.preventDefault();
      nextBtn.click();
    }
  });
});
