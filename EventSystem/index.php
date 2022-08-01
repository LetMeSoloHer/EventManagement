<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="./src/css/main.css">
</head>
<body>
    <div class="container">
        <!-- LOGIN USER -->
        <form class="form" id="login" method="post" action="login.php" >
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email" id="log_email" name="log_email" >
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" id="log_pass" name="log_pass" required="">
                <div class="form__input-error-message" ></div>
            </div>
            <button class="form__button" type="submit" id="login" name="login">Continue</button>
            <p class="form__text">
                <a href="./" class="form__link" id="linkForgotPassword">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
        <!-- SIGNUP USER -->
        <form class="form form--hidden" id="createAccount" method="post" action="signup.php">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
             <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="First Name" id="sign_fname" name="sign_fname" >
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Last Name" id="sign_lname" name="sign_lname">
                <div class="form__input-error-message"></div>
            </div>
            
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address" id="sign_email"  name="sign_email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" id="sign_pass" name="sign_pass" >
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password" id="sign_confirm_pass"name="sign_confirm_pass" >
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="signup" id="signup">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
        <!-- FORGOT PASSWORD -->
          <form class="form form--hidden" id="forgotPassword"  method="post" action="signup">
            <h1 class="form__title">Reset Password</h1>
            <div class="form__message form__message--error"></div>
            
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address" id="forg_email" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Old Password" id="forg_oldpassword" required>
                <div class="form__input-error-message"></div>
            </div>
             <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="New Password"id="forg_newpassword" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" value="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Go back</a>
            </p>
        </form>

    </div>
    <script src="./src/js/main.js"></script>
</body>
