function validateForm() {
    let valid = true;
    
    // Clear previous error messages
    document.getElementById("usernameError").innerText = "";
    document.getElementById("firstNameError").innerText = "";
    document.getElementById("lastNameError").innerText = "";
    document.getElementById("passwordError").innerText = "";
    document.getElementById("confirmPasswordError").innerText = "";
    document.getElementById("emailError").innerText = "";
    document.getElementById("addressError").innerText = "";
    document.getElementById("mobileError").innerText = "";
    document.getElementById("genderError").innerText = "";

    // Validate Username
    if (document.getElementById("username").value.trim() === "") {
        document.getElementById("usernameError").innerText = "Username is required.";
        valid = false;
    }

    // Validate First Name
    if (document.getElementById("firstName").value.trim() === "") {
        document.getElementById("firstNameError").innerText = "First name is required.";
        valid = false;
    }

    // Validate Last Name
    if (document.getElementById("lastName").value.trim() === "") {
        document.getElementById("lastNameError").innerText = "Last name is required.";
        valid = false;
    }

    // Validate Password
    const password = document.getElementById("password").value;
    if (password.length < 6) {
        document.getElementById("passwordError").innerText = "Password must be at least 6 characters long.";
        valid = false;
    }

    // Validate Confirm Password
    const confirmPassword = document.getElementById("confirmPassword").value;
    if (confirmPassword !== password) {
        document.getElementById("confirmPasswordError").innerText = "Passwords do not match.";
        valid = false;
    }

    // Validate Email
    const email = document.getElementById("email").value;
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!email.match(emailPattern)) {
        document.getElementById("emailError").innerText = "Please enter a valid email address.";
        valid = false;
    }

    // Validate Address
    if (document.getElementById("address").value.trim() === "") {
        document.getElementById("addressError").innerText = "Address is required.";
        valid = false;
    }

    // Validate Mobile Number
    const mobile = document.getElementById("mobile").value;
    if (!mobile.match(/^\d{10}$/)) {
        document.getElementById("mobileError").innerText = "Please enter a valid 10-digit mobile number.";
        valid = false;
    }

    // Validate Gender
    if (!document.querySelector('input[name="gender"]:checked')) {
        document.getElementById("genderError").innerText = "Please select a gender.";
        valid = false;
    }

    return valid;