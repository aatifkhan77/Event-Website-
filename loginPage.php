<?php
    include "./php/conn.php";

    session_start();
    if(isset($_SESSION) and isset($_SESSION["user"])){
        header("location: ./index.php");
    }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login/SignUp </title>

    <!-- For Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- For CSS -->
    <link rel="stylesheet" type="text/css" href="css/loginPage.css">

</head>

<body>

    <!-- For Background Image -->
    <div class="login">
        <img src="./assets/Image/loginbg.jpg" alt="login image" class="login-img">

        
        <div class="wrapper">
            <div class="form-wrapper sign-in">

                <!-- For Login Form -->
                <form id="loginForm">
                    <h2>Login</h2>
                    <div class="input-group">
                        <i class="ri-user-3-line login-icon"></i>
                        <input type="text" name="useremail" id="useremail" required></i>
                        <label for=""></i>Email/Mobile Number</label>
                    </div>
                    <div class="input-group">
                        <i class="ri-lock-2-line login-icon"></i>
                        <input type="password" name="pass" id="loginPass" required>
                        <label for="">Password</label>
                        <i class="ri-eye-off-line login-eye" id="login-eye"></i>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <div class="BtnOut">
                        <button id="signInBtn">Login</button>
                    </div>
                    <div class="signUp-link">
                        <p>Don't have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
                    </div>
                </form>
            </div>

            <!-- For SignUp Form -->
            <div class="form-wrapper sign-up">
                <form id="addForm">
                    <h2>Sign Up</h2>
                    <div class="input-group">
                        <input type="text" name="name" id="name" required>
                        <label for="">Name</label>
                    </div>
                    <div class="input-group">
                        <i class="ri-user-3-line login-icon"></i>
                        <input type="email" name="emailSignup" id="emailSignup" required>
                        <label for="">Email/Mobile Number</label>
                    </div>
                    <div class="input-group">
                        <i class="ri-lock-2-line login-icon"></i>
                        <input type="password" name="signUpPass" id="signUpPass" required>
                        <label for="">Password</label>
                        <i class="ri-eye-off-line login-eye" id="signUpeyePass"></i>
                    </div>
                    <div class="input-group">
                        <i class="ri-lock-2-line login-icon"></i>
                        <input type="password" name="confirmPass" id="confirmPass" required>
                        <label for=""> Confirm Password</label>
                        <i class="ri-eye-off-line login-eye" id="signUpeyecnfrmPass"></i>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox"> I agree to the terms & conditions</label>
                    </div>
                    <div class="BtnOut">
                        <button id="signUpBtn">Sign Up</button>
                    </div>
                    <div class="signUp-link">
                        <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- For JavaScript -->
    <script src="js/loginPage.js"></script>
    <script src="js/userLoginBack.js"></script>
    <script src="js/userSignupBack.js"></script>

</body>

</html>