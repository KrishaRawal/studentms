<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>Student  Management System || Contact Us Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
	<body>
<!--header-->
<div class="header" id="home">
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
          </button>
          <h1><a class="navbar-brand" href="index.html">SMS</a></h1>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                <li><a href="index.html"><span data-hover="Home">Home</span></a></li>
               
                
                <li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
                <li><a href="admin/login.php"><span data-hover="Contact">Admin</span></a></li>
                <li><a href="user/login.php"><span data-hover="Shortcodes">Student</span></a></li>
              </ul>
              <div class="clearfix"> </div>
            </div><!-- /.navbar-collapse -->
        <!-- /.container-fluid -->

      </nav>
<!--/script-->
       <div class="clearfix"> </div>
</div>
<!-- Top Navigation -->
<div class="banner banner5">
	<div class="container">
	<h2>Contact</h2>
	</div>
</div>
<!--header-->
		<!-- contact -->
		<div class="contact">
			<!-- container -->
			<div class="container">
				<div class="contact-info">
					<h3 class="c-text">Feel Free to contact with us!!!</h3>
				</div>
				
				<div class="contact-grids">
					<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
					<div class="col-md-4 contact-grid-left">
						<h3>Address :</h3>
						<p><?php  echo htmlentities($row->PageDescription);?>
						</p>
					</div>
					<div class="col-md-4 contact-grid-middle">
						<h3>Phones :</h3>
						<p><?php  echo htmlentities($row->MobileNumber);?>
						</p>
					</div>
					<div class="col-md-4 contact-grid-right">
						<h3>E-mail :</h3>
						<p><?php  echo htmlentities($row->Email);?>
						</p>
					</div>
					<div class="clearfix"> </div>
					<?php $cnt=$cnt+1;}} ?>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //contact -->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
