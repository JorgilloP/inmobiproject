document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector(".input-group button");
    const passwordInput = document.getElementById("password");
    const buttonIcon = button.querySelector("i");

    button.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            buttonIcon.classList.replace("bi-eye", "bi-eye-slash");
        } else {
            passwordInput.type = "password";
            buttonIcon.classList.replace("bi-eye-slash", "bi-eye");
        }
    });
});
