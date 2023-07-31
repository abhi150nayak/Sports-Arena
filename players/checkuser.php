<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    body {
  margin: 0;
  padding: 0;
  background-image:url("images/bg3.jpeg"); 
  background-size: cover;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 220px;
  max-width: 500px;
  height: 230px;
  border: 1px solid #9C9C9C;
}
</style>
<body>
  <div id="login">
    <h3 class="text-center text-white pt-5"></h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <form id="login-form" class="form" action="controller/checkuserfile.php" method="post">
              <center><br><h3 class="" style="color:white">New User</h3></center>
              <div class="form-group">
                <label for="username" style="color:white" class=""><b>Username:</b></label><br>
                <input type="text" name="username" id="username" class="form-control" placeholder="UserName *" required="">
              </div>
              <div class="form-group" style="margin-left: 300px;">
                <input type="submit" name="submit" class="btn btn-info btn-md" style="background-color:green;color:white" value="Next">
                <input type="button" name="submit" class="btn btn-info btn-md" style="background-color:green;color:white" value="Back" onclick="document.location='index.php'"> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>