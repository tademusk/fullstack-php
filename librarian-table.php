<?php
   require "connection.php";
  $sql = "create table librarian(
    id varchar(15) primary key,
    fullname varchar(50) not null,
    email varchar(50) not null,
    password varchar(50) not null
 )";
 if (mysqli_query($conn,$sql))
 {
    echo  "successful too";
 }
else{
    echo mysqli_error();
}
mysqli_close($conn);
?>
