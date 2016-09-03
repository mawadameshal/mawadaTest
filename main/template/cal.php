<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: signin.php");
}
$res=mysql_query("SELECT * FROM lecture WHERE lecture_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);


$query = "SELECT * FROM `semester`";

$result = mysql_query($query);

$options = "";

while($row1 = mysql_fetch_array($result))
{

$options = $options."<option value=".$row1[0].">$row1[1]</option>";
   }

if($userRow['permission'] == 'entry'){
$query1 = "SELECT DISTINCT course.course_id,course_name FROM `course`, `lecture_schedule`";

$result1 = mysql_query($query1);

$options1 = "";

while($row2 = mysql_fetch_array($result1))
{
$options1 = $options1."<option value=".$row2[0].">$row2[1]</option>";
}

}
else {
  $query1 = "SELECT DISTINCT course.course_id,course_name FROM `course`, `lecture_schedule` WHERE course.course_id = lecture_schedule.course_id AND lecture_id=".$_SESSION['user'];

$result1 = mysql_query($query1);

$options1 = "";

while($row2 = mysql_fetch_array($result1))
{
$options1 = $options1."<option value=".$row2[0].">$row2[1]</option>";
}
}

$query2 = "SELECT DISTINCT section FROM `student_all_marks`";

$result2 = mysql_query($query2);

$options2 = "";

while($row3 = mysql_fetch_array($result2))
{
$options2 = $options2."<option value=".$row3[0].">$row3[0]</option>";
}

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
    
    <?php
    $_SESSION['sem']  = $_POST['semester'];
    $_SESSION['cou']  = $_POST['course'];
    $_SESSION['sec'] = $_POST['section'];



	if(isset($_POST['formadd'])) 
	{
	    
	
		$varCountry = $_POST['formtype'];
		$errorMessage = "";
		
		
		if(empty($varCountry)) 
		{
			$errorMessage = "<li>You forgot to select Type!</li>";
		}
		
		if($errorMessage != "") 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
		else 
		{
		    
			switch($varCountry)
			{

        case "assess": header("Location: assmark.php"); break;
        case "mid": header("Location: midmark.php"); break;
				case "fin": header("Location: finmark.php"); break;
				

				
			    default: echo("Error!"); exit(); break;
			}
			
		
			exit();
		}
	}
	
	
	?>


        
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
                        <a class="pull-left profile-thumb" href="#">
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
                                    <li>Calculate Marks</li>
                                </ul>
                                <h4>Calculate Marks</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                    
                   <form id="basicForm4"  method="post">
                    <div class="col-md-6" id="sec1">
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns">
                        <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                         <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">General Choices</h4>
                                        <p>Determine Semester ,Course , Section and type of Marks.</p>
                                    </div><!-- panel-heading -->
                                    
                                                                                     
                                    
                                    <div class="panel-body">  
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Semester</label>
                                            <div class="col-sm-9">
                                            
                                           <select name="semester" id="Sesm" data-placeholder="Choose One" class="width100p" required>
                                              <option value="">Choose one</option>
                                               <?php echo $options;?>

                                                  </select>

                                                <label class="error" for="Sesm"></label>
                                               
                                            </div>
                                            
                                        </div><!-- form-group -->
                                    </div><!-- panel-body -->
                                    
                                    
                                  
                                  <div class="panel-body">  
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Course</label>
                                            <div class="col-sm-9">
                                                <select name="course" id="course" data-placeholder="Choose One" class="width100p" required>
                                                           <option value="">Choose one</option>                                                    
                                                                    <?php echo $options1;?>
                               
                                                </select>
                                                <label class="error" for="course"></label>

                                            </div>
                                           
                                        </div><!-- form-group -->
                                    </div><!-- panel-body -->
                                  
                                  
                                  
                                  <div class="panel-body">  
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Section</label>
                                            <div class="col-sm-9">
                                                <select name="section" id="section" data-placeholder="Choose One" class="width100p" required>
                                                   <option value="">Choose one</option>
                                                      <?php echo $options2;?>
                                                </select>
                                                <label class="error" for="section"></label>
                                                

                                            </div>
                                            
                                           
                                        </div><!-- form-group -->
                                    </div><!-- panel-body -->
                                    
                                 
                                           <div class="panel-body">  
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Type</label>
                                            <div class="col-sm-9">
                                              <select id="type" name="formtype" data-placeholder="Choose One" class="width100p" required>
                                                <option value="">Choose One</option>
                                                <option value="assess" label="Assessment Calculate">Assessment Calculate</option>  
                                                 <option value="mid" label="Mid Mark Calculate">Mid Mark Calculate</option> 
                                                 <option value="fin" label="Final Calculate">Final Calculate</option>  
     
                                              </select>
                                                                                                
                                                                      
                                                     <label class="error" for="type"></label>
                                                

                                            </div>
                                            
                                           
                                        </div><!-- form-group -->
                                    </div><!-- panel-body -->
                                       
                           <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-9 col-sm-offset-3" align="right">
                                                <button type="submit" class="btn btn-primary mr5" name="formadd">Calculate Marks</button>
                                                
					
                                            </div>
                                        </div>
                                       
                                    </div><!-- panel-footer -->
                                            
                                        </div>
                                        
                                    
                                    
                               
                                                            </div><!-- col-md-6 -->
                                                            </form>
                                                            
                        </div><!-- row-->
                        
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
