<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($user_email) && !empty($password))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,user_email,password) values ('$user_id','$user_name','$user_email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<br>";
			echo "&nbsp Please <strong> fill all</strong> the information!";
		}
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign up</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <label class="homeButton">
        <a href="../index.html" class="fa fa-home"> Back to Home </a> 
        </label>
          <form method="post" class="sign-up-form">
			<br><br>
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Name" name="user_name" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="user_email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" class="btn" value="Signup" />
            <br><br>
            <h3>
            <a href="login.php">Already have an Account?</a>
          </h3>
            <br /><br />
          </form>
          
        </div>
      </div>
    </div>
  </body>
</html>
