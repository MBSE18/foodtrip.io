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
  width:65%;

  padding-left:250px;
margin-top:10px;

}
.img12{
  height:150px;
  width:70%;
  padding-left:245px;
margin-top:10px;
}
.img13{
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
<b style="padding-left:285px;" ></h1>Binalonan Food Terminal<br></b>
<a style="font-size:15px; padding-left:227px;" >2HWR+RQC, Arellano St, Binalonan, Pangasinan<br><a>
<a href="https://goo.gl/maps/3PwY8FRv7DChbJhTA"> <img  class="img12" src="binalonan.png" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:0px; width:800px; margin-bottom: 20px; font-size:20px;  background-color: #F5F5F5;"><fieldset class="fs">
<b style="padding-left:292px;" ></h1>Yuri&#39;s Foodstreet<br></b>
<a style="font-size:15px; padding-left:250px;" >Pandan Ave, Mapandan, Pangasinan<br><a>
<a href="https://goo.gl/maps/UP2ArkUdUBQUY5uGA"> <img  class="img10" src="mapandan.png" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:0px; width:800px; margin-bottom: 20px; font-size:20px;  background-color: #F5F5F5;"><fieldset class="fs">
<b style="padding-left:282px;" ></h1>Caviganan Street Food<br></b>
<a style="font-size:15px; padding-left:235px;" >24 Aruego Street, Urdaneta, 2428 Pangasinan<br><a>
<a href="https://goo.gl/maps/RuwRnVk9LKjXw68o7"> <img  class="img13" src="327017472_700335201767085_4516135335213180965_n.jpg" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:0px; width:800px; margin-bottom: 20px; font-size:20px;  background-color: #F5F5F5;"><fieldset class="fs">
<b style="padding-left:298px;" ></h1>Pilar&#39;s Street Foods<br></b>
<a style="font-size:15px; padding-left:205px;" >RGWC+7X5, P. Sison St, Alcala, 2425 Pangasinan<br><a>
<a href="https://goo.gl/maps/cUQNdzhdriQCJBus6"> <img  class="img13" src="pilars.png" alt="Avatar"></a>
</div>


<div style= "margin-left:180px; margin-top:0px; width:800px; margin-bottom: 20px; font-size:20px;  background-color: #F5F5F5;"><fieldset class="fs">
<b style="padding-left:298px;" ></h1>Minang Food Hub<br></b>
<a style="font-size:15px; padding-left:205px;" >RF7H+JRF, Nandacan, Bayan ng Bautista, Pangasinan<br><a>
<a href="https://goo.gl/maps/dMnHnnSZTZf3vA8j6"> <img  class="img13" src="327103756_3526893597544071_721154451234687992_n.jpg" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:0px; width:800px; margin-bottom: 20px; font-size:20px;  background-color: #F5F5F5;"><fieldset class="fs">
<b style="padding-left:298px;" ></h1>Foodstreet Bonuan<br></b>
<a style="font-size:15px; padding-left:105px;" >Gate 2, Catacdang, Maramba Bankers Village, Bonuan, Dagupan, 2400 Pangasinan<br><a>
<a href="https://goo.gl/maps/5CDoQXRBtdjozBC37"> <img  class="img13" src="326742593_676763907464178_4731741141956367430_n.png" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:0px; width:800px; margin-bottom: 20px; font-size:20px;  background-color: #F5F5F5;"><fieldset class="fs">
<b style="padding-left:298px;" ></h1>Purple&#39;s Food House<br></b>
<a style="font-size:15px; padding-left:245px;" >October 16 St, Binalonan, 2436 Pangasinan<br><a>
<a href="https://goo.gl/maps/Q93KkGv1AEV1uBao8"> <img  class="img13" src="326860778_701617891437070_1493796127069103906_n.jpg" alt="Avatar"></a>
</div>

</head>
  


