<?php
 include 'navigation.php';
 include 'date.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<body>


<article>
  <h1>Update your details</h1>
  <p>Give your previous information together with new one to update it.</p>
</article>

  </body>
</html>
<br><br>
 <form action="update.php" method="POST">
Old First name:<br>
  <input type="text" name="firstnameold" value=""><br>
  Old Last name:<br>
  <input type="text" name="lastnameold" value=""><br>
  Old  Email:<br>
  <input type="text" name="emailold" value=""><br>
 Old Phone:<br>
  <input type="text" name="phoneold" value=""><br>
 New First name:<br>
  <input type="text" name="firstname" value=""><br>
 New Last name:<br>
  <input type="text" name="lastname" value=""><br>
   New Email:<br>
  <input type="text" name="email" value=""><br>
 New Phone:<br>
  <input type="text" name="phone" value=""><br>
    <input type="submit" value="Submit">
  </form>
  
  
 <?php
 include 'Head.php';
 error_reporting(0);
 include 'connect.php';
 $firstname = $_POST['firstname'];
 $firstnameold = $_POST['firstnameold'];
 $lastname = $_POST['lastname'];
 $lastnameold = $_POST['lastnameold'];
  $email = $_POST['email'];
 $emailold = $_POST['emailold'];
  $phone = $_POST['phone'];
 $phone = $_POST['phoneold'];

$sql = "UPDATE user SET First_name='$firstname' WHERE First_name ='$firstnameold'"; // updating firstname if odl name match with database
if(mysqli_query($connect, $sql)){    
    echo "Records were updated successfully."; //message if update succesful
} else {
    echo "ERROR: Could not able to execute $sql. " //message if error
	. mysqli_error($connect);
}
 




$sql = "UPDATE user SET Last_name='$lastname' WHERE Last_name ='$lastnameold'";

if(mysqli_query($connect, $sql)){
    echo "Records were updated successfully."; //message if update succesful
} else {

    echo "ERROR: Could not able to execute $sql. "  //message if error
	. mysqli_error($connect);
}
 
$sql = "UPDATE user SET Email='$email' WHERE Email ='$emailold'";

if(mysqli_query($connect, $sql)){
    echo "Records were updated successfully."; //message if update succesful
} else {

    echo "ERROR: Could not able to execute $sql. "  //message if error
	. mysqli_error($connect);
}

$sql = "UPDATE user SET Phone='$phone' WHERE Phone ='$phoneold'";

if(mysqli_query($connect, $sql)){
    echo "Records were updated successfully."; //message if update succesful
} else {

    echo "ERROR: Could not able to execute $sql. "  //message if error
	. mysqli_error($connect);
}



mysqli_close($connect);



?>








