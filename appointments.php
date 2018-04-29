<?php
include 'Head.php';
include 'navigation.php';
include 'date.php';
?>
<!DOCTYPE html>
<html lang="en">

<body>


<article>
  <h1>Manage your appointment</h1>
  <p>Insert your First and Last name to manage your contact details.</p>
</article>
 <form action="read.php" method="POST">
  First name:<br>
  <input type="text" name="firstname" value=""><br>
   Last name:<br>
  <input type="text" name="lastname" value=""><br>
  <input type="submit" value="Submit">
  </form>
  </body>
</html>


<?php
if (empty($_POST['firstname'])) {   //if firstname field is empty show message
  echo '<p>First name is missing, give a valid name</p>';
} else {

}

if (empty($_POST['lastname'])) {  //if lastname field is empty show message
  echo '<p>Last name is missing, give a valid name</p>';
} else {
 
}

?>
