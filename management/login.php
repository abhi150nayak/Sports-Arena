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
            <form id="login-form" class="form" action="controller/login.php" method="post">
              <center> <h3 class="" style="color: black">NEW USER</h3></center><br>
              <div class="form-group">
                <label for="username" class="" style="color: black"><b>UserName:</b></label><br>
                <input type="text" name="username" class="form-control" placeholder="Username" required="">
              </div>
              <div class="form-group" style="margin-left: 90px"><br>
                <input type="submit" name="submit" class="btn btn-info btn-md" style="background-color:black" value="Next" >
                <input type="button" name="submit" class="btn btn-info btn-md" style="background-color:black" value="Back" onclick="document.location='index.php'">    
              </div>     
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
