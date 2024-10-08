<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | Aron Elezi</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
</head>
<body>

    <div class="form-container"> 
        <div class="col col-1">
            <div class="image-layer">
                <img src="images/white-outline.png" class="form-image-main">
                <img src="images/dots.png" class="form-image dots">
                <img src="images/coin.png" class="form-image coin">
                <img src="images/spring.png" class="form-image spring">
                <img src="images/rocket.png" class="form-image rocket">
                <img src="images/cloud.png" class="form-image cloud">
                <img src="images/stars.png" class="form-image stars">
            </div>
            <p class="featured-words">You Are Few Minutes Way To Boost Your Skills With <span>Aron</span></p>

        </div> 
        <div class="col col-2">
            <div class="btn-box">
                <button onclick="loginBtnclick()" class="btn btn-1" id="login">Sign In</button>
                <button onclick="registerBtnClick()" class="btn btn-2" id="register">Sign Up</button>
           
            </div>

            <div class="login-form">
                <div class="form-title">
                    <span>Sign In</span>
                </div>
                <div class="form-inputs">
                    <div class="input-box">
                        <input type="text"  class="input-field" placeholder="Username" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text"  class="input-field" placeholder="Password" required>
                        <i class="bx bx-lock-alt icon"></i>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <div class="input-box">
                        <button class="input-submit">
                            <span>Sign In</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="social-login">
                    <i class="bx bxl-google"></i>
                    <i class="bx bxl-facebook"></i>
                    <i class="bx bxl-twitter"></i>
                    <i class="bx bxl-github"></i>
                </div>
            </div>
            <!--Register Form Container-->

            <div class="register-form">
                <div class="form-title">
                    <span>Create Account</span>
                </div>
                <div class="form-inputs">
                    <div class="input-box">
                        <input type="text"  class="input-field" placeholder="Email" required>
                        <i class="bx bx-envelope icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text"  class="input-field" placeholder="Username" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text"  class="input-field" placeholder="Password" required>
                        <i class="bx bx-lock-alt icon"></i>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <div class="input-box">
                        <button class="input-submit">
                            <span>Sign Up</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="social-login">
                    <i class="bx bxl-google"></i>
                    <i class="bx bxl-facebook"></i>
                    <i class="bx bxl-twitter"></i>
                    <i class="bx bxl-github"></i>
                </div>
            </div>
        </div> 
    </div>
    
</body>
</html>
<script src="js/main.js"></script>



