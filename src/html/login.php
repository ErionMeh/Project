<?php 
include("header.php"); 
include_once("config.php");
?>
<style>
/* General reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: url('../../assets/images/all.jpg') no-repeat center center fixed; /* Use your image */
    background-size: cover;
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #fff;
}

/* Login container */
.login {
	background: rgba(0, 0, 0, 0.4); /* Semi-transparent black */
    backdrop-filter: blur(12px);
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    padding: 2.5rem;
    width: 100%;
    max-width: 400px;
    text-align: center;
    color: #fff;
}

h1 {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: #f8fafc;
    text-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
}

.form-control {
    width: 100%;
    padding: 1rem;
    margin-bottom: 1.2rem;
    font-size: 16px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.1);
    color: #f8fafc;
    transition: all 0.3s ease-in-out;
}

.form-control:focus {
    border-color: #38bdf8;
    box-shadow: 0 0 8px #38bdf8;
    outline: none;
}

button {
    background: linear-gradient(135deg, #38bdf8, #3b82f6);
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    padding: 1rem;
    width: 100%;
    cursor: pointer;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 15px rgba(59, 130, 246, 0.5);
}

button:active {
    transform: translateY(0);
    box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
}

small {
    display: block;
    margin-top: 1.5rem;
    font-size: 14px;
    color: #94a3b8;
}

small a {
    color: #38bdf8;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
}

small a:hover {
    color: #3b82f6;
}

p {
    margin-top: 2rem;
    font-size: 13px;
    color: #94a3b8;
}


</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">


    <div class="login">

        <form class="form-signin" action="loginLogic.php" method="post">

            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

            <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">Sign in</button>

            <small>Don't have account ? <a href="signup.php">Sign Up</a></small>

            <small><a href="logout.php">log out</a></small>
            <p class="mt-5 mb-3 text-muted">Digital School  &copy; 2024</p>
        </form>

    </div>

