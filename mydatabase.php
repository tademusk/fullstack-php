<?php
require "connection.php";
$sql = "create database db";

if (mysqli_query($conn , $sql)){
    echo "the my database database created successfully ";
}else{
    echo "error on creating database ".mysqli_error($conn);
}
mysqli_close($conn);
?>