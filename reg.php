<html>
<head>
  <link rel="stylesheet" href="reg.css">
  
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
<div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form class="signup-form" action="registration.php" method="POST">
					<input type="email" class="input" name="email" id="user_email" autocomplete="off" placeholder="Email" required/>
					<input type="text" class="input" name="name" id="Name" autocomplete="off" placeholder="Name" required/>
					<input type="tel" class="input" name="mobile" id="Mobile" pattern="[0-9]{10}" autocomplete="off" placeholder="Mobile No." required/>
					<input type="password" class="input" name="pass"  id="user_pass" autocomplete="off" placeholder="Password" required/>
					<input type="password" class="input" name="repass"  id="user_pass" autocomplete="off" placeholder="Re-enter Password" required/>
					<input type="submit" name="submit" class="button" value="Sign Up">
				</form><!--.login-form-->
				<div class="help-text">
					<p>By signing up, you agree to our</p>
					<p><a href="#">Terms of service</a></p>
				</div><!--.help-text-->
			</div><!--.signup-tab-content-->

			<div id="login-tab-content">
				<form class="login-form" action="login.php" method="post">
					<input type="text" name="email" class="input" id="user_login" autocomplete="off" placeholder="Email or Username" required/>
					<input type="password" class="input" name="pass" id="user_pass" autocomplete="off" placeholder="Password" required/>
					<input type="checkbox" class="checkbox" id="remember_me">
					<label for="remember_me">Remember me</label>

					<input  type="submit" name="submit" class="button" value="Login" >
				</form><!--.login-form-->
				<div class="help-text">
					<p><a href="#">Forget your password?</a></p>
				</div><!--.help-text-->
			</div><!--.login-tab-content-->
		</div><!--.tabs-content-->
	</div><!--.form-wrap-->
	</body>
	
<footer>
	
</script>
	
	<script src="reg.js"></script>
	
  </footer>
  </html>
