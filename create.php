<?php
$sql = "CREATE DATABASE IF NOT EXISTS appointment";
if ($connect->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error creating database: " . $connect->error;
}


$sql = "CREATE TABLE IF NOT EXISTS User( 
   id INT NOT NULL AUTO_INCREMENT,
   First_name VARCHAR(100) NOT NULL,
   Last_name VARCHAR(100) NOT NULL,
   Email VARCHAR(40) NOT NULL,
   Phone VARCHAR(40) NOT NULL,
   PRIMARY KEY (id )
)";

$sql = "CREATE TABLE IF NOT EXISTS Reservation( 
   id INT NOT NULL AUTO_INCREMENT,
   Date VARCHAR(100) NOT NULL,
   Time VARCHAR(100) NOT NULL,
	PRIMARY KEY (id )
)";

?>