<?php
include 'connect.php';
include 'date.php';

      $sql = "INSERT INTO user(First_name,Last_name,Email,Phone) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[phone]')";  //inserting form data to database and telling to script what forms goes to what table


if (mysqli_query($connect, $sql)) {   //if connect if good dont post anything
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);   //if connect wont succes show error
}


 $sql = "INSERT INTO reservation(Date,Time) VALUES('$_POST[date]','$_POST[time]')"; //insert data to database 


if (mysqli_query($connect, $sql)) {   //if connect if good dont post anything
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);    //if connect wont succes show error
}



?>

<!DOCTYPE html>

<html lang="en">
<head>
<title>This is title</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Appointment App</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="appointments.php">My Appointments</a></li>
	  <li><a href="delete.php">Delete appointment</a></li>
    <li><a href="update.php">Update appointment</a></li>
    
      
    </ul>
  </div>
</nav>
<article> Your appointment has saved </article>
  </body>
</html>

