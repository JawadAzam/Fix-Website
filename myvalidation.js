function validateForm() {
    var password = document.getElementById('password').value;
    var confirmpassword = document.getElementById('confirmpassword').value;
    var chkpass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (!chkpass.test(password))
    {
        alert('Minimum 8 Characters \n' + 'Must alphanumeric \n' + 'Has capital and small letters \n' + 'Has  a special char.');
        return false;
    }

    if (password != confirmpassword) {
        alert("Passwords doesnt match");
        return false;
    }
}