<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial;
            display: flex;
            justify-content: center;
           
        }
        table {
            border: 1px solid #333;
            padding: 20px;
            border-radius: 5px;
        }
        input {
            width: 250px;
            padding: 8px;
            margin: 5px 0;
        }
        button {
            padding: 10px 18px;
            margin-top: 10px;
            
        }
    </style>
</head>

<body>

    

    <table>
        <tr><td><h2>Student Registration</h2>
        </td></tr>
        <tr><td>Full Name:</td></tr>
        <tr><td><input type="text" id="name"></td></tr>

        <tr><td>Email:</td></tr>
        <tr><td><input type="email" id="email"></td></tr>

        <tr><td>Password:</td></tr>
        <tr><td><input type="password" id="password"></td></tr>

        <tr><td>Confirm Password:</td></tr>
        <tr><td><input type="password" id="confirm_password"></td></tr>

        <tr><td><button type="button" onclick="handleSubmit()">Register</button></td></tr>

        <tr><td><div id="output" style="margin-top:15px; font-size:18px;"></div></td></tr>

    </table>


<script>
function handleSubmit() {

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const confirm_password = document.getElementById("confirm_password").value;
    const output = document.getElementById("output");

    
    if (name === "" || email === "" || password === "" || confirm_password === "") {
        output.innerHTML = `<span style="color:red">All fields are required.</span>`;
        return;
    }

  
    if (!email.includes("@")) {
        output.innerHTML = `<span style="color:red">Email must contain '@'</span>`;
        return;
    }

  
    if (password !== confirm_password) {
        output.innerHTML = `<span style="color:red">Passwords do not match.</span>`;
        return;
    }

    output.innerHTML = `
        <strong style="color:green">✔ Registration Successful!</strong><br><br>
        Name: ${name}<br>
        Email: ${email}<br>
    `;
}
</script>

</body>
</html>
