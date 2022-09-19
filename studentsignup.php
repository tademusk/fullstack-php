<?php
  $full_name = "";
  $IdNumber="" ;
  $email="";
  $password="";
  $err=array();
  $confirm_password="";
  $congra="";

  require "connection.php";
    if (isset($_POST['s_submit']))
  {
    $full_name =mysqli_real_escape_string($conn,$_POST['full_name']);
    $IdNumber=mysqli_real_escape_string($conn,$_POST['id_number']) ;
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $confirm_password=mysqli_real_escape_string($conn,$_POST['confirm_password']);
    $congra="";
  }
  if ($password != $confirm_password)
  {
    array_push($err,"password dose not much");
  }

  $user_check_query = "select * from student where id='$IdNumber' or email='$email' limit 1";
  $result = mysqli_query($conn,$user_check_query);
  $user = mysqli_fetch_assoc($result);
  if (isset($user['email']))
  {
  if ($user['email']===$email){
    array_push($err,"this email is already exist");
   }
  }

  if(isset($user['id']))
  {
	if ($user['id']===$IdNumber){
		array_push($err,"the id is already exist");
	}
  }

  if (count($err)===0 && $email!=="")
  {
    $query="insert into student(id,fullname,email,password) value('$IdNumber','$full_name','$email','$password')";
    mysqli_query($conn,$query);
    $congra = "you are successfully registered! please   ". "<a href='studentlogin.php'>LOG IN<a>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Register as a student</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	body {
		color: #fff;
		background: #282b29;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
<div class="signup-form">
    <form action="studentsignup.php" method="post">
	<div class="text-light bg-danger">
        <?php require "error.php"; ?>
    </div>
	<div class="text-light bg-success mb-5 p-5 ">
    	<?php echo $congra; ?>
	</div>
		<h2>Register</h2>
		<p class="hint-text">Create your account As A <span class="text-primary"> STUDENT </span> here.</p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="full_name" placeholder="Full name" required></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="id_number" placeholder="student Id" required></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button name="s_submit" type="submit" class="btn btn-primary btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="studentlogin.php">Sign in</a></div>
</div>
</body>
</html>