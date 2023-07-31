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
  <title>SportsArena | ChangePassword</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  .mainDiv {
    display: flex;
    min-height: 100%;
    align-items: center;
    justify-content: center;
    background-color: #f9f9f9;
    font-family: 'Open Sans', sans-serif;
  }
 .cardStyle {
    width: 500px;
    border-color: white;
    background: #fff;
    padding: 36px 0;
    border-radius: 4px;
    margin: 30px 0;
    box-shadow: 0px 0 2px 0 rgba(0,0,0,0.25);
  }
#signupLogo {
  max-height: 100px;
  margin: auto;
  display: flex;
  flex-direction: column;
}
.formTitle{
  font-weight: 600;
  margin-top: 20px;
  color: #2F2D3B;
  text-align: center;
}
.inputLabel {
  font-size: 12px;
  color: #555;
  margin-bottom: 6px;
  margin-top: 24px;
}
  .inputDiv {
    width: 70%;
    display: flex;
    flex-direction: column;
    margin: auto;
  }
input {
  height: 40px;
  font-size: 16px;
  border-radius: 4px;
  border: none;
  border: solid 1px #ccc;
  padding: 0 11px;
}
input:disabled {
  cursor: not-allowed;
  border: solid 1px #eee;
}
span{
  position: absolute;
  right: 600px;
  transform: translate(0.-50%);
  top: 49%;
  cursor: pointer;
}
.fa{
  font-size: 20px;
  color: #7a797e;
}
.buttonWrapper {
  margin-top: 40px;
  font-color: white ;
}
  .submitButton {
    width: 70%;
    height: 40px;
    margin: auto;
    display: block;
    color: white;
    background-color: #065492;
    border-color: #065492;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
    font-color: white;

  }
.submitButton:disabled,
button[disabled] {
  border: 1px solid #cccccc;
  background-color: #cccccc;
  color: #666666;
  font:color: white;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
<div class="mainDiv">
  <div class="cardStyle">
    <form action="controller/changepasswordfile.php" method="post">
      <h2 class="formTitle">
        Change Password
      </h2>
      <div class="inputDiv">
        <label class="inputLabel" for="password">User Name</label>
        <input type="text" id="user" name="user" placeholder="Enter Username" required>
      </div> 
      <div class="inputDiv">
        <label class="inputLabel" for="password">Password</label>
        <input type="password" id="oldpass" name="oldpass" required placeholder="Enter Existing Password">
        <span style="margin-right: -0px;margin-top: -86px;">
          <i class="fa fa-eye" aria-hidden="true" id="eye1" onclick="toggle1()"></i>
        </span>
      </div> 
      <script>
        var state=false;
        function toggle1(){
          if(state){
            document.getElementById("oldpass").setAttribute("type","password");
            document.getElementById("eye1").style.color='#7a797e';
            state=false;
          }
          else{
            document.getElementById("oldpass").setAttribute("type","text");
            document.getElementById("eye1").style.color='#5887ef';

            state=true;
          }
        }
      </script>
      <div class="inputDiv">
        <label class="inputLabel" for="confirmPassword">New Password</label>
        <input type="password" id="newpass" name="newpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain atleast one number and one uppercase and lowercase letter, and atleast 8 or more characters" required="" placeholder="Enter New Passowrd">
        <span>
          <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
        </span>
      </div>
      <script>
        var state=false;
        function toggle(){
          if(state){
            document.getElementById("newpass").setAttribute("type","password");
            document.getElementById("eye").style.color='#7a797e';
            state=false;
          }
          else{
            document.getElementById("newpass").setAttribute("type","text");
            document.getElementById("eye").style.color='#5887ef';

            state=true;
          }
        }
      </script>
      <!-- <div class="buttonWrapper">
        <button id="submit" name="submit" class="submitButton pure-button pure-button-primary" value="CONTINUE"></button> -->
        <!-- <span>Continue</span> -->
        <br><input type="submit" name="submit" value="CONTINUE" class="submitButton">
      </div> 
    </form>
  </div>
</div>
</html>
<?php } ?>