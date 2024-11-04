document.getElementById('registrationForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent form submission for validation

    // Clear all previous errors
    clearErrors();

    let isValid = true;

    // Validate Full Name (should not be empty and must have at least 3 characters)
    const nameInput = document.getElementById('name');
    const nameError = document.getElementById('nameError');
    if (nameInput.value.trim() === '') {
        nameError.textContent = "Name is required.";
        isValid = false;
    } else if (nameInput.value.length < 3) {
        nameError.textContent = "Name must be at least 3 characters long.";
        isValid = false;
    }

    // Validate Email (should follow standard email pattern)
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailInput.value.trim() === '') {
        emailError.textContent = "Email is required.";
        isValid = false;
    } else if (!emailPattern.test(emailInput.value)) {
        emailError.textContent = "Please enter a valid email address.";
        isValid = false;
    }

    // Validate Password (minimum 8 characters, at least one number)
    const passwordInput = document.getElementById('password');
    const passwordError = document.getElementById('passwordError');
    const passwordPattern = /^(?=.*[0-9]).{8,}$/;
    if (passwordInput.value.trim() === '') {
        passwordError.textContent = "Password is required.";
        isValid = false;
    } else if (!passwordPattern.test(passwordInput.value)) {
        passwordError.textContent = "Password must be at least 8 characters long and contain at least one number.";
        isValid = false;
    }

    // Validate Gender (should not be empty)
    const genderInput = document.getElementById('gender');
    const genderError = document.getElementById('genderError');
    if (genderInput.value === '') {
        genderError.textContent = "Please select your gender.";
        isValid = false;
    }

    // Validate Bio (minimum 20 characters)
    const bioInput = document.getElementById('bio');
    const bioError = document.getElementById('bioError');
    if (bioInput.value.trim() === '') {
        bioError.textContent = "Bio is required.";
        isValid = false;
    } else if (bioInput.value.length < 20) {
        bioError.textContent = "Bio must be at least 20 characters long.";
        isValid = false;
    }

    if (isValid) {
        alert("Form submitted successfully!");
        // Optionally, you can submit the form here
        // this.submit();
    }
});

function clearErrors() {
    document.getElementById('nameError').textContent = '';
    document.getElementById('emailError').textContent = '';
    document.getElementById('passwordError').textContent = '';
    document.getElementById('genderError').textContent = '';
    document.getElementById('bioError').textContent = '';
}
