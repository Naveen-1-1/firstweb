<html> 
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Emergency</title>
        <link rel="stylesheet" href="css/normalize1.css">
    </head>
    <body>

<a href="2.php"><h1 id="up" align="center">Disaster Management: Floods</h1></a><br><br>

      <form action="insert1.php" method="post">
      
        <h1>Emergency Rescue</h1>
        
        <fieldset>
          
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="address">Address:</label>
          <input type="text" id="address" name="user_address">
          
	  <label for="pnumber">Number:</label>
          <input type="number" id="pnumber" name="user_pnumber">

        </fieldset>
        <button type="submit">Submit</button>
      </form>
      <h2 align="center" style="color:white">You will be contacted soon.....</h2>
    </body>
</html>
<?php
$con=mysqli_connect("localhost","root","","volunteer") or die("not connected");
mysqli_select_db($con,"volunteer") or die("not found");

if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	
	$query="insert into hello(user,address,number) values('$user','$address','$number')";

	if(mysqli_query($query))
	{
		echo"success";
	}
}
?>


