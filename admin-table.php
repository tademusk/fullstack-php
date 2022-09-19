<?php
 require "connection.php";

  $sql = "create table admin(
    id varchar(15) primary key,
    fullname varchar(50) not null,
    email varchar(50) not null,
    password varchar(50) not null
 )";
mysqli_close($conn);
?>
