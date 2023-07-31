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
<style>
  .awesome-portfolio-area {
  background: #f7f5f6 none repeat scroll 0 0;
  overflow: hidden;
  padding-top: 50px;
}
.section-heading{text-align:center}
.section-heading h2 {
  color: #666;
  font-size: 45px;
  line-height: 45px;
  margin-bottom: 20px;
}
.section-heading p{}
.awesome-portfolio{}
.single-awesome-portfolio {
  width: 20%;
  float: left;
  overflow:hidden
}
.single-awesome-portfolio a {
  position: relative;
  display: block;
}
.awesome-img {
  overflow: hidden;
  position: relative;
  transition: transform 0.6s cubic-bezier(0.19, 1, 0.22, 1) 0s;
  z-index: 2;
  display:block
}
.awesome-img img{}
.awesome-info {
  background-color: #282727;
  height: 100%;
  padding: 20px 30px 12px;
  position: absolute;
  top: 0;
  width: 100%;
  opacity:1;
  display:block;
}
.awesome-info h3 {
  color: #fff;
  font-size: 16px;
  margin-bottom: 3px;
}
.awesome-info p {
  color: #aaa;
  font-size: 12px;
}
.single-awesome-portfolio a:hover .awesome-img {transform: translateY(100%);}
.awesome-portfolio-menu {
  margin-bottom: 40px;
  margin-top: 20px;
}
.awesome-portfolio-menu ul{text-align:center}
.awesome-portfolio-menu ul li {
  border: 1px solid #ececec;
  color: #888888;
  cursor: pointer;
  display: inline-block;
  font-size: 12px;
  font-weight: 300;
  margin: 0 4px;
  padding: 8px 17px;
  transition: all 0.3s ease 0s;
  background: #fff;
}
.awesome-portfolio-menu ul li.active,.awesome-portfolio-menu ul li:hover{border-color: #2bcdc1;
color: #2bcdc1;}
.awesome-portfolio-content .mix{
    display: none;
}
img {max-width:100%;height:auto}






</style>
<div class="awesome-portfolio-area fix">
      <div class="container">
      <!-- section-heading start -->
      
      <!-- section-heading end -->      
    </div>
    <!-- awesome-portfolio start -->
    <div class="awesome-portfolio">
      <div class="awesome-portfolio-content" id="MixItUp68DC04">
        <!-- single-awesome-portfolio start -->
        <div class="single-awesome-portfolio mix all flat illustration" style="display: inline-block;">
          <a href="#">
            <div class="awesome-img"><img src="https://via.placeholder.com/400x300/FF0000/000000" alt=""></div>
            <div class="awesome-info">
              <h3>Portfolio Name</h3>
              <p>Design</p>
            </div>
          </a>
        </div>
        <!-- single-awesome-portfolio end -->
        <!-- single-awesome-portfolio start -->
        <div class="single-awesome-portfolio mix all design branding" style="display: inline-block;">
          <a href="#">
            <div class="awesome-img"><img src="https://via.placeholder.com/400x300/1E90FF/000000" alt=""></div>
            <div class="awesome-info">
              <h3>Portfolio Name</h3>
              <p>Design</p>
            </div>
          </a>
        </div>
        <!-- single-awesome-portfolio end -->
        <!-- single-awesome-portfolio start -->
        <div class="single-awesome-portfolio mix all flat illustration" style="display: inline-block;">
          <?php
                    $table='cprofile';
                    $stmt1=$admin->ret("SELECT * FROM `cprofile` WHERE pl_id like '%".$result1."%'");
                    while($row1=$stmt1->fetch(PDO::FETCH_ASSOC)){?>
                    <img src="controller/<?php echo $row1['image'];?>" height="100px" width="100px">
                    <h2><?php echo $row1['event'];?></h2>
                    <h2><?php echo $row1['ev_date'];?></h2>
                    <h2><?php echo $row1['description'];?></h2>
                    <?php } ?>
        </div>
        <!-- single-awesome-portfolio end -->
        <!-- single-awesome-portfolio start -->
        <div class="single-awesome-portfolio mix all design branding" style="display: inline-block;">
          <a href="#">
            <div class="awesome-img"><img src="https://via.placeholder.com/400x300/FF8C00/000000" alt=""></div>
            <div class="awesome-info">
              <h3>Portfolio Name</h3>
              <p>Design</p>
            </div>
          </a>
        </div>
        <!-- single-awesome-portfolio end -->
        <!-- single-awesome-portfolio start -->
        <div class="single-awesome-portfolio mix all flat design illustration" style="display: inline-block;">
          <a href="#">
            <div class="awesome-img"><img src="https://via.placeholder.com/400x300/9932CC/000000" alt=""></div>
            <div class="awesome-info">
              <h3>Portfolio Name</h3>
              <p>Design</p>
            </div>
          </a>
        </div>
        <!-- single-awesome-portfolio end -->
        <!-- single-awesome-portfolio start -->
        <div class="single-awesome-portfolio mix all design branding " style="display: inline-block;">
          <a href="#">
            <div class="awesome-img"><img src="https://via.placeholder.com/400x300/008B8B/000000" alt=""></div>
            <div class="awesome-info">
              <h3>Portfolio Name</h3>
              <p>Design</p>
            </div>
          </a>
        </div>
        <!-- single-awesome-portfolio end -->
        <!-- single-awesome-portfolio start -->
        <div class="single-awesome-portfolio mix all design illustration" style="display: inline-block;">
          <a href="#">
            <div class="awesome-img"><img src="https://via.placeholder.com/400x300/" alt=""></div>
            <div class="awesome-info">
              <h3>Portfolio Name</h3>
              <p>Design</p>
            </div>
          </a>
        </div>
        <!-- single-awesome-portfolio end -->
        <!-- single-awesome-portfolio start -->
        <div class="single-awesome-portfolio mix all flat illustration branding" style="display: inline-block;">
          <a href="#">
            <div class="awesome-img"><img src="https://via.placeholder.com/400x300/6495ED/000000" alt=""></div>
            <div class="awesome-info">
              <h3>Portfolio Name</h3>
              <p>Design</p>
            </div>
          </a>
        </div>
        <!-- single-awesome-portfolio end -->
        <!-- single-awesome-portfolio start -->
        
        <!-- single-awesome-portfolio end -->
        <!-- single-awesome-portfolio start -->
        <!-- single-awesome-portfolio end -->
      </div>  
    </div>
    <!-- awesome-portfolio end -->
  </div>
<script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script>
  $(function(){
    $('.awesome-portfolio-content').mixItUp({
   animation: {
       effects: 'rotateZ',
     duration: 1000,
    }
  });
  
   $('.blog-column-content').mixItUp({
   animation: {
     effects: 'scale',
     duration: 1000,
    }
  }); 
  
   $('.portfolio-column-content').mixItUp({
   animation: {
     effects: 'fade rotateY(-180deg)',
     duration: 1000,
    }
  });
}); 
  
</script>
<?php } ?>