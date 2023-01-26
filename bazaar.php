<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FoodTrip</title>

<body>

<div class=h1></div>
<div class=h5>
<h5>Hi! <?php echo  $user_data['user_name']; ?>
&nbsp;<i class="fa fa-fw fa-user"></i><br>
<a href="logout.php">Log Out</a>


<img class="img2" align="right"src="316466328_3006875912952137_2970807876259980434_n.png"  alt="Trulli">
<img class="img3" align="right"src="316466328_3006875912952137_2970807876259980434_n.png"  alt="ft">
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {box-sizing: border-box;}
h1{
 font-size:30px;
 margin-left:200px;
 padding-top: ;
}

h5{
 font-size:20px;
padding-left:1150px;
margin-top: 40px;
position: inherit;
color: white;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #8FB3F8;
}


.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  background-color:#ccc;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.h5 a{
  color: rgb(194, 0, 0);
  font-size: 18px;
}

.h5 a:hover {
    text-decoration: none;
}

.h5 a:active {
    text-decoration: none;
}

.h5 a:visited {
    text-decoration: none;
}

.h5 a:link {
    text-decoration: none;
}
</style>
</head>
<body>
<div class="topnav">
 
  <div class="search-container">
    <form action="/action_page.php">
    </form>
  </div>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 170px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #074B8A;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  text-decoration: none;
  font-size: 22px;
  color: #FFF444;
  display: block;
}

.sidebar a .fa {
  margin-top: 70px;
}

.sidebar a:hover {
  color: #8FB3F8;
}

.sidebar a:active {
    color: white;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.img1 {
  margin-top: 20px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 60%;
  height:120px;
  max-width: 120px;
}

.img2 {
  height:100px;
  max-width: 300px;
  margin-right:20px;
  margin-top: 32px;
}

.img3 {
  height:100px;
  max-width: 280px;
  margin-right:20px;
  margin-top: 32px;
}

.img4
{
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.img10{
  height:130px;
  padding-left:245px;
margin-top:10px;
}
.img11{
  height:130px;
  padding-left:235px;
margin-top:10px;
}
.img12{
  height:150px;
  width:70%;
  padding-left:245px;
margin-top:10px;
}
.fs
{
  border: none;
}

  .h1{
font-size:40px;
padding-left:450px;


}
</style>
</head>
<body>

<div class="h1">

</div>
<div class="sidebar">
  <a href="homepage.php"><img class="img1" src="316466328_3006875912952137_2970807876259980434_n.png" alt="Avatar"></a>
  <a href="profile.php"><i class="fa fa-fw fa-pf"></i>Profile</a>
  <a href="bazaar.php"><i class="fa fa-fw fa-ome"></i>Bazaar</a>
  <a href="streetfoods.php"><i class="fa fa-fw fa-"></i>Street Food</a>
  <a href="map.php"><i class="fa fa-fw fa-ser"></i>Map</a>
</div>

<div style= "margin-left:180px; margin-top:0px; width:800px; margin-bottom: 20px; font-size:20px;  background-color: #F5F5F5;"><fieldset class="fs">
<b style="padding-left:292px;" ></h1>All Seasons Bazaar<br></b>
<a style="font-size:15px; padding-left:213px;" >XHG7+8RG, MacArthur Hwy, Urdaneta, Pangasinan<br><a>
<a href="https://goo.gl/maps/AU9QF7v933sNd3F19"> <img  class="img10" src="all season.png" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:0px; width:800px; margin-bottom: 20px; font-size:20px;  background-color: #F5F5F5;"><fieldset class="fs">
<b style="padding-left:260px;" ></h1>Urdaneta City, Food Bazaar<br></b>
<a style="font-size:15px; padding-left:230px;" >XHF9+2WH, Consejo St, Urdaneta, Pangasinan<br><a>
<a href="https://goo.gl/maps/AU9QF7v933sNd3F19"> <img  class="img10" src="urdaneta.png" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:0px; width:800px; margin-bottom: 20px; font-size:20px;  background-color: #F5F5F5;"><fieldset class="fs">
<b style="padding-left:285px;" ></h1>Abellera Food Bazaar<br></b>
<a style="font-size:15px; padding-left:227px;" >3GWP+QH2, N/A, Pozorrubio, 2435 Pangasinan<br><a>
<a href="https://goo.gl/maps/Lj6jPv8QzMMfYq27A"> <img  class="img11" src="Screenshot 2023-01-25 142059.png" alt="Avatar"></a>
</div>



</head>
  


