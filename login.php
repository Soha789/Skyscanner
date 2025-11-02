<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
  $user=explode("|",file_get_contents("user.txt"));
  if($_POST['username']==$user[0] && $_POST['password']==trim($user[1])){
    $_SESSION['user']=$user[0];
    header("Location: home.php");
  }else{
    $error="Invalid login.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login | FlyStay</title>
<style>
body{font-family:Arial;background:#f0f4f7;}
form{background:#fff;padding:30px;max-width:400px;margin:80px auto;border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.1);}
input{display:block;width:90%;padding:10px;margin:10px auto;}
button{background:#0078d7;color:white;border:none;padding:10px 20px;border-radius:5px;cursor:pointer;}
.error{color:red;text-align:center;}
</style>
</head>
<body>
<form method="post">
<h2>Login</h2>
<?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
<p>No account? <a href="signup.php">Sign up</a></p>
</form>
</body>
</html>
