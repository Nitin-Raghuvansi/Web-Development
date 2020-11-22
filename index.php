<html>
<head>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="hold">
  <div class="header">
    <div class="container">
		<div id="logo">
			<button type="submit" class="button"><a href="sell.php">Sell</a></button>
		</div>
		  <ul class="nav">
			<li class="abcd">
				<form class="search-container">
				<input type="text" id="search-bar" placeholder="Search a city">
				<a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
				</form>
			</li>
			<li><a href="index.php">Home</a></li>
			<li><a href="reg.php">Login/Signup</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		  </ul>
	</div>
  </div>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="section">
  <div class="slider">
    <div class="container slidercontent">
	<div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="1.jpg" width="1500" height="400">
    <div class="text">Caption Text</div>
   </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="2.jpg" width="1500" height="400">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="3.png" width="1500" height="400">
  <div class="text">Caption Three</div>
</div>

    </div>
  </div>
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<div  align="center" id="wrap">
	<div id="columns" class="columns_4">
	
	
	<?php
	include 'connect.php';
	$selectquery="select city,mobile_no,location,house_type,price,description,image from rooms";
	$query=mysqli_query($con,$selectquery);
	$result=mysqli_fetch_array($query);
	
	while($result=mysqli_fetch_array($query))
	{
		?>
	
	
  <figure>
  <div class="abcde">  <?php echo $result['city'];?>   </div>
  <img src="<?php echo $result['image'];?>"> 
  
	<figcaption> <?php echo $result['house_type'];?> </figcaption>
    <span class="price"> <?php echo $result['price'];?>/month </span>
    <a class="button1" href="#">See More</a>
	</figure>
	
	
	<?php
	
	}
	
	?>
	
	
</div>
</div>

<div class="section">
  <div class="footer">
    <div class="container white">
      <div class="col four left">
        <h1>POPULAR LOCATIONS</h1>
        <p>Mumbai</p>
        <p>Hyderabad</p>
        <p>Varanasi</p>
		<p>Pune</p>
		<p>Kolkata</p>
      </div>
      <div class="col four left">
        <h1>TRENDING LOCATIONS</h1>
        <p>Nashik</p>
        <p>Patna</p>
        <p>Hubbali</p>
      </div>
      <div class="col four left">
        <h1>Let Us Help You</h1>
		<br>
		<br>
        <p>Your Account</p>
        <p>Help</p>
      </div>
      <div class="col four left">
        <h1>FOLLOW US</h1>
		<br>
		<br>
        <p>Facebook</p>
        <p>Instagram</p>
		<p>Twitter</p>
      </div>
      <div class="group"></div>
    </div>
  </div>
</div>

</body>
<footer>
  <script src="index.js"></script>
  </footer>
</html>
