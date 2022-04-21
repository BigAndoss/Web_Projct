<?php
  include_once "header.php";
?>
    <div class="container-login">
        <form class="form" id="login" method="post" action="backend/login_backend.php">
            <h1 class="form_title">Login</h1>
            <div class="form_message form__message--error"></div>
            <div class="form_input-group">
                <input type="text" name="Username" class="form_input" autofocus placeholder="Username">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="password" name="Password" class="form_input" autofocus placeholder="Password">
                <div class="form_input-error-message"></div>
            </div>
            <button class="form_button" name="loginBtn" type="submit">Continue</button>
            <p class="form_text">
                <a href="#" class="form_link">Forgot your password?</a>
            </p>
            <p class="form_text">
                <a class="form_link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
        <form class="form form--hidden" action="backend/create_account_backend.php" method="post" id="createAccount">
            <h1 class="form_title">Create Account</h1>
            <div class="form_message form_message--error"></div>
            <div class="form_input-group">
                <input type="text" name="Name" id="signupName" class="form_input" autofocus placeholder="First Name">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="text" name="Surname" id="signupSurname" class="form_input" autofocus placeholder="Last Name">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="text" name="Username" id="signupUsername" class="form_input" autofocus placeholder="Username">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="text" name="Email" class="form_input" autofocus placeholder="Email Address">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="password" name="Password" class="form_input" autofocus placeholder="Password">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="password" name="confirmPassword" class="form_input" autofocus placeholder="Confirm password">
                <div class="form_input-error-message"></div>
            </div>
            <button class="form_button" name="createAccountBtn" type="submit">Continue</button>
            <p class="form_text">
                <a class="form_link" href="./" id="linkLogin">Already have an account? Log in</a>
            </p>
        </form>
    </div>
    <script src="JS/login.js"></script>
</body>
</html>
