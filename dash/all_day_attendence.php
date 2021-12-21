<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    
    <title>Attendence Details</title>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
       
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="  assets/images/logo.png" width="200" style="margin-left:30px;">
    </div>
    <div class="logo-details">
    <small style="color:white;padding-left: 15%;"><h5>Attendance System</h5></small>
    </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name" class="active">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="all_day_attendence.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">All Day Attendance</span>
          </a>
        </li>
        
       <!-- <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>-->
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button" >
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
       
      </div>
      <form class="form-inline ser" method="post" action="" >
          
          <div class="form-group mx-sm-3 mb-2" >
            <label for="inputPassword2" class="sr-only">Password</label>
            <input type="text" class="form-control " name="search" id="inputPassword2" placeholder="Search....." style="width:400px;height:50px;margin-top:-42px;"> 
            <input type="submit" name="submit" class="btn btn-primary " value="Search"style="margin-left:64%;margin-top:-83px;padding:10px;width:100px;" >
            <!-- <button type="submit" name="submit" class="btn btn-primary float-right" style="margin-left:110%; margin-bottom: 20%;">Confirm identity</button> -->
          </div>
        
        </form>
       
        
      
      
    </nav>
<br><br><br>
        <div id="page-wrapper" >
            <div id="page-inner" >
                
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="home-content"  style="background-color: #ddd;">
                          <div class="overview-boxes">
                            <div class="box">
                              <div class="right-side">
          
            <?php
    $conn=mysqli_connect('localhost','root','','abc')or die(mysqli_error($conn));
    
    $sql = "SELECT  DISTINCT * from admin";
    $sql1="Select distinct * from admin where Time(timestamp)>Time('10:15:59') ";
            if ($result = mysqli_query($conn, $sql)) {
              
                // Return the number of rows in result set
                $rowcount = mysqli_num_rows( $result );
                
            }
            if ($result = mysqli_query($conn, $sql1)) {
              
              // Return the number of rows in result set
              $latecount = mysqli_num_rows( $result );
              
          }
            ?>
            <div class="box-topic">Employee Present</div>
            <div class="number"><?= $rowcount;?> </div>
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <!-- <span class="text">Up from yesterday</span> -->
            </div>
          </div>
          <i class="fa fa-user" style="font-size:48px;color:#2697FF"></i>
          
        </div>

       
        <div class="box"style="margin-right:30px;">
          <div class="left-side">
            <div class="box-topic">Late Employee Count</div>
            <div class="number"><?=$latecount;?> </div>
            <div class="indicator">
              <!-- <i class='bx bx-up-arrow-alt'></i> -->
              <!-- <span class="text">Up from yesterday</span> -->
            </div>
          </div>
          <i class="fa fa-user" style="font-size:48px;color:#2697FF"></i>
        </div>

      </div>
      <div class="sales-boxes">
                        <div class="recent-sales box">
                        <div class="panel-heading">
                             Attendance Details
                        </div>
                        <a href="alldayexportData.php" class="btn btn-success"style="margin-left: 88%;"> Download <i class="fa fa-download"></i></a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-center" id="dataTables-example" style="text-align:center;">
                                    <thead>
                                        <tr>
                                            <th> Id</th>
                                            <th> Name</th>
                                            <th> Email</th>
                                            <th> Image</th>
                                            <th>Location</th>
                                            <th> Time</th>
                                            <th> Date</th>
                                            <th>Time Status</th>
                                            <th>Location Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                        $conn=mysqli_connect('localhost','root','','abc')or die(mysqli_error($conn));
                                        $id=0;
                                        $ser='';
                                        
                                        if(isset($_POST['submit']))
                                        {
                                          $ser=$_POST['search'];
                                        }
                                  
                                        if($ser)
                                        {
                                            $query="SELECT * FROM admin
                                            WHERE name LIKE '%$ser%'";
                                            $run=mysqli_query($conn,$query)or die(mysqli_error($conn));
                                            if(mysqli_num_rows($run)>0)
                                            {
                                                while($row=mysqli_fetch_assoc($run)){
                                                    $time = new DateTime($row['timestamp']);
                                                $date = $time->format('j/n/Y');
                                                $time = $time->format('H:i:s');
                                                $l=$row['location'];
                                                $temp=explode(" ",$l);
                                                $lt=(double)$temp[0];
                                                $ll=(double)$temp[1];
                                                $tstatus='On Time';
                                                $color="green";
                                                if(strtotime($time)>strtotime("10:15:59"))
                                                {
                                                  $tstatus='Late';
                                                  $color='Red';
                                                }
                                                $lstatus='On location';
                                                $color1="green";
                                                if(($lt<28.5851280 || $lt>28.6097428) || ($ll<77.3121120 || $ll>77.3750800))
                                                {
                                                  $lstatus="Other Location";
                                                  $color1='red';
                                                }
                                                    ?>
                                                        <tr>
                                                        
                                                        <td><?= ++$id; ?></a></td>        
                                                        
                                                        <td><?= $row['name'];?></td>
                                                        
                                                        <td><?= $row['email']; ?></td>

                                                        <td><img src="/attendence/admin/<?= $row['image']; ?>" height="80px" width="150px" alt="Image"></td>

                                                        <td><?= $row['location']; ?></td>

                                                        <td><?= $time;?></td>

                                                        <td><?= $date;?></td>

                                                        <td style="color: <?=$color?>"><?=$tstatus;?></td>
                                                        <td style="color: <?=$color1?>"><?=$lstatus;?></td>
                                                    </tr>
                                                    <?php
                                                }

                                            }

                                        }else{
                                            // $query="SELECT  DISTINCT * from admin ;";
                                            $query="SELECT  DISTINCT * from admin";
                                        $run=mysqli_query($conn,$query);
                                        if(mysqli_num_rows($run)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($run)){
                                                $time = new DateTime($row['timestamp']);
                                                $date = $time->format('j/n/Y');
                                                $time = $time->format('H:i:s');
                                                $l=$row['location'];
                                                $temp=explode(" ",$l);
                                                $lt=(double)$temp[0];
                                                $ll=(double)$temp[1];
                                                $tstatus='On Time';
                                                $color="green";
                                                if(strtotime($time)>strtotime("10:15:59"))
                                                {
                                                  $tstatus='Late';
                                                  $color='Red';
                                                }
                                                $lstatus='On location';
                                                $color1="green";
                                                if(($lt<28.5851280 || $lt>28.6097428) || ($ll<77.3121120 || $ll>77.3750800))
                                                {
                                                  $lstatus="Other Location";
                                                  $color1='red';
                                                }
                                              ?>
                                                <tr>
                                                        
                                                    <td><?= ++$id; ?></a></td>        
                                                    
                                                    <td><?= $row['name'];?></td>
                                                    
                                                    <td><?= $row['email']; ?></td>

                                                    <td><img src="/attendence/admin/<?= $row['image']; ?>" height="80px" width="150px" alt="Image"></td>

                                                    <td><?= $row['location']; ?></td>

                                                    <td><?= $time;?></td>

                                                    <td><?= $date;?></td>

                                                    <td style="color: <?=$color?>"><?=$tstatus;?></td>
                                                    <td style="color: <?=$color1?>"><?=$lstatus;?></td>
                                                </tr>
                                                    </div>
                                              <?php
                                         
                                            }
                                        } 
                                        }
                                        

                                    ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        </div>
   </section>                 </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
             
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
     
</body>
</html>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

