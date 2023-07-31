<?php 
$stmt=$admin->ret("SELECT COUNT(*) from `requestevent` WHERE `status`='pending'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$r=implode($row);
?>

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
          <a href="#" class="d-block" style="color:black">Admin</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="index1.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="color:black">
                Dashboard               
              </p>
            </a>            
          </li>

          <li class="nav-item">
            <a href="viewbudget.php" class="nav-link">
              <i class="nav-icon fas fa-rupee-sign" style="color:white"></i>
              <p style="color:black">
                Budget
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="muser.php" class="nav-link">
              <i class="nav-icon fas fa-users" style="color:white"></i>
              <p style="color:black">
                Players  
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user" style="color:white"></i>
              <p style="color:black">
                Staff
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addmanagement.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p style="color:black">Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewmanagement.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p style="color:black">View</p>
                </a>
              </li>              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dolly-flatbed" style="color:white"></i>
              <p style="color:black">
                  Stock Suppliers
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="supplier.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p style="color:black">Add Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vsuppliers.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p style="color:black">View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="supplierstock.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p style="color:black">Add Supplier Stock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="items.php" class="nav-link">
                  <i class="fas fa-rupee-sign nav-icon"></i>
                  <p style="color:black">Update Price</p>
                </a>
              </li>             
            </ul>
          </li>
          
           <li class="nav-item">
            <a href="viewrequest.php" class="nav-link">
              <i class="nav-icon fas fa-arrow-down" style="color:white"></i>
              <p style="color:black">
                View Event Requests
                <span class="badge badge-info right"><?php echo $r ?></span></i>
              </p>
            </a>
          </li>
                  
          <li class="nav-item">
            <a href="viewfeedback.php" class="nav-link">
              <i class="nav-icon fas fa-comments" style="color:white"></i>
              <p style="color:black">
                Feedback
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
        </ul>
      </nav>
    </div>
  </aside>