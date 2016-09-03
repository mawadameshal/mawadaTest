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
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="">Pages</a></li>
                                    <li>Assessment</li>
                                </ul>
                                <h4>Assessment</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                    
                   <form id="basicForm4" method="post" >
                   <div class="panel panel-primary-head">
                            <div class="panel-heading">
                                <h4 class="panel-title">Quiz Assessment</h4>
                                
                            </div><!-- panel-heading -->
                            
                                
                     
                            <?php
                            
                            if($_POST){
       		foreach($_POST['std'] as $key => $std){
       			//echo $_POST['std'][$key]." ".$_POST['labnum'][$key]." ".$_POST['labmark'][$key]." ".$_POST['labass'][$key]." <br/>";
       			
	$updatesql = "UPDATE `student_all_marks` SET `quiz1`=('".$_POST['quizmark'][$key]."') WHERE (student_mark_id= ".$_POST['quizass'][$key].")";
	$result3 = mysql_query($updatesql) or die("<br/><br/>".mysql_error());
	
	 	  			
       		//echo '<tr><td colspan="4">Mark Saved</td></tr>';
	 
       		}
       		
       }
             

 # Prepare the SELECT Query
      
  $selectSQL = "SELECT * FROM student,student_all_marks WHERE (student_all_marks.student_id=student.student_id) AND (semester_id='".$_SESSION['sem']."') AND (section='".$_SESSION['sec']."') AND (course_id='".$_SESSION['cou']."') ";
 # Execute the SELECT Query
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
<table id="basicTable" class="table table-striped table-bordered responsive">
                                <thead class="">
                                    <tr>
                                        <th>Student Mark ID</th>
                                        <th>Student Name</th>
                                        <th>Student ID</th>
                                        <th>Quiz Assessment No.1 Mark</th>
                                             </tr>
                                </thead>
                         
                                <tbody>
    <?php

      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';


      }else{
         

        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['student_mark_id']}<input name='quizass[]' type='hidden' value='{$row['student_mark_id']}'/></td><td>{$row['student_name']}</td><td>{$row['student_id']}<input name='std[]' type='hidden' value='{$row['student_id']}'/></td><td contenteditable><select select name='quizmark[]' class='width100p' required><option>{$row['quiz1']}</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td></tr>";
          
                   }
      }
    ?>
  </tbody>
</table>
    <?php
  }

?>

                       

                        
    
                        <div class="panel-footer">
                       <div class="row">
                       <div class="col-sm-9 col-sm-offset-3" align="right">
                       <button type="submit" class="btn btn-primary mr5" name="savelab">Save</button>
                                            </div>
                                        </div>
                                    </div><!-- panel-footer -->
                                    
                        </div>
                </form> 

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
