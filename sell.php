<html>
<head>
  <link rel="stylesheet" href="sell.css">
  
</head>
<body>
<div class="hold">
  <div class="header">
    <div class="container">
      <ul class="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="reg.php"><img src="ab.png" width="27px" height="27px"</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</div>
<div>
  <form action="insert.php" method="POST" enctype="multipart/form-data">
    <div class="billing-details">
      <p>House Details</p>
	<label for="city">City</label>
    <select name="city" id="city">                        
      <option>Delhi</option>
      <option>Bangalore</option>
      <option>Varanasi</option>
		  <option>Patna</option>
    </select> 

  <label for="location">Location</label>
  <input type="location" name="location" id="location" required/>
		
  <label for="mobileno">Mobile No.</label>
  <input type="tel" name="mobileno" pattern="[0-9]{10}" id="mobileno"  required/>

	<label for="typehouse">Type</label>
    <select name="typehouse" id="typehouse">                        
      <option>1BHK</option>
      <option>2BHK</option>
      <option>3BHK</option>
		  <option>Single Room</option>
    </select>
      
	<label for="price">Set Price</label>
  <input type="number" name="price" id="price" required/>
	
	<label for="description">Description</label>
	
	<textarea name="description" id="description" rows="2" cols="40" maxlength="500"> </textarea>
      
	  <!--<form action="upload.php" method="post" enctype="multipart/form-data"> -->
      Select image to upload:
      <input type="file" name="photo" id="fileToUpload" value="upload image"/>
     <!-- <input type="submit" value="Upload Image" name="submit">
    </form> -->
		
    <input type="submit" name="submit" value="Post" class="button" />
    </div>
  </form>
</div>
</body>
</html>