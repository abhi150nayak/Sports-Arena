<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_SESSION['username'])){
$plid=$_SESSION['id'];
$stmt=$admin->ret("SELECT * FROM `players` where pid='$plid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$result=$row['name'];
$result1=$row['pid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<style>
@import url(https://fonts.googleapis.com/css?family=Dancing+Script);
* {
    margin: 0;
}
body {
    background-color: #e8f5ff;
    font-family: Arial;
    overflow: hidden;
}
.navbar-top {
    background-color: #fff;
    color: #333;
    box-shadow: 0px 4px 8px 0px grey;
    height: 70px;
}
.title {
    font-family: 'Dancing Script', cursive;
    padding-top: 15px;
    position: absolute;
    left: 45%;
}
.navbar-top ul {
    float: right;
    list-style-type: none;
    margin: 0;
    overflow: hidden;
    padding: 18px 50px 0 40px;
}
.navbar-top ul li {
    float: left;
}
.navbar-top ul li a {
    color: #333;
    padding: 14px 16px;
    text-align: center;
    text-decoration: none;
}
.icon-count {
    background-color: #ff0000;
    color: #fff;
    float: right;
    font-size: 11px;
    left: -25px;
    padding: 2px;
    position: relative;
}
.sidenav {
    background-color: #fff;
    color: #333;
    border-bottom-right-radius: 25px;
    height: 86%;
    left: 0;
    overflow-x: hidden;
    padding-top: 20px;
    position: absolute;
    top: 70px;
    width: 250px;
}
.profile {
    margin-bottom: 20px;
    margin-top: -12px;
    text-align: center;
}
.profile img {
    border-radius: 50%;
    box-shadow: 0px 0px 5px 1px grey;
}
.name {
    font-size: 20px;
    font-weight: bold;
    padding-top: 20px;
}
.job {
    font-size: 16px;
    font-weight: bold;
    padding-top: 10px;
}
.url, hr {
    text-align: center;
}
.url hr {
    margin-left: 20%;
    width: 60%;
}
.url a {
    color: #818181;
    display: block;
    font-size: 20px;
    margin: 10px 0;
    padding: 6px 8px;
    text-decoration: none;
}

.url a:hover, .url .active {
    background-color: #e8f5ff;
    border-radius: 28px;
    color: #000;
    margin-left: 14%;
    width: 65%;
}
.main {
    margin-top: 2%;
    margin-left: 29%;
    font-size: 28px;
    padding: 0 10px;
    width: 58%;
}
.main h2 {
    color: #333;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
}

.main .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 1px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 0 20px 50px;
}
.main .card table {
    border: none;
    font-size: 16px;
    height: 270px;
    width: 80%;
}
.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}
.social-media {
    text-align: center;
    width: 0%;
}
.social-media span {
    margin: 0 10px;
}
.b{
    overflow: scroll;
}
</style>
<body class="b">
    <div class="navbar-top"></div>
    <div class="sidenav">
        <div class="profile">
            <div class="name">
                SDM
            </div>
            <div class="job">
                SportsArena
            </div>
        </div>
        <div class="sidenav-url">
            <div class="url">
                <a href="index2.php">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="a.php" class="active">View</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="gallery.php">Gallery</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="feedback.php">Feedback</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="logout.php">Logout</a>
                <hr align="center">
            </div>
        </div>
    </div>
<div class="main">
<?php include "profileview.php"?>
</div>
</body>
</html>
<?php } ?>