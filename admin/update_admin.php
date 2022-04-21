<?php
  require "../backend/connection.php";
  include_once 'admin_header.php';
  if(isset($_SESSION['Useradmin'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM admin WHERE id=$id";
  $getAdmins = $conn->prepare($sql);
  $getAdmins->execute();
  $admins = $getAdmins->fetchAll();
?>
    <div class="container-login">
        <form class="form" action="../backend/update_admin_backend.php" method="post" id="createAccount">
            <h1 class="form_title">Update Admin</h1>
            <div class="form_message form_message--error"></div>
            <div class="form_input-group">
                <input type="hidden" name="id" value="<?php echo $admins[0]['id']; ?>">
                <input type="text" name="Name" id="signupName" value="<?php echo $admins[0]['Name']; ?>" class="form_input" autofocus placeholder="First Name">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="text" name="Surname" id="signupSurname" value="<?php echo $admins[0]['Surname']; ?>" class="form_input" autofocus placeholder="Last Name">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="text" name="Username" id="signupUsername" value="<?php echo $admins[0]['Username']; ?>" class="form_input" autofocus placeholder="Username">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="text" name="Email" class="form_input" value="<?php echo $admins[0]['Email']; ?>" autofocus placeholder="Email Address">
                <div class="form_input-error-message"></div>
            </div>
            <button class="form_button" name="updateBtn" type="submit">Update</button>
        </form>
    </div>
    <script src="JS/login.js"></script>
</body>
</html>
<?php } else {
    header("location: admin_login.php?you+need+to+login");
    exit();
}
?>
