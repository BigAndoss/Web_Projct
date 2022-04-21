<?php
  include_once "admin_header.php";
  if (isset($_SESSION['Useradmin'])) {
?>
<h2 style="text-align: center;">Users Table</h2>
<table border="1" class="table" id="userTable">
  <thead class="table-success">
      <th>Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
      <th>Email</th>
      <th colspan="2"></th>
  </thead>
  <tbody>
    <?php
      $sqlUser = "SELECT * FROM users";
      $getUsers = $conn->prepare($sqlUser);
      $getUsers->execute();
      $users = $getUsers->fetchAll();
      foreach ($users as $user) {
      ?>
        <tr>
          <td data-label="Id"><?php echo $user['id']; ?></td>
          <td data-label="First Name"><?php echo $user['Name']; ?></td>
          <td data-label="Last Name"><?php echo $user['Surname']; ?></td>
          <td data-label="Username"><?php echo $user['Username']; ?></td>
          <td data-label="Email"><?php echo $user['Email']; ?></td>
          <td data-label=""><a href="update_user.php?id=<?php echo $user['id'] ?>" class="btn btn-warning">Update</a></td>
          <td data-label=""><a href="delete_user.php?id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a></td>
        </tr>
      <?php
      }
    ?>
  </tbody>
  <tfoot>
    <tr>
      <td><a href="admin_dashboard.php" class="btn btn-primary">Admin Table</a></td>
      <td><a href="contact_dashboard.php" class="btn btn-primary">Contact Table</a></td>
    </tr>
  </tfoot>
</table>
</body>
</html>
<?php } else {
  header("location: admin_login.php?you+need+to+login");
}
?>
