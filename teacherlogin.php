<?php 
$id_number="";
$password="";
$err="";

require "connection.php";
if (isset($_POST['login']))
{
    $id_number=mysqli_real_escape_string($conn,$_POST['id_number']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);  
    $sql = "select * from teacher where id='".$id_number."' and password='".$password."'limit 1";
    $result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)){
    header("location: home-teacher.php");
}
else{
    $err = "Incorrect Id or password";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>log in as a teacher</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    background : #282b29;
}
.err {
    color : #fa0909;
}
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    border-radius:10px;
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="teacherlogin.php" method="post">
        <div class="err">
            <?php echo $err; ?>
        </div>
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input name="id_number" type="text" class="form-control" placeholder="teacher id" required>
        </div>
        <div class="form-group">
            <input name= "password" type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group"> 
            <button name="login" type="submit" class="btn btn-primary btn-block">LOG IN </button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>      
    </form>
    <p class="text-center"><a href="teachersignup.php">Create an Account</a></p>
</div>
</body>
</html>