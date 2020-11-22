<?php
include 'connect.php';

if(isset($_POST['submit']))
{
	$city = $_POST['city'];
	$location = $_POST['location'];
	$mobile_number = $_POST['mobileno'];
	$house_type = $_POST['typehouse'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$file = $_FILES['photo'];
	
	
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror=$file['error'];
	
	if($fileerror==0)
	{
		$destfile='upload/'.$filename;
		move_uploaded_file($filepath,$destfile);
		$insertquery = "insert into rooms(city,location,mobile_no,house_type,price,description,image) values('$city','$location','$mobile_number','$house_type','$price','$description','$destfile')";
        $query= mysqli_query($con,$insertquery);
		
		if($query)
		{
			
			?>
			<script>
				alert("successfully added");
				</script>
			
			<script>
				location.replace("index.php");
				</script>
			<?php
		}
		else
		{
			echo "not inserted";
		}
	}
}

?>