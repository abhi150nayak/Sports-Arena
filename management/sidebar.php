  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#34c0e0">
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light" style="color:black"><b>SDM COLLEGE</b></span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color:black">Staff</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php
          $mnid=$_SESSION['id'];
          $stmt=$admin->ret("SELECT * FROM `staff` where mid='$mnid'");
          $row=$stmt->fetch(PDO::FETCH_ASSOC);
          ?>
          
          <?php if($row['roll'] == 'admin'){?>
          <li class="nav-item menu-open">
            <a href="index1.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="color:black">Statistics</p>
            </a>  
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy" style="color:white"></i>
              <p style="color:black">
                Events
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addcategory.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p style="color:black">Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewcategory.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p style="color:black">View</p>
                </a>
              </li>  
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users" style="color:white"></i>
              <p style="color:black">
                Players
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addplayer.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p style="color:black">Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewplayer.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p style="color:black">View</p>
                </a>
              </li> 
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope" style="color:white"></i>
              <p style="color:black">
                Request For Event
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="requestevent.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p style="color:black">Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vstatus.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p style="color:black">View Status</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building" style="color:white"></i>
              <p style="color:black">
                Tournament
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addevent.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p style="color:black">Add Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewevent.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p style="color:black">View</p>
                </a>
              </li> 
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="viewtrophy.php" class="nav-link">
              <i class="nav-icon fas fa-trophy" style="color:white"></i>
              <p style="color:black">
                Achievements
              </p>
            </a>
          </li>
            
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dolly-flatbed" style="color:white"></i>
              <p style="color:black">
                Stock
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="suppliers.php" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p style="color:black">Suppliers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addstock.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p style="color:black">Add Item Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewstock.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p style="color:black">View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="scrapitem.php" class="nav-link">
                  <i class="fas fa-minus nav-icon"></i>
                  <p style="color:black">Scrap</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="attendance.php" class="nav-link">
              <i class="fas fa-clock nav-icon" style="color: white"></i>
              <p style="color:black">Training</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hamburger" style="color:white"></i>
              <p style="color:black">
               Food Record
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="food.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p style="color:black">Add Record</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewfood.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p style="color:black">View Record</p>
                </a>
              </li>  
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hospital" style="color:white"></i>
              <p style="color:black">
                Health Issue
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="health.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p style="color:black">Add Record</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewhealth.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p style="color:black">View Record</p>
                </a>
              </li> 
            </ul>
          </li>

          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon fas fa-user" style="color:white"></i>
              <p style="color:black">
              Edit Profile
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off" style="color:white"></i>
              <p style="color:black">
                Logout  
              </p>
            </a> 
          </li>
          
          <?php } else { ?>
          <li class="nav-item menu-open">
            <a href="index1.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="color:black">Staff</p>
            </a> 
          </li>

          <li class="nav-item">
            <a href="viewcategory.php" class="nav-link">
              <i class="nav-icon fas fa-copy" style="color:white"></i>
              <p style="color:black">Events</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="viewplayer.php" class="nav-link">
              <i class="nav-icon fas fa-users" style="color:white"></i>
              <p style="color:black">Players</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope" style="color:white"></i>
              <p style="color:black">
                Request For Event
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="vstatus.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p style="color:black">View Status</p>
                </a>
              </li> 
            </ul>
          </li>

          <li class="nav-item">
            <a href="viewevent.php" class="nav-link">
              <i class="nav-icon fas fa-building" style="color:white"></i>
              <p style="color:black">Tournament</p>
            </a>
          </li>
              
          <li class="nav-item">
            <a href="viewtrophy.php" class="nav-link">
              <i class="nav-icon fas fa-trophy" style="color:white"></i>
              <p style="color:black">Achievements</p>
            </a>
          </li>
           
          <li class="nav-item">
            <a href="viewstock.php" class="nav-link">
              <i class="nav-icon fas fa-dolly-flatbed" style="color:white"></i>
              <p style="color:black">Stock</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="viewfood.php" class="nav-link">
              <i class="nav-icon fas fa-hamburger" style="color:white"></i>
              <p style="color:black">Food Record</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="viewhealth.php" class="nav-link">
              <i class="nav-icon fas fa-hospital" style="color:white"></i>
              <p style="color:black">Health Issue</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon fas fa-user" style="color:white"></i>
              <p style="color:black">
              Edit Profile
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off" style="color:white"></i>
              <p style="color:black">Logout</p>
            </a>
          </li>
          <?php }?>
        </ul>
      </nav>
    </div>
  </aside>