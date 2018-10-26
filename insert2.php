<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Volunteer</title>
        <link rel="stylesheet" href="css/normalize1.css">
	
	
    </head>
    <body>

<a href="2.php"><h1 id="up" align="center">Disaster Management: Floods</h1></a><br><br>

      <form action="insert2.php" method="post">
      
        <h1>Volunteer Sign Up</h1>
        
        <fieldset>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">

	  <label for="pnumber">Number:</label>
          <input type="number" id="pnumber" name="user_pnumber">
          
          <label for="age">Age:</label>
          <input type="number" id="age" name="user_age" min=18 placeholder="Must be 18 or above">
        
        <label for="role">Volunteering Role:</label>
        <select id="role" name="user_role">
            <option value="Relief">Relief Collection</option>
            <option value="Transportationr">Transportation</option>
            <option value="Workforce"> Workforce</option>
	    <option value="Search and Rescue">Search and Rescue</option>
        </select>
	<label>Gender:</label>
                    <input type="radio" value="radio"/>
                    <label class="gender">Male</label>
                    <input type="radio" value="radio"/>
                    <label class="gender">Female</label>		
        </fieldset>
	
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>

<?php
$con=mysqli_connect("localhost","root","","persons") or die("not connected");
mysqli_select_db($con,"persons") or die("not found");

if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$age = $_POST['age'];
	$vrole = $_POST['vrole'];
	$gender = $_POST['gender'];
	
	$query="insert into hello(user,email,number,age,vrole,gender) values('$user','$email','$number','$age','$vrole','$gender')";

	if(mysqli_query($query))
	{
		echo"success";
	}
}
?>


