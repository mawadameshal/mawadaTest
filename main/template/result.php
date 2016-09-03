<?php
session_start();
include_once 'dbconnect.php';


if(!isset($_SESSION['user']))
{
	header("Location: signin.php");
}
$res=mysql_query("SELECT * FROM lecture WHERE lecture_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

if($userRow['permission'] == 'entry'){ 
        ?> 
        <style type="text/css">
        .calc {
            visibility: hidden;
        }

        .report {
            visibility: hidden;
        }

        .cal {
            visibility: hidden;
        }
        </style>

        <?php }

 
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Welcome - <?php echo $userRow['username']; ?></title>

        <link href="css/style.default.css" rel="stylesheet">
        <link href="css/style.calendar.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <script>
function myFunction() {
    window.print();
}
</script>

    <body>
    
  
    

        
        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="home.php" class="logo">
                        <img src="images/logo-primary.png" alt="" width="125" /> 
                    </a>
      <div class="pull-right">
                        <a href="" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->
                
                <div class="header-right">
                    
                    <div class="pull-right">
                      <div class="btn-group btn-group-list btn-group-notification">
                        <div class="dropdown-menu pull-right">
                            <a href="" class="link-right"><i class="fa fa-search"></i></a>
                        <h5>Notification</h5>
                                <ul class="media-list dropdown-list">
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong> likes a photo of you
                                          <small class="date"><i class="fa fa-thumbs-up"></i> 15 minutes ago</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user2.png" alt="">
                                        <div class="media-body">
                                          <strong>Weno Carasbong</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 04, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user3.png" alt="">
                                        <div class="media-body">
                                          <strong>Venro Leonga</strong> likes a photo of you
                                          <small class="date"><i class="fa fa-thumbs-up"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user4.png" alt="">
                                        <div class="media-body">
                                          <strong>Nanterey Reslaba</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 02, 2014</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dropdown-footer text-center">
                                    <a href="" class="link">See All Notifications</a>
                                </div>
                            </div><!-- dropdown-menu -->
                        </div><!-- btn-group -->
                        
                        <div class="btn-group btn-group-list btn-group-messages">
                          <div class="dropdown-menu pull-right">
                              <a href="" class="link-right"><i class="fa fa-plus"></i></a>
                            <h5>New Messages</h5>
                                <ul class="media-list dropdown-list">
                                    <li class="media">
                                        <span class="badge badge-success">New</span>
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong>
                                          <p>Hi! How are you?...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> 15 minutes ago</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="badge badge-success">New</span>
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user2.png" alt="">
                                        <div class="media-body">
                                          <strong>Weno Carasbong</strong>
                                          <p>Lorem ipsum dolor sit amet...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 04, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user3.png" alt="">
                                        <div class="media-body">
                                          <strong>Venro Leonga</strong>
                                          <p>Do you have the time to listen to me...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user4.png" alt="">
                                        <div class="media-body">
                                          <strong>Nanterey Reslaba</strong>
                                          <p>It might seem crazy what I'm about to say...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong>
                                          <p>Hey I just met you and this is crazy...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 02, 2014</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dropdown-footer text-center">
                                    <a href="" class="link">See All Messages</a>
                                </div>
                            </div><!-- dropdown-menu -->
                        </div><!-- btn-group -->
                        
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                              <li class="divider"></li>
                              <li><a href="logout.php?logout"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>
        
        
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profile.html">
                            <img class="img-circle" src="images/photos/profile.png" alt="">
                        </a>
                        <div class="media-body">
                             <h4 class="media-heading"><?php echo $userRow['username']; ?></h4>
                            <small class="text-muted">lecturer</small>
                        </div>
                    </div><!-- media -->
                    
                     <h5 class="leftpanel-title">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="home.php"><i class="fa fa-home"></i> <span>Home Page</span></a></li>
                       <li ><a href="general.php"><i class="fa fa-envelope-o"></i><span>Inserting And Editing Mark</span></a></li>
                       <li class="calc"><a href="cal.php"><i class="fa fa-home"></i> <span>Calculate Marks</span></a></li>
                       <li class="report"><a href="report.php"><i class="fa fa-bars"></i><span>Reports</span></a> </li>
                        <li class="cal"><a href="calendar.php"><i class="fa fa-calendar"></i><span>Calender</span></a></li>
   
                    </ul>
                </div><!-- leftpanel -->
                
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-bars"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="">Pages</a></li>
                                    <li>Report</li>
                                </ul>
                                <h4>Report</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                   
                    
                    <div class="contentpanel">
                    <div class="panel panel-primary-head">
                            <div class="panel-heading">
         
 <h4 class="panel-title">Result Report for <em><?php 
echo $_SESSION['coursen'];
?> </em>
 Course with <em><?php 
echo $userRow['username'];?></em> Lecturer</h4>

                                
                            </div><!-- panel-heading -->

                      <div class="row">
                            <div class="col-md-8">
                                <div class="panel panel-default">
                                  <div class="panel-body">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h5 class="lg-title">Student Grade</h5>
                                        <p class="mb15">The Precentage of student grade...</p>
                                        <div id="bar-chart">
                                        
                                        <?php
                                        
                                        
                                        
                                       $resulta = mysql_query("SELECT * FROM `student_all_marks` where course_id='".$_SESSION['course']."'");
                                       $num_rows_all = mysql_num_rows($resulta);
                                       if ($num_rows_all == 0.0) {
                                               $num_rows_all=1;
                                               } else {
                                                    
                                        
                                       $result = mysql_query("SELECT * FROM `student_all_marks` WHERE grade = 'Excellent' ");
                                       $num_rows = mysql_num_rows($result);
                                       $precentage= (($num_rows/$num_rows_all)*100);
                                                                                                                     
                                       $result1 = mysql_query("SELECT * FROM `student_all_marks` WHERE grade = 'V.Good' ");
                                       $num_rows1 = mysql_num_rows($result1);
                                       $precentagv= (($num_rows1/$num_rows_all)*100);
                                       
                                       $result2 = mysql_query("SELECT * FROM `student_all_marks` WHERE grade = 'Good' ");
                                       $num_rows2 = mysql_num_rows($result2);
                                       $precentagg= (($num_rows2/$num_rows_all)*100);
                                       
                                       $result3 = mysql_query("SELECT * FROM `student_all_marks` WHERE grade = 'Pass' ");
                                       $num_rows3 = mysql_num_rows($result3);
                                       $precentagp= (($num_rows3/$num_rows_all)*100);
                                       
                                       $result4 = mysql_query("SELECT * FROM `student_all_marks` WHERE grade = 'Fail' ");
                                       $num_rows4 = mysql_num_rows($result4);
                                       $precentagf= (($num_rows4/$num_rows_all)*100);
                                       
                                       $resultfi = mysql_query("SELECT * FROM `student_all_marks` where final <> 0");
                                        $num_rows_fin = mysql_num_rows($resultfi);
                                        $prec_fin = (($num_rows_fin/$num_rows_all)*100);
                                        
                                        $sql  = mysql_query("SELECT * FROM `student_all_marks` where final = 0");
                                        $num_rows_fina = mysql_num_rows($sql);
                                        $prec_fina = (($num_rows_fina/$num_rows_all)*100);
                                        
                                        $sqlp  = mysql_query("SELECT * FROM `student_all_marks` where grade <> 'Fail'");
                                        $num_rows_pass = mysql_num_rows($sqlp);
                                        $prec_pass = (($num_rows_pass/$num_rows_all)*100);
                                        
                                        $sqlf  = mysql_query("SELECT * FROM `student_all_marks` where grade = 'Fail'");
                                        $num_rows_fail = mysql_num_rows($sqlf);
                                        $prec_fail = (($num_rows_fail/$num_rows_all)*100);

 }





                                       ?>
                                     <table id="basicTable" class="table table-striped table-bordered responsive">
                                        <thead><tr><td>Grade</td><td>Excellent</td><td>V.Good</td><td>Good</td><td>Passes</td><td>Fail</td></tr></thead>
                                        <?php
                                        echo $ppp;
                                        echo "<tr><td>Total</td><td>{$num_rows}</td><td>{$num_rows1}</td><td>{$num_rows2}</td><td>{$num_rows3}</td><td>{$num_rows4}</td></tr>";
                                        
                                        echo"<tr><td>Precentage</td><td>{$precentage}%</td><td>{$precentagv}%</td><td>{$precentagg}%</td><td>{$precentagp}%</td><td>{$precentagf}%</td></tr>";
                                        ?>
                                        </table>
                                        </div>
                                        
                                      </div><!-- col-md-7 -->
                                      
                                      <div class="col-md-12">
                                        <h5 class="lg-title">Grade Chart</h5>
                                        <p class="mb15">Summary of the Student Grade.</p>
                                        
                                        <span class="sublabel">Excellent</span>
                                        <div class="progress progress-xs progress-metro">
                                        <?php
                                          echo "<div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$precentage."%'></div>";
                                          ?>
                                        </div><!-- progress -->
                                       
                                        <span class="sublabel">V.Good</span>
                                        <div class="progress progress-xs progress-metro">
                                        
                                          <?php
                                          echo "<div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$precentagv."%'></div>";
                                          ?>

                                        </div><!-- progress -->
                                        
                                        <span class="sublabel">Good</span>
                                        <div class="progress progress-xs progress-metro">
                                          <?php
                                          echo "<div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$precentagg."%'></div>";
                                          ?>

                                        </div><!-- progress -->
                                        
                                        <span class="sublabel">Passed</span>
                                        <div class="progress progress-xs progress-metro">
                                          <?php
                                          echo "<div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$precentagp."%'></div>";
                                          ?>
                                        </div><!-- progress -->
                                        
                                        <span class="sublabel">Fail</span>
                                        <div class="progress progress-xs progress-metro">
                                          <?php
                                          echo "<div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$precentagf."%'></div>";
                                          ?>
                                        </div><!-- progress -->
                                        
                                                                                
                                        
                                      </div><!-- col-md-5 -->
                                    </div><!-- row -->
                                  </div><!-- panel-body -->
                                </div><!-- panel -->
                            </div>
                            
                            <div class="col-md-4">
                                <div class="panel panel-success-head widget-todo">
                                    <div class="panel-heading">
                                   <h3 class="panel-title">Case Report</h3>
                                    </div>
                                    <ul class="panel-body list-group nopadding">
                                        <li class="list-group-item">
                                              <div class="ckbox ckbox-default">
                                              
                                               
                                            
                                              <table id="basicTable" class="table table-striped table-bordered responsive">
                                        
                                                 <thead>
                                                 <tr>
                                                 <th>CASE</th>
                                                 <th>TOTAL</th>
                                                 <th>PRESTAGE</th>
                                                 </tr>
                                                 </thead>
                                                 
                                                 <?php
                                                  echo" <tr><td>Registered Student</td><td>{$num_rows_all}</td><td></td></tr>";                                               
                                                  echo "<tr><td>Final Exam Attentance</td><td>{$num_rows_fin}</td><td>{$prec_fin}%</td></tr>";
                                                 echo "<tr><td>Final Exam Absence</td><td>{$num_rows_fina}</td><td>{$prec_fina}%</td></tr>";
                                                 echo "<tr><td>Passes Students</td><td>{$num_rows_pass}</td><td>{$prec_pass}%</td></tr>";
                                                 echo " <tr><td>Failed Students</td><td>{$num_rows_fail}</td><td>{$prec_fail}%</td></tr>";

                                                 ?>
                                                 
                                                 </table>
                                                 </div>
                                              </li>  
                                    </ul>
                                </div>
                            </div><!-- col-md-4 -->
                        </div><!-- row -->
                        


                       

                        
    
                        <div class="panel-footer">
                       <div class="row">
                       <div class="col-sm-9 col-sm-offset-3" align="right">
                       <button type="submit" class="btn btn-primary mr5" name="calMark" onclick="myFunction()">Print</button>
                                                                  </div>
                                        </div>
                                    </div><!-- panel-footer -->
                                    
                        </div>

                       </div><!-- panel -->
                         
                       </div>
                       
                       </div>
                       
                       
 <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.cookies.js"></script>
        
        <script src="js/flot/jquery.flot.min.js"></script>
        <script src="js/flot/jquery.flot.resize.min.js"></script>
        <script src="js/flot/jquery.flot.spline.min.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="js/raphael-2.1.0.min.js"></script>
        <script src="js/bootstrap-wizard.min.js"></script>
        <script src="js/select2.min.js"></script>

        <script src="js/custom.js"></script>
        <script src="js/dashboard.js"></script>
        
    </body>
</html>
