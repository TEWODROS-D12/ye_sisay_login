<?php
include("authentication.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration form in html, css & js</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21">Login</h2>
            <div class="err">
                <?php
                echo $err;
                ?>
            </div>
            <form name="login_form" action="" method="POST" onsubmit="return validation()">
                <div class="input-box animation" style="--i:1; --j:22">
                    <input type="text" name="fname" id="fname" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box animation" style="--i:2; --j:23">
                    <input type="password" name="password" id="password" required>
                    <label for="">Password</label>
                </div>
                <button type="submit" name="LOGIN" class="btn animation" style="--i:3; --j:24">Login</button>
                <div class="loginReg-link animation" style="--i:4; --j:25">
                    <p>New to our system? <a href="#" class="reg-link">Sign up</a> </p> <!-- Don't have an account? -->
                </div>
            </form>
        </div>
        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;">Welcome to <span>EthioPlate</span> Food Delivery</h2>
            <p class="animation" style="--i:1; --j:21;">Local food delivery app in Addis</p>
        </div>

        <div class="form-box signup">
            <h2 class="animation" style="--i:17; --j:0;">Sign Up</h2>
            <form action="home_page.php" method="POST">
                <div class="input-box animation" style="--i:18; --j:1;">
                    <input type="text" name="name" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box animation" style="--i:19; --j:2;">
                    <input type="email" name="email" required>
                    <label for="">Your Email</label>
                </div>
                <div class="input-box animation" style="--i:20; --j:3;">
                    <input type="tel" name="phone" required>
                    <label for="">Phone Number</label>
                </div>
                <div class="input-box animation" style="--i:21; --j:4;">
                    <input type="password" name="pwd" required>
                    <label for="">Password</label>
                </div>
                <button type="submit" class="btn animation" style="--i:22; --j:5;">Sign Up</button>
                <div class="loginReg-link animation" style="--i:23; --j:6;">
                    <p>Already have an account? <a href="#" class="login-link">Login</a> </p> <!-- Have an account? -->
                </div>
            </form>
        </div>
        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">Welcome to <span>EthioPlate</span> Food Delivery</h2>
            <p class="animation" style="--i:18; --j:1;">Local food delivery app in Addis</p>
        </div>

    </div>

    <!-- <script>
        function validation() {
            var name = document.login_form.fname.value;
            var pwd = document.login_form.password.value;

            if ((name.length == "") && (pwd.length == "")) {
                alert("User name and password fields are empty.");
                return false;
            } else {
                if (name.length == "") {
                    alert("User name field is empty.");
                    return false;
                } else if (pwd.length == "") {
                    alert("Password field is empty");
                    return false;
                }
            }
        }
    </script> -->

    <script src="script.js"></script>

</body>

</html>