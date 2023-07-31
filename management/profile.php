<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_SESSION['username'])){
$mnid=$_SESSION['id'];
$stmt=$admin->ret("SELECT * FROM `staff` where mid='$mnid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="row login_box">
        <a href="changepassword.php" class="b"><b>ChangePassword</b></a>
        <div class="col-md-12 col-xs-12 follow line" align="center">
            <h1><b><?php echo $row['name'];?></b></h1>
        </div>
        <div class="col-md-6 col-xs-6" align="center">
            <h3><?php echo $row['designation'];?></h3>
        </div>
        <div class="col-md-6 col-xs-6" align="center">
            <h3>Department Of Sports</h3>
        </div>
        <div class="col-md-12 col-xs-12 login_control"> 
            <div class="control">
                <div class="label">Email Address: <?php echo $row['email'];?></div>
                
            </div><br>
            <div class="control">
                <div class="label">Phone Number: <?php echo $row['phone'];?></div>
            </div><br>
            <div align="left">
                <button class="btn btn-orange" onclick="document.location='editprofile.php'">EDIT</button>
                <button class="btn btn-orange" onclick="document.location='index1.php'">BACK</button>
            </div>      
        </div>      
    </div>
</div>
<style>
body{
 background-color: #2B2B2B;   
}

*{
    font-family: 'Raleway', sans-serif;
    color : #FFF;  
}
div h3 span{
     color : #FFF;
     font-size:14px;
}

div span {
     font-weight: 200;
}

h1{
     font-weight: 200;
}

.login_box{
    background: #f32d27; 
    background: -moz-linear-gradient(45deg,  #f32d27 5%, #ff6b45 99%); 
    background: -webkit-gradient(linear, left bottom, right top, color-stop(5%,#f32d27), color-stop(99%,#ff6b45)); 
    background: -webkit-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); 
    background: -o-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); 
    background: -ms-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); 
    background: linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); 
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f32d27', endColorstr='#ff6b45',GradientType=1 ); 
    
    width:35%;
    position:absolute;
    top:15%;
    left:32.5%;
    
    -webkit-box-shadow: 0px 0px 8px 0px rgba(50, 50, 50, 0.54);
-moz-box-shadow:    0px 0px 8px 0px rgba(50, 50, 50, 0.54);
box-shadow:         0px 0px 8px 0px rgba(50, 50, 50, 0.54);
}

.image-circle{
    border-radius: 50%;
    width: 175px;
    height: 175px;
    border: 4px solid #FFF;
    margin: 10px;
}
.follow{
    background-color:#FC563B;
    height: 80px;
    cursor:pointer;
}
.follow:hover {
    background-color:#F22F26;
    height: 80px;
    cursor:pointer;
}
.login_control{
    background-color:#FFF;
    padding:10px;   
}
.control {
    color:#000;
    margin:10px;
}
.label {
    color: #EB4F26;
    font-size: 18px;
    font-weight: 500;
}
.form-control{
    color: #000000 !important;
    font-size: 25px;
    border: none;
    padding: 25px;
    padding-left: 10px;
    border-bottom: 1px solid #CCC;
    margin-bottom: 10px;
    outline: none;
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
}
.form-control:focus{
    border-radius: 0px;
    border-bottom: 1px solid #FC563B;
    margin-bottom: 10px;
    outline: none;
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
}
.btn-orange{
    background-color: #FC563B;
    border-radius: 0px;
    margin: 5px;
    padding: 5px;
    width: 150px;
    font-size: 20px;
    font-weight: inherit;
}
.btn-orange:hover {
    background-color: #F22F26;
    border-radius: 0px;
    margin: 5px;
    padding: 5px;
    width: 150px;
    font-size: 20px;
    font-weight: inherit;
    color:#FFF !important;
}
.line{
    border-bottom : 2px solid #F32D27;
}
.outter{
    padding: 0px;
    border: 1px solid rgba(255, 255, 255, 0.29);
    border-radius: 50%;
    width: 200px;
    height: 200px;
}
.b{
    margin-left: 400px;
}
</style>
<?php } ?>