document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registrationForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Reset previous errors
        clearErrors();

        // Validate form
        const isValid = validateForm();

        if (isValid) {
            // If client-side validation passes, submit the form
            form.submit();
        }
    });

    function validateForm() {
        let isValid = true;

        // Clear previous errors
        const errorMessages = document.querySelectorAll('.error-text');
        errorMessages.forEach(error => error.textContent = '');

        function showError(input, message) {
            let errorText = input.parentElement.querySelector('.error-text');
            if (!errorText) {
                errorText = document.createElement('div');
                errorText.className = 'error-text';
                input.parentElement.appendChild(errorText);
            }
            errorText.textContent = message;
            input.style.borderColor = 'red';
        }

        // First Name validation
        const firstName = document.getElementById('firstName');
        if (firstName.value.trim() === '') {
            showError(firstName, 'First name is required');
            isValid = false;
        }

        // Last Name validation
        const lastName = document.getElementById('lastName');
        if (lastName.value.trim() === '') {
            showError(lastName, 'Last name is required');
            isValid = false;
        }

        // Username validation
        const username = document.getElementById('username');
        if (username.value.trim() === '') {
            showError(username, 'Username is required');
            isValid = false;
        } else if (username.value.length < 4) {
            showError(username, 'Username must be at least 4 characters');
            isValid = false;
        }

        // Email validation
        const email = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.value.trim() === '') {
            showError(email, 'Email is required');
            isValid = false;
        } else if (!emailRegex.test(email.value)) {
            showError(email, 'Please enter a valid email address');
            isValid = false;
        }

        // Password validation
        const password = document.getElementById('password');
        if (password.value.trim() === '') {
            showError(password, 'Password is required');
            isValid = false;
        } else if (password.value.length < 8) {
            showError(password, 'Password must be at least 8 characters');
            isValid = false;
        }

        // Confirm Password validation
        const confirmPassword = document.getElementById('confirmPassword');
        if (confirmPassword.value.trim() === '') {
            showError(confirmPassword, 'Please confirm your password');
            isValid = false;
        } else if (confirmPassword.value !== password.value) {
            showError(confirmPassword, 'Passwords do not match');
            isValid = false;
        }

        // Terms checkbox validation
        const agreeTerms = document.getElementById('agreeTerms');
        if (!agreeTerms.checked) {
            showError(agreeTerms, 'You must agree to the terms and conditions');
            isValid = false;
        }

        return isValid;
    }

    function clearErrors() {
        // Remove all error messages
        const errorMessages = document.querySelectorAll('.error-text');
        errorMessages.forEach(error => error.remove());

        // Reset border colors
        const inputs = form.querySelectorAll('input');
        inputs.forEach(input => input.style.borderColor = '');
    }
});
