<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"> 
    <style>* {
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
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Login button & forgot password layout */
.login-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 10px;
}

/* Smaller Log In button, left-aligned */
.login-btn {
    padding: 10px 20px;
    background-color: red;
    border: none;
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.login-btn:hover {
    background-color: darkred;
}

/* Forgot Password*/
.forgot-password a {
    color: red;
    text-decoration: underline;
    font-size: 16px;
    font-weight: bold;
}

.forgot-password a:hover {
    color: darkred;
}

/* Responsiveness */
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

    .login-container {
        flex-direction: column;
        align-items: center;
    }

    .forgot-password {
        margin-top: 10px;
    }
}</style>
</head>
<body>

    <div class="container">
        <div class="image-section">
            <img src="./images/reg.png" alt="Fashion Image">
        </div>


        <div class="form-section">
            <h2>Log in to Exclusive</h2>
            <form action="#" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="login-container">
                    <button type="submit" class="login-btn">Log In</button>
                    <p class="forgot-password"><a href="#">Forgot Password?</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
