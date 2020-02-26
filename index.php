<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parking System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
           
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="">
                            <img src="assets/img/logo.png" class="img-fluid logo-desktop" alt="logo" />
                            <img src="assets/img/logo-icon.png" class="img-fluid logo-mobile" alt="logo" />
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li> 
                                <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                    <a href="javascript:void(0)" class="nav-link expand">
                                        <i class="icon-size-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-right ml-auto">
                                
                                
                                <li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/img/avtar/02.jpg" alt="avtar-img">
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                    <h4 class="text-white mb-0">Admin</h4>
                                                    <small class="text-white">admin@example.com</small>
                                                </div>
                                                <a href="login/logout" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                                                class="zmdi zmdi-power"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">Personal</li>
                            <li class="active">
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Dashboards</span>
                                    
                                </a>
                             <li class="active">
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Signout</span>
                              
                                </a>
                               
                            </li>
                               
                            </li>
                            
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        
                       
        
                        <div class="row">
                            
                            <div class="col-xxl-5 m-b-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Parking Lot</h4>
                                             
                                        </div>
                                         <div class='fc-event fc-event-danger' data-color="fc-event-danger" style="margin-bottom: 1px;"><span></span> Booked</div>
                                                    <div class='fc-event fc-event-success' data-color="fc-event-success" style="margin-bottom: 1px;"><span></span> Available</div>
                                    </div>
                                    <div class="card-body" style="margin-bottom: 50px;">
                                        <div class="container">

  <!-- Button to Open the Modal -->
<div class="row">
        <?php
            include ('connection.php');
            $query="SELECT * FROM parking_lot JOIN status ON parking_lot.parking_id=status.parking_id";
            $result=mysqli_query($conn,$query);
            while ($row=mysqli_fetch_array($result)){

                $id=$row['id'];
                $name=$row['name'];
                $parking_status=$row['parking_status'];
                $parking_color=$row['parking_color'];

            echo '<div class="col-sm-3">
                    <button style="width: 200px; height:45px; border: 2px dashed black" type="button" class="mb-4 btn '.$parking_color.'" data-toggle="modal" data-target="#myModal-'.$name.'">'.$name.'</button></div>';
            }
        ?>
</div>

  <!-- The Modal -->
        <?php
            include ('connection.php');
            date_default_timezone_set("Asia/Kolkata");
            $x=date('Y-m-d H:i:s');

            $query="SELECT * FROM parking_lot JOIN status ON parking_lot.parking_id=status.parking_id";
            $result=mysqli_query($conn,$query);
            while ($row=mysqli_fetch_array($result)){

                $id=$row['id'];
                $name=$row['name'];
                $parking_id=$row['parking_id'];
                $vehicle_no=$row['vehicle_no'];
                $mobile_no=$row['mobile_no'];
                $date=$row['date_date'];
                $parking_status=$row['parking_status'];
                $parking_color=$row['parking_color'];

                $start_date=new DateTime($row['date_date']);
                $since_start=$start_date->diff(new DateTime($x));
                $minutes+=$since_start->days*24*60;
                $minutes+=$since_start->h*60;
                $minutes+=$since_start->i;

                if ($minutes<='60') {
                    $amount='20';
                } elseif ($minutes>'60' and $minutes<='120') {
                    $amount='30';
                } elseif ($minutes>'120' and $minutes<='180') {
                    $amount='40';
                } elseif ($minutes>'180' and $minutes<='240') {
                    $amount='50';
                } else {
                    $amount='80';
                }

 
            echo '<div class="modal fade" id="myModal-'.$name.'">
            
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Car Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form class="form-inline" type="GET" action="index.php">';
         ?>

         <?php
         if ($parking_id == '0') {
             echo '<input type="text" class="form-control" placeholder="Car Details"  name="vehicle_no"><br><br>
  
                  <input type="mobile" class="form-control" placeholder="Enter Mobile Number" name="mobile_no"><br><br>

                  <input type="hidden" class="form-control" name="selected_parking_slot" value="'.$name.'"><br><br>

                  <button type="submit" name="park" value="park" class="btn btn-success">Park Here</button>&nbsp;&nbsp;<br><br>

                  <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button><br><br>';
         }
         else{
            echo '<input type="text" class="form-control" placeholder="Car Details" name="carno" value="'.$vehicle_no.'"><br><br>
  
                  <input type="mobile" class="form-control" placeholder="Enter Mobile Number"  name="mobileno"><br><br>

                  <input type="text" class="form-control"  name="amount" value="Rs '.$amount.'" disabled><br><br>

                  <input type="hidden" class="form-control" name="selected_parking_slot" value="'.$name.'"><br><br>

                  <button type="submit" name="freeslot" value="freeslot" class="btn btn-success">Free Slot</button>&nbsp;&nbsp;<br><br>

                  <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button><br><br>';
         }
         ?>

         
 
  <?php 

  echo '

</form>
        </div>
      </div>
    </div>
  </div>';
        }
        ?>

        <?php
            if (isset($_GET['park'])) {
                date_default_timezone_set("Asia/Kolkata");
                $x=date('Y-m-d H:i:s');

                $selected_parking_slot=$_GET['selected_parking_slot'];
                $vehicle_no=$_GET['vehicle_no'];
                $mobile_no=$_GET['mobile_no'];
                $book_parking_lot="UPDATE parking_lot SET parking_id='1', vehicle_no='$vehicle_no', mobile_no='$mobile_no', date_date='$x' WHERE name='$selected_parking_slot'";

                    if(mysqli_query($conn, $book_parking_lot))

                            {
                                echo "<script>
                                alert('parking Successful!');
                                window.location.href='index.php';
                                </script>";
                            }
            }
        ?>

        <?php
            if (isset($_GET['freeslot'])) {
                $selected_parking_slot=$_GET['selected_parking_slot'];
                $mobile_no=$_GET['mobile_no'];
                    date_default_timezone_set("Asia/Kolkata");
                    

                $empty_parking_lot="UPDATE parking_lot SET parking_id='0', vehicle_no='', mobile_no='', date_date='' WHERE name='$selected_parking_slot'";

                    if(mysqli_query($conn, $empty_parking_lot))
                            {
                                echo "<script>
                                alert('Unpark Successful!');
                                window.location.href='index.php';
                                </script>";
                          }
            
            }
        ?>
  
</div>

                                  </div>
                                </div>
                            </div>
                        </div>

            <!-- begin footer -->
            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright 2020. All rights reserved.</p>
                    </div>
                    <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                        
                    </div>
                </div>
            </footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>



</html>
