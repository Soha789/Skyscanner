<?php
session_start();
if(!isset($_SESSION['user'])){header("Location: login.php");exit();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home | FlyStay</title>
<style>
body{font-family:Arial;background:#eef3f7;margin:0;}
header{background:#0078d7;color:#fff;padding:20px;text-align:center;}
.container{max-width:900px;margin:30px auto;background:#fff;padding:20px;border-radius:10px;}
.flight{border:1px solid #ddd;border-radius:8px;padding:15px;margin:10px 0;}
button{background:#0078d7;color:white;border:none;padding:8px 15px;border-radius:5px;cursor:pointer;}
a{color:#0078d7;text-decoration:none;}
</style>
</head>
<body>
<header>
<h2>Welcome <?= $_SESSION['user']; ?> to FlyStay</h2>
<a href="dashboard.php" style="color:white;">Dashboard</a> | <a href="logout.php" style="color:white;">Logout</a>
</header>

<div class="container">
<h3>Available Flights & Hotels</h3>
<?php
$flights=[
 ["SkyAir","Riyadh → Dubai","$180","4h 20m"],
 ["BlueLine","Riyadh → Jeddah","$95","2h 05m"],
 ["AirNova","Riyadh → Cairo","$160","3h 00m"]
];
foreach($flights as $f){
  echo "<div class='flight'><h4>$f[0]</h4><p>$f[1]</p><p>Price: $f[2] | Duration: $f[3]</p>
  <form action='dashboard.php' method='post'>
  <input type='hidden' name='flight' value='$f[0] - $f[1] - $f[2]'>
  <button type='submit'>Book Now</button>
  </form></div>";
}
?>
</div>
</body>
</html>
