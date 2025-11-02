<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  $username=$_POST['username'];
  $password=$_POST['password'];
  file_put_contents("user.txt","$username|$password");
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign Up | FlyStay</title>
<style>
body{font-family:Arial;background:#f0f4f7;}
form{background:#fff;padding:30px;max-width:400px;margin:80px auto;border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.1);}
input{display:block;width:90%;padding:10px;margin:10px auto;}
button{background:#0078d7;color:white;border:none;padding:10px 20px;border-radius:5px;cursor:pointer;}
a{text-decoration:none;color:#0078d7;}
</style>
</head>
<body>
<form method="post">
<h2>Create Account</h2>
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Sign Up</button>
<p>Already have an account? <a href="login.php">Login</a></p>
</form>
</body>
</html>
