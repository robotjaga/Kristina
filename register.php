<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css"> 
</head>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

/* Main container */
.container {
    display: flex;
    width: 90%;
    max-width: 1200px;
    height: 80vh;
    background: white;
}

/* Left side - Image section */
.image-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Right side - Form section */
.form-section {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 3rem;
}

.form-section h2 {
    font-size: 3rem;
    margin-bottom: 20px;
    color: #333;
}

/* Input fields */
.form-section input {
    width: 100%;
    padding: 15px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 18px;
}

/* Create an Account button */
.register-btn {
    width: 100%;
    padding: 15px;
    margin-top: 10px;
    background-color: red;
    border: none;
    color: white;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.register-btn:hover {
    background-color: darkred;
}

/* Google Sign-Up button */
.google-btn {
    width: 100%;
    padding: 15px;
    margin-top: 10px;
    background-color: white;
    border: 1px solid #ccc;
    color: black;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.google-btn:hover {
    background-color: #f1f1f1;
}

/* Log In Link */
.login-link {
    margin-top: 15px;
    font-size: 16px;
    color: #555;
}

.login-link a {
    color: red;
    text-decoration: underline;
    font-weight: bold;
}

.login-link a:hover {
    color: darkred;
}

/* Responsiveness*/
@media (max-width: 900px) {
    .container {
        flex-direction: column;
        height: auto;
    }

    .image-section {
        height: 300px;
    }

    .form-section {
        padding: 2rem;
        text-align: center;
    }
}

</style>
<body>

    <div class="container">
        <div class="image-section">
            <img src="./images/reg.png" alt="Fashion Image">
        </div>

    
        <div class="form-section">
            <h2>Create an Account</h2>
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="register-btn">Create an Account</button>
                <button type="button" class="google-btn">Sign up with Google</button>
            </form>
            <p class="login-link">Already have an account? <a href="./login.php">Log in</a></p>
        </div>
    </div>

</body>
</html>
