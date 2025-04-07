document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loginForm');
    const errorMessage = document.createElement('div');
    errorMessage.className = 'error-message';
    form.insertBefore(errorMessage, form.firstChild);
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Clear previous errors
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
        
        // Login (email/username) validation
        const login = document.getElementById('login');
        if (login.value.trim() === '') {
            showError('Please enter your email or username');
            isValid = false;
        }
        
        // Password validation
        const password = document.getElementById('password');
        if (password.value.trim() === '') {
            showError('Please enter your password');
            isValid = false;
        }
        
        return isValid;
    }
    
    function showError(message) {
        errorMessage.textContent = message;
        errorMessage.style.display = 'block';
    }
    
    function clearErrors() {
        errorMessage.style.display = 'none';
        errorMessage.textContent = '';
    }
});