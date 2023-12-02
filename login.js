function validateForm() {
    // Get the values from the form
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Validate the form
    if (username === '' || password === '') {
        // If the username or password is empty, show an alert
        alert("Username and Password cannot be empty!");
        return false;
    }

    // If validation passes, return true to submit the form
    return true;
}

