
<?php
  $stmt=$admin->ret("SELECT count(*) FROM `players` ");
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  $r=implode($row);
?>
<?php
  $stmt=$admin->ret("SELECT count(*) FROM `tcategory` ");
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  $u=implode($row);
?>
<?php
  $stmt=$admin->ret("SELECT count(*) FROM `event` ");
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  $t=implode($row);
?>
<style> 
.title{
  border:none;
  border-radius: 2rem;
  padding:10%;
  width:120%;
  font-weight: bold;
  font-size: 20px;
  cursor:pointer;
  background: #bd202d;
  color: black;
}
.b{
  margin-left: 10px;
}
</style> 
 <header>
  <div class="container">
    <div class="header-top">
      <div class="row">
        <div class="col-md-6">
          <div class="full">
            <div class="logo">
              <img src="https://www.sdmcujire.in/wp-content/uploads/2020/06/sdm_logo_2-300x297.png" alt="" width="50" height="50"> 
              SportsArena
            </div>
          </div>
        </div>  
        <div class="header-bottom">
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="main-menu-section">
                  <div class="menu">
                    <nav class="navbar navbar-inverse">
                      <div class="navbar-header">
                        <a class="navbar-brand" href="#">Menu</a>
                      </div>
                      <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="index.php">Home</a></li>
                          <li><a href="about.php">About</a></li>
                          <li><a href="viewtrophy.php">Achievements</a></li>
                          <li><a href="profile.php">Player's Profile</a></li>
                          <li><a href="contact_us.php">Contact Us</a></li>
                          <li><a href="feedback.php">Feedback</a></li>
                          <li><a class="b">Players<i class="fa fa-user"><?php echo $r ?></i></a>
                          <a>Events<i class="fa fa-user"><?php echo $u ?></i></a>
                          <a>Tournaments<i class="fa fa-user"><?php echo $t ?></i></a></li> 
                        </ul>
                      </div>
                    </nav>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
         