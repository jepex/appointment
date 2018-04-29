<?php
 include 'navigation.php';
 include 'date.php';
 error_reporting(0);
?>



<!DOCTYPE html>
<html lang="en">

<body>


<article>
  <h1>Delete your appointment</h1>
  <p>Insert your First and Last name to Delete your appointment.</p>
</article>
 <form action="delete.php" method="POST">
  First name:<br>
  <input type="text" name="firstname" value=""><br>
  Last name:<br>
  <input type="text" name="lastname" value=""><br>
  <input type="submit" value="Submit">
  </form>
  </body>
</html>

 <?php
 include 'connect.php';
 include 'Head.php';
  error_reporting(0);
 $firstname = $_POST['firstname'];


$sql = "DELETE First_name FROM user WHERE First_name ='$firstname'"; // deleting firstname if name given by user matches with database
if (mysqli_query($connect, $sql)) {
    echo "Record deleted successfully"; //message if deleted succesfully
} else {
    echo "Error deleting record: " . mysqli_error($connect); //message if error
}

mysqli_close($connect);



if (empty($_POST['firstname'])) {  // if firstname is empty show message
  echo '<p>First name is missing, give a valid name</p>';
} else {

}

if (empty($_POST['lastname'])) { //if lastname is empty show message
  echo '<p>Last name is missing, give a valid name</p>';
} else {
 
}




?>




































	
	


