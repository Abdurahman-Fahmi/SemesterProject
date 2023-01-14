<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>My website</title>
  </head>
  <body style="background-color: #eef5f8">
    <label class="homeButton">
      <a href="../index.html" class="fa fa-home"> Back to Home </a>
    </label>
    <br /><br /><br />
    <a href="logout.php">Logout</a><br /><br />
    <h1>Managing page</h1>
    <h3>
      <br />
      Hello,
      <?php echo $user_data['user_name']; ?>
    </h3>
  </body>
</html>
