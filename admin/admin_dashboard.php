<?php
  include_once "admin_header.php";
  if (isset($_SESSION['Useradmin'])) {
?>
<h2 style="text-align: center;">Admins Table</h2>
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
      $sqlAdmin = "SELECT * FROM admin";
      $getAdmin = $conn->prepare($sqlAdmin);
      $getAdmin->execute();
      $admins = $getAdmin->fetchAll();
      foreach ($admins as $admin) {
      ?>
        <tr>
          <td data-label="Id"><?php echo $admin['id']; ?></td>
          <td data-label="First Name"><?php echo $admin['Name']; ?></td>
          <td data-label="Last Name"><?php echo $admin['Surname']; ?></td>
          <td data-label="Username"><?php echo $admin['Username']; ?></td>
          <td data-label="Email"><?php echo $admin['Email']; ?></td>
          <td data-label=""><a href="update_admin.php?id=<?php echo $admin['id'] ?>" class="btn btn-warning">Update</a></td>
          <td data-label=""><a href="delete_admin.php?id=<?php echo $admin['id'] ?>" class="btn btn-danger">Delete</a></td>
        </tr>
      <?php
      }
    ?>
  </tbody>
  <tfoot>
    <tr>
      <td><a href="dashboard.php" class="btn btn-primary">Users Table</a></td>
      <td><a href="contact_dashboard.php" class="btn btn-primary">Cntact Table</a></td>
    </tr>
  </tfoot>
</table>
</body>
</html>
<?php } else {
  header("location: admin_login.php?you+need+to+login");
}
?>
