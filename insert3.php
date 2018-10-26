<html>
  
<head>
    
<meta charset="UTF-8">
    
<title>Donation</title>
    
    
    
    
        
<link rel="stylesheet" href="css/style.css">

    
    
    
    
  
</head>

  
<body>


<a href="2.php"><h1 id="up" align="center">Disaster Management: Floods</h1></a><br><br>
<div id='new' style="color:#ffdbed">
<h1 align="center"><u>Donation</u></h1><br><br>
<h2 align="center"><i>Be the Change, It all starts from you!!</i></h2><br><br> 
<h2 align="center"> RELIEF GOODS </h2><br> 
</div>
<div class='container'>
  
<div class='signup'>
     
<form method="post" action="insert3.php" name="myform">
       
<input type='text' name="name" placeholder='Name' required="" />
       
<input type='text' name="goods" placeholder='Goods' required="" />
       
<input type='text' name="email" placeholder='Email' required="" />
       
<input type='text' name="phone" placeholder='Phone' required=""  />
<input type='text' name="address" placeholder='Address' required=""  />
        
<input type='submit' placeholder='SUBMIT' />
     
</form>
  
</div>
  
<video id='my_video_1' class='video-js vjs-default-skin' controls
 preload='auto' width='640' height='367' poster='my_video_poster.png'
 data-setup='{}'>
  <source src='https://www.youtube.com/watch?v=cZGghmwUcbQ' type='video/mp4'>
 
</video>
</div>
 
<br><br>
<div id='new' style="color:#ffdbed">
<h2 align="center">DONATION</h2><br>
<div style="color:#281f22" class='new'>
<div class='new1'> 
<div class='number'>
<h3>Account Details</h3><br>

<p> A/c Number : 12345678901 </p>
<p> A/ Name: Sample Name </p>
<p> Branch: City Branch, City </p>
<p> IFSC : ABCD1234567  SWIFT CODE : ABCDE1234567 </p>
<p> Account Type: Savings  PAN: WXYZ12345 </p>
</div>  
    
    
    
  
</body>
</html>



<?php
$con=mysqli_connect("localhost","root","","persons") or die("not connected");
mysqli_select_db($con,"persons") or die("not found");

if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$goods = $_POST['goods'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	
	$query="insert into hey(user,goods,email,number,address) values('$user','$goods','$email','$number','$address')";

	if(mysqli_query($query))
	{
		echo"success";
	}
}
?>



