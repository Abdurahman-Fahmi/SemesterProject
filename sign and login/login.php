<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_email = $_POST['user_email'];
		$password = $_POST['password'];

		if(!empty($user_email) && !empty($password) && !is_numeric($user_email))
		{

			//read from database
			$query = "select * from users where user_email = '$user_email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "&nbsp <strong> Sorry</strong> wrong username or password!";
		}
		else
		{
			echo "&nbsp <strong> Sorry</strong> wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
	<title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" class="sign-up-form">
			<br><br>
            <h2 class="title">Sign in</h2>
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
			<a href="signup.php">Create an Account</a><br><br>
          </h3>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
