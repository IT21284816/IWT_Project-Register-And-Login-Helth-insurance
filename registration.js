document.getElementById('registration-form').addEventListener('submit', function (e) {
    
    e.preventDefault();

    
    var fullname = document.getElementById('fullname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm-password').value;
    var dob = document.getElementById('dob').value;
    var gender = document.getElementById('gender').value;

    
    if (password !== confirmPassword) {
       
        alert("Passwords do not match!");
        return;
    }

    
    this.submit();
});
