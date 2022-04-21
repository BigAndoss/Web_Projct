<?php
  include_once "admin_header.php";
?>
    <div class="container-login">
      <form class="form" id="login" method="post" action="../backend/login_backend.php">
          <h1 class="form_title">Login</h1>
          <div class="form_message form__message--error"></div>
          <div class="form_input-group">
              <input type="text" name="Useradmin" class="form_input" autofocus placeholder="Username">
              <div class="form_input-error-message"></div>
          </div>
          <div class="form_input-group">
              <input type="password" name="Password" class="form_input" autofocus placeholder="Password">
              <div class="form_input-error-message"></div>
          </div>
          <button class="form_button" name="adminLoginBtn" type="submit">Continue</button>
          <p class="form_text">
              <a href="#" class="form_link">Forgot your password?</a>
          </p>
      </form>
    </div>
