<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FlyStay | Compare Flights & Hotels</title>
<style>
body{font-family:Arial;margin:0;background:#f8fafc;}
header{background:#0078d7;color:#fff;padding:20px;text-align:center;}
nav a{color:white;margin:0 15px;text-decoration:none;font-weight:bold;}
.container{max-width:1000px;margin:30px auto;padding:20px;background:white;border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.1);}
.search-box input,select,button{padding:10px;margin:5px;width:23%;}
.search-box button{background:#0078d7;color:white;border:none;border-radius:5px;cursor:pointer;}
footer{text-align:center;padding:20px;color:#555;}
.result{margin-top:20px;}
.flight-card{border:1px solid #ddd;border-radius:8px;padding:15px;margin-bottom:10px;}
</style>
</head>
<body>
<header>
<h1>FlyStay – Your Travel Price Companion</h1>
<nav>
<a href="login.php">Login</a> | 
<a href="signup.php">Sign Up</a>
</nav>
</header>

<div class="container">
<h2>Search Flights & Hotels</h2>
<div class="search-box">
<input type="text" id="from" placeholder="From">
<input type="text" id="to" placeholder="To">
<input type="date" id="depart">
<input type="date" id="return">
<button onclick="searchFlights()">Search</button>
</div>

<div id="results" class="result"></div>
</div>

<footer>
<p>Inspired by Skyscanner | FlyStay © 2025</p>
</footer>

<script>
function searchFlights(){
  const results=[
    {airline:"SkyAir",price:"$180",duration:"4h 20m"},
    {airline:"CloudJet",price:"$210",duration:"3h 55m"},
    {airline:"BlueLine",price:"$150",duration:"5h 10m"},
  ];
  let html="";
  results.forEach(r=>{
    html+=`<div class='flight-card'><h3>${r.airline}</h3>
    <p>Price: ${r.price}  |  Duration: ${r.duration}</p>
    <a href='home.php'><button>Book Now</button></a></div>`;
  });
  document.getElementById("results").innerHTML=html;
}
</script>
</body>
</html>
