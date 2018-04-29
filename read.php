<?php
 include 'navigation.php';
 include 'date.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<body>

<article>
  <h1>See your details</h1>
  <p>Insert your First and Last name to see your contacts details.</p>
</article>
 <form action="read.php"  method="POST">
  First name:<br>
  <input type="text" name="firstname" value=""><br>
  Last name:<br>
  <input type="text" name="lastname" value=""><br>
  <input type="submit" value="Submit">
  </form>
  </body>
</html>

<?php
include 'connect.php';   //adding included files
include 'Head.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$sql = "SELECT First_name, Last_name,Email,Phone FROM user WHERE First_name ='$firstname' AND Last_name ='$lastname' "; //Selecting datas from database where user given first and last name matches with same names with database
$result = $connect->query($sql);

echo "<table border='3'>"; // setting table border
echo "<tr> <th>First name</th><th>Last name</th><th>Email</th><th>Phone</th></tr>";  //making rows



	
	while($row = mysqli_fetch_array( $result )) {  //making rows to results
	echo "<tr><td>"; 
	echo $row['First_name'] ;  
	echo "</td><td>"; 
	echo $row['Last_name'];
	
	echo "</td><td>"; 
	echo $row['Email'];
	
	echo "</td><td>"; 
	echo $row['Phone'];
	
	echo "</td><td>"; 
	
	
	}
	
	
	if (empty($_POST['firstname'])) {  //if firstname form is empty show message
  echo '<p>First name is missing, give a valid name</p>';
} else {

}

if (empty($_POST['lastname'])) {
  echo '<p>Last name is missing, give a valid name</p>'; //if lastname form is empty show message
} else {
 
}

?>






















	
	


