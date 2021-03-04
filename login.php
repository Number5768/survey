<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - เข้าสู่ระบบ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../survey/assets/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../survey/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../survey/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../survey/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../survey/assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../survey/assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../survey/assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../survey/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../survey/assets/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30 animate__animated animate__fadeInDown animate__delay 3s">
                <div class="login100-form validate-form">
                    <span class="login100-form-title p-b-55">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" id="user_id" type="text" name="email" placeholder="USERNAME">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                        <input class="input100" id="pwd" type="password" name="pass" placeholder="PASSWORD">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-25">
                        <button id="login_user" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center w-full p-t-42 p-b-22">
                        <span class="txt1">
                            Or login with
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="../survey/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../survey/assets/vendor/bootstrap/js/popper.js"></script>
    <script src="../survey/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../survey/assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../survey/assets/js/main.js"></script>
    <script src="../survey/controller/login.js"></script>
</body>

</html>