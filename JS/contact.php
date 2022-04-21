<?php
  include_once "header.php";
?>
  <div class="container-Contact">
  <form  name="contact" class="contact"  action="backend/message_backend.php" onsubmit="return validateForm()" method="post">
    <h3>Na kontaktoni</h3>
    <h4>Dergoni mesazh tek ne:</h4>
    <fieldset>
      <input placeholder="Name" type="text" name="Emri"  autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Surname" name="Surname" type="text">
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" name="Email"  >
    </fieldset>
    <fieldset>
      <input type="number" name="Tel" placeholder="Tel num">
    </fieldset>
    <fieldset>
      <textarea placeholder="Message...."   name="Message"></textarea>
    </fieldset>
    <fieldset>
      <button name="sendMsg" type="submit" id="contact-submit">Dergo</button>
    </fieldset>
  </form>
</div>
  <script src="JS/contact_val.js"></script>
</body>
</html>
