<!-- - config file included here   - -->
<?php
include("includes/check_session.php");
include("api/config.php");
?>


<!--
**********************************************************************************************************************************************************
MAIN SIDEBAR MENU
***********************************************************************************************************************************************************
-->
<!-- sidebar start-->


<aside>
<style>
  .drop .drops{
    color:#000000;
  }
  </style>
   <div id="sidebar" class="nav-collapse">
      <!-- sidebar menu start-->
      <ul id="nav-accordion" class="sidebar-menu">
         <p class="centered">
            <a href="index.php">
               <?php
               if (isset($_SESSION['username']) && $_SESSION['username']!="" ) { 
                  ?>
                  <img src="images/admin.jpg" width="80" class="img-circle">
                  <?php
               }
               else if (isset($_SESSION['emp_id']) && $_SESSION['emp_id']!="" ) {
                  if (file_exists("images/profilepics/".$_SESSION['emp_id'].".jpg")) {
                     ?>
                     <img src="images/admin.jpg" width="80" class="img-circle"/>
                     <?php
                  }
               }
               else {
                  ?>
                  <img src="images/admin.jpg" width="80" class="img-circle"/>
                  <?php
               } ?>
            </a>
         </p>
         
   
         <li class="sub-menu"><a href="dashboard.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
          <li class="dropdown">
           <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard"></i><span>Reports</span></a>
            <ul class="dropdown-menu">
              <li class="drop"><a class="drops" href="report.php">Analyzing Reports</a> </li>
              <li class="drop"><a class="drops" href="reportoverview.php">Reports Overview</a></li>
            </ul>
          </li>


          <li class="sub-menu"><a href="students.php"><i class="fa fa-dashboard"></i><span>Students list</span></a></li>

          
          
           <li class="dropdown">
           <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard"></i><span>Student Search</span></a>
              <ul class="dropdown-menu">
               
                             <li class="drop"><a class="drops" href="breakfast.php">BREAKFAST</a> </li>
                            <li class="drop"><a class="drops" href="lunch.php">LUNCH</a></li>
                            <li class="drop"><a class="drops" href="snacks.php">SNACKS</a> </li>
                      
                            <li class="drop"><a class="drops" href="dinner.php">DINNER</a></li>
                          </ul> 

                       </li>
                 <li class="sub-menu"><a href="collegesearch.php"><i class="fa fa-dashboard"></i><span>College Search</span></a></li>

                     
      </ul>
   </div>
</aside>