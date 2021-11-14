<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="https://m.media-amazon.com/images/I/41mSIgdsHvL.jpg" class="img-circle" width="60"></a></p>
                   <?php $query=mysqli_query($bd, "select fullName from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
              	  <h5 style="font-family: 'Roboto Mono', monospace;font-size:22px;" class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
              	  	
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span style="font-family: 'Roboto Mono', monospace;font-size:17px;">Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span style="font-family: 'Roboto Mono', monospace;font-size:17px;">Account Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php" style="font-family: 'Roboto Mono', monospace;font-size:17px;">Profile</a></li>
                          <li><a  href="change-password.php" style="font-family: 'Roboto Mono', monospace;font-size:17px;">Change Password</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="register-complaint.php" >
                          <i class="fa fa-book"></i>
                          <span style="font-family: 'Roboto Mono', monospace;font-size:17px;">Lodge Complaint</span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="complaint-history.php" >
                          <i class="fa fa-tasks"></i>
                          <span style="font-family: 'Roboto Mono', monospace;font-size:16px;">Complaint History</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>