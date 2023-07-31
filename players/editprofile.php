<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
$plid=$_SESSION['id'];
$stmt=$admin->ret("SELECT * FROM `players` where pid='$plid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<?php if(isset($_SESSION['username'])){?>
<!DOCTYPE html>
<html>
<head>
  <title>SportsArena | PlayerProfile</title>
</head> 
<style>
.profile-layout .profile-section .main-name,.profile-layout .profile-section .email-info{
    text-align:center;
    margin:0;
}
.profile-layout{
    min-height:200px;
    border:1px solid #dadada;
}
.profile-layout .profile-section .main-name{
    margin-top:10px;
    margin-bottom:10px;
    font-family: 'Cinzel', serif;
}
.profile-layout .profile-img-section{
    height:300px;
   position:relative;
   padding:20px 10px 20px 10px !important;
   background:#fbfbfb;
    background: #dae2f8; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #dae2f8, #d6a4a4); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #dae2f8, #d6a4a4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  
  background: #4ca1af; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #4ca1af, #c4e0e5); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #4ca1af, #c4e0e5);
  
  background: #1d2b64; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #1d2b64, #f8cdda); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #1d2b64, #f8cdda);
}
.profile-layout .profile-img-section .profile-img{
   position:absolute;
   left:50%;
   top:50%;
   transform:translate(-50%,-50%);
   width:200px;
   height:200px;
}
.profile-layout .profile-img{
    
    top:0;
   
    border-radius:50%;
    overflow:hidden;
    margin:0 auto;
}
.title{
  border:none;
  border-radius: 1.5rem;
  padding:1%;
  width:20%;
  font-weight: bold;
  font-size: 20px;
  cursor:pointer;
  background: white;
  color: black;
}
.profile-layout .profile-section .text-information .email-info{
    color:#909090;
    margin-bottom:15px;
    font-family: 'Nunito Sans', sans-serif;
    font-size:16px;
}
.profile-section .tab-section .nav-tabs{
    border-bottom:1px solid #428BCA;
    border-top:1px solid #428bca;
} 
.profile-section .tab-section .tab-content,.profile-layout .profile-img-section,.profile-layout .profile-section .text-information {
    padding:20px 10px;
}
.profile-section .tab-section .nav-tabs>li{
    margin-bottom:0px;
}
.profile-section .tab-section .nav-tabs>li>a{
    padding: 15px 20px;
}

.profile-section .tab-section .nav-tabs>li.active>a{
    border:1px solid #428bca;
    background:#428bca;
    color:#fff;
    border-radius:0px;
}

.profile-section .tab-section .tab-pane .form-control{
    height:45px;
    border-radius:0;
}
.profile-section  .tab-pane>.form-group:last-of-types{
    margin-bottom:0px;
}
.profile-section .btn-submit{
        height: 40px;
    line-height: 28px;
    border-radius: 2px;
    
}
.profile-section span.input-group-addon{
    min-width:50px;
}
.profile-section span.input-group-addon .fa-lg{
    font-size:20px;
}
.no-edit-forms input.form-control{
    background:#eee;
    box-shadow:none;
    pointer-events:none;
}
.profile-section .friend-list .media>a,.profile-section .friend-list .media>a:hover{
    text-decoration:none;
}

.profile-section .friend-list .media-left .media-object{
    height:auto;
}
.profile-section .friend-list .media-heading{
    color:#464646;
    line-height: 20px;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">     
 <link href=" https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css" rel="stylesheet">        
<div class="col-md-6 col-md-offset-3">
  <div class="panel">
    <div class="panel-body">
      <div class="profile-layout"> 
        <div class="profile-section"> 
          <div class="text-information">
            <a href="changepassword.php" style="margin-left: 550px;">ChangePassword</a>
            <h2 class="main-name">EDIT PROFILE</h2>
          </div>
          <form method="post" enctype="multipart/form-data" action="controller/editprofilefile.php">
            <div class="tab-section">  
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <div class="info-section no-edit-forms">
                    <div class="form-group text-right">
                      <a class="label label-info " id="edit-info">Edit</a>
                      <a class="label label-info hide" id="cancel-info">Cancel</a>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                        <input type="text" class="form-control" name="name" placeholder="" value="<?=$row['name'] ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
                        <input  type="text" class="form-control"  placeholder="" name="rollno" value="<?=$row['rollno'];?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-graduation-cap fa-lg"></i></span>
                        <input  type="text" class="form-control"  placeholder="" name="course" value="<?=$row['course'];?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
                        <input id="" type="text" class="form-control" name="batch" placeholder=" " value="<?=$row['batch'] ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-file fa-lg"></i></span>
                        <input id="" type="text" class="form-control" name="event" placeholder=" " value="<?=$row['event'] ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-tint fa-lg"></i></span>
                        <input id="" type="text" class="form-control" name="bg" placeholder=" " value="<?=$row['blood'] ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone fa-lg"></i></span>
                        <input id="" type="text" class="form-control" name="phone" placeholder=" " value="<?=$row['phone'] ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope-open fa-lg"></i></span>
                        <input  type="email" class="form-control"  placeholder="" name="email" value="<?=$row['email'];?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-location-arrow fa-lg"></i></span>
                        <input id="" type="text" class="form-control" name="ads" placeholder=" " value="<?=$row['address'] ?>">
                      </div>
                    </div>   
                    <div class="text-right">
                      <input type="submit" name="submit" class="btn btn-primary" value="UPDATE">
                      <input type="button" name="submit" class="btn btn-primary" value="BACK" onclick="document.location='index2.php'">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>          
        </div>    
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>
<script>
$(document).ready(function(){
   $("#edit-info").on("click",function(){
       
       $(".info-section").removeClass("no-edit-forms");
      $(this).hide();
      $("#cancel-info").removeClass("hide");
   });
   $("#cancel-info").on("click",function(){
       window.location.reload();
       
   });
    $(".upload-image").dropzone();
});
</script>
</html>
<?php } ?>