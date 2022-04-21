<?php
  include_once "backend/connection.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="CSS/Style.css">
  <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
  <header class="header">
    <nav class="nav">
      <div class="logo"><a href="index.php"><img  src="img/PNG logo.png" alt="MEA_logo"></a></div>
      <div class="showNavBarBtn" id="showNavBarBtn">
        <button onclick="showNavBar();" name="button">=</button>
      </div>
        <div class="navBar" id="navBar">
          <div id="hideNavBarBtn"><button onclick="hideNavBar();" name="button">X</button> </div>
            <div><a href="index.php">Home</a> </div>
          <div><a target="_blank" href="https://www.google.com/maps/place/Mbrojtja+e+Ambientit/@42.3710962,21.199601,17z/data=!3m1!4b1!4m5!3m4!1s0x13547dba0a090c11:0xbd2d5cdba67bf3ea!8m2!3d42.3710923!4d21.2017897">Location</a>  </div>
          <div><a href="contact.php">Contact Us</a>
          </div>
          <div><a id="active" href="about.php">About Us</a>
          </div>
        <?php
          if (isset($_SESSION['Username'])) {
            $getUsers = $conn->prepare("SELECT * FROM users WHERE Username='".$_SESSION["Username"]."'");
            $getUsers->execute();
            $users = $getUsers->fetchAll();
            foreach ($users as $user) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['Name'] = $user['Name'];
                $_SESSION['Surname'] = $user['Surname'];
            }
            ?>
              <h4><?php echo $_SESSION['Name'] . " " . $_SESSION['Surname']; ?></h4>
              <a href="backend/logout.php" class="button"><button>Log out</button></a>
            <?php
          } elseif (isset($_SESSION['Useradmin'])) {
            $getAdmins = $conn->prepare("SELECT * FROM admin WHERE Username='".$_SESSION["Useradmin"]."'");
            $getAdmins->execute();
            $admins = $getAdmins->fetchAll();
            foreach ($admins as $admin) {
                $_SESSION['id'] = $admin['id'];
                $_SESSION['Name'] = $admin['Name'];
                $_SESSION['Surname'] = $admin['Surname'];
            }
            ?>
              <h4><?php echo $_SESSION['Name'] . " " . $_SESSION['Surname']; ?></h4>
              <a href="admin/dashboard.php" class="button"><button>Dashboard</button></a>
              <a href="backend/logout.php" class="button"><button>Log out</button></a>
            <?php
          } else {
            ?>
              <a href="login.php" class="button"><button>Log in</button></a>
            <?php
          }
        ?>
      </div>
    </nav>
  </header>
  <script src="JS/navBar.js" charset="utf-8"></script>
