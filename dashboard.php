<?php
session_start();
if(!isset($_SESSION['user'])){header("Location: login.php");exit();}
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['flight'])){
  file_put_contents($_SESSION['user']."_bookings.txt",$_POST['flight']."\n",FILE_APPEND);
}
$bookings=@file($_SESSION['user']."_bookings.txt");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard | FlyStay</title>
<style>
body{font-family:Arial;background:#f2f6fa;}
.container{max-width:800px;margin:50px auto;background:#fff;padding:30px;border-radius:10px;}
.flight{border-bottom:1px solid #ddd;padding:10px 0;}
a{color:#0078d7;text-decoration:none;}
</style>
</head>
<body>
<div class="container">
<h2><?= $_SESSION['user']; ?>’s Dashboard</h2>
<p><a href="home.php">← Back to Home</a> | <a href="logout.php">Logout</a></p>
<h3>Your Bookings</h3>
<?php
if($bookings){
  foreach($bookings as $b){
    echo "<div class='flight'>✈️ ".$b."</div>";
  }
}else{
  echo "<p>No bookings yet.</p>";
}
?>
</div>
</body>
</html>
