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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
  body {
  margin: 0;
  padding: 0;
  background-image: url("dist/img/manage.jpg");
  background-size: cover;
}
span{
  position: absolute;
  right: 670px;
  transform: translate(0.-50%);
  top: 55%;
  cursor: pointer;
}
.fa{
  font-size: 20px;
  color: #7a797e;
}
.background-image{
  width:inherit;
  height:inherit;
  opacity:0.8;
}
#login .container #login-row #login-column #login-box {
  margin-top: 200px;
  max-width: 2000px;
  height: 200px;
  border: 1px solid #9C9C9C;
  background-color: #9C9C9C;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 50px;
  background-color: #9C9C9C;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: 85px;
   background-color: #9C9C9C;
}
</style>
<body>
  <div id="login">
    <h3 class="text-center text-white pt-5" style="color: white"></h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column">
          <div id="login-box" >
            <form id="login-form" class="form" action="controller/setpasswordfile.php" method="post">
              <center> <h3 class="" style="color: black">SET PASSWORD</h3></center><br>
              <div class="form-group">
                  <label for="password" class="" style="color: black"><b>Password:</b></label><br>
                  <input type="password" name="password" class="form-control"  placeholder="Password *" value="" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast one number and one uppercase and lowercase letter, and atleast 8 or more characters" id="password">
                  <span>
                    <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                  </span>
              </div>
              <script>
        var state=false;
        function toggle(){
          if(state){
            document.getElementById("password").setAttribute("type","password");
            document.getElementById("eye").style.color='#7a797e';
            state=false;
          }
          else{
            document.getElementById("password").setAttribute("type","text");
            document.getElementById("eye").style.color='#5887ef';

            state=true;
          }
        }
      </script>
              <div class="form-group" style="margin-left: 70px"><br>   
                <input type="submit" name="submit" class="btn btn-info btn-md" style="background-color:black" value="SET" >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php } ?>