<?php
session_start();
?>

<?php
include 'connect.php';

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$email_search="select * from registration where email='$email'";
	$query=mysqli_query($con,$email_search);
	$email_count=mysqli_num_rows($query);
	if($email_count)
	{
		$email_pass=mysqli_fetch_assoc($query);
		$db_pass=$email_pass['pass'];
		$pass_decode=password_verify($pass,$db_pass);
		if($pass_decode)
		{
			
			?>
			<script>
				alert("login successful");
				</script>
			<script>
				location.replace("index.php");
				</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("incorrect password");
				</script>
			
			<script>
				location.replace("reg.php");
				</script>
			<?php
		}
		
	}
	else{
		
		?>
			<script>
				alert("ivalid email");
				</script>
			
			<script>
				location.replace("reg.php");
				</script>
			<?php
	}
}




?>