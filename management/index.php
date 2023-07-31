<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
  body {
  margin: 0;
  padding: 0;
  background-image: url("dist/img/91.jpg");
  background-size: cover;
}
span{
  position: absolute;
  right: 50px;
  transform: translate(0.-50%);
  top: 59%;
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
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
.b{
  margin-left: 300px;
}
</style>
<body>
  <div id="login">
    <h3 class="text-center text-white pt-5" style="color: white"></h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <form id="login-form" class="form" action="controller/login1.php" method="post">
              <center> <h3 class="" style="color: white">Login</h3></center>
              <div class="form-group">
                <label for="username" class="" style="color: white"><b>Username:</b></label><br>
                <input type="text" name="username" class="form-control" placeholder="Username" required="">
              </div>
              <div class="form-group">
                <label for="password" style="color: white" class=""><b>Password:</b></label><br>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" id="password">
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
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" style="background-color:#FFC221" value="Login" >
                <input type="button" name="submit" class="b btn btn-info btn-md" style="background-color:#FFC221" value="New User" onclick="document.location='login.php'">
              </div>       
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>