<?php
  include_once "admin_header.php";
  if (isset($_SESSION['Useradmin'])) {
?>
<h2 style="text-align: center;">Contact Table</h2>
<table border="1" class="table" id="userTable">
  <thead class="table-success">
      <th>Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Tel</th>
      <th>Message</th>
      <th colspan="2"></th>
  </thead>
  <tbody>
    <?php
      $sqlMessages = "SELECT * FROM messages";
      $getMessages = $conn->prepare($sqlMessages);
      $getMessages->execute();
      $messages = $getMessages->fetchAll();
      foreach ($messages as $message) {
      ?>
        <tr>
          <td data-label="Id"><?php echo $message['id']; ?></td>
          <td data-label="First Name"><?php echo $message['Name']; ?></td>
          <td data-label="Last Name"><?php echo $message['Surname']; ?></td>
          <td data-label="Email"><?php echo $message['Email']; ?></td>
          <td data-label="Tel"><?php echo $message['Tel']; ?></td>
          <td data-label="Message"><?php echo $message['Message']; ?></td>
          <td data-label=""><a href="delete_contact.php?id=<?php echo $message['id'] ?>" class="btn btn-danger">Delete</a></td>
        </tr>
      <?php
      }
    ?>
  </tbody>
  <tfoot>
    <tr>
      <td><a href="admin_dashboard.php" class="btn btn-primary">Admin Table</a></td>
      <td><a href="dashboard.php" class="btn btn-primary">Users Table</a></td>
    </tr>
  </tfoot>
</table>
</body>
</html>
<?php } else {
  header("location: admin_login.php?you+need+to+login");
}
?>
