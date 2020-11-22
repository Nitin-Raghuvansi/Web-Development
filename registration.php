<?php
include 'connect.php';

if(isset($_POST['submit']))
{
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$name=mysqli_real_escape_string($con, $_POST['name']);
	$mobile=mysqli_real_escape_string($con, $_POST['mobile']);
	$pass=mysqli_real_escape_string($con, $_POST['pass']);
	$rpass=mysqli_real_escape_string($con, $_POST['repass']);
	
	$pass_encrypt = password_hash($pass,PASSWORD_BCRYPT);
	$rpass_encrypt = password_hash($rpass,PASSWORD_BCRYPT);
	
	$emailquery="select * from registration where email='$email' ";
	$query=mysqli_query($con,$emailquery);
	$emailcount=mysqli_num_rows($query);
	if($emailcount>0)
	{
		echo "email exits";
	}
	else
	{
		if($pass === $rpass)
		{
			
			$insertquery="insert into registration(email,name,mobile,pass,repass) values('$email','$name','$mobile','$pass_encrypt','$rpass_encrypt')";
	        $query= mysqli_query($con,$insertquery);
			if($query)
			{
				?>
				<script>
				alert("registered successfully");
				</script>
				<script>
				location.replace("index.php");
				</script>
				<?php
			}
			else{
				?>
				<script>
				alert("registered usuccessful");
				</script>
				<script>
				location.replace("reg.php");
				</script>
				<?php
			}
		}
		else{
			echo "password are not matching";
		}
	}
	
	
	
}



?>