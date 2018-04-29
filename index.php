<?php
include 'connect.php';
include 'create.php';
include 'Head.php';
include 'navigation.php';
include 'date.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<body>



<article>
  <h1>Make a appointment</h1>
  <p>insert valid infos to make a appointment.</p>
</article>
  <form action="insert.php" "index.php" method="POST">
  First name:<br>
  <input type="text" name="firstname" value="ABC"><br>
  Last name:<br>
  <input type="text" name="lastname" value="ABC"><br>
    Email:<br>
  <input type="text" name="email" value="AB@BC"><br>
  Phone:<br>
  <input type="text" name="phone" value="040123"><br>
      Date:<br>
  <input type="text" name="date" value="dd/mm/yyy"><br>
   Time:<br>
  <input type="text" name="time" value="hour.minute"><br>
  <input type="submit" value="Submit">
  </form>
  </body>
</html>


