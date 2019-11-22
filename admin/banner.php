<!DOCTYPE HTML>
<html>
<head>
<title>TuneYou | Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="TuneYou | Admin" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css'/>

<!-- font-awesome icons CSS -->
<link href="fonts/css/all.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/export.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head>
<body class="cbp-spmenu-push">
    <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <aside class="sidebar-left">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="index.html"><span class="fa fa-cutlery"></span> Tuneyou<span class="dashboard_text">dashboard</span></a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="sidebar-menu">
                        <li class="header"></li>
                        <li class="treeview">
                            <a href="index.html">
                            <i class="fa fa-tachometer-alt"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="Reviews.html">
                            <i class="fas fa-comment-dots"></i>
                            <span>Reviews</span>
                            <!-- <span class="label label-primary pull-right">03</span> -->
                            </a>
                        </li>
                        <li>
                            <a href="Orders.html">
                            <i class="far fa-address-card"></i> <span>Users</span>
                            <!-- <small class="label pull-right label-info">08</small> -->
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="Orders.html">
                            <i class="far fa-address-card"></i> <span>Edit Users</span>
                            <!-- <small class="label pull-right label-info">08</small> -->
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="Packages.html">
                            <i class="fa fa-edit"></i> <span>Packages</span>                            
                            </a>                            
                        </li>
                        <li class="treeview">
                            <a href="Reservations.html">
                            <i class="fa fa-table"></i> <span>Reservations</span>
                            <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
                            </ul>
                        </li>
                        
                        <li class="header">ADMINISTRATION</li>
                        <li><a href="users.html"><i class="fa fa-angle-right text-red"></i> <span>Users</span></a></li>
                        <li><a href="admins.html"><i class="fa fa-angle-right text-yellow"></i> <span>Admins</span></a></li>
                        <li><a href="info.html"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </aside>
    </div>
    
    <!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-right">
				
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/Tboy.jpg" height="50" width="50" alt=""> </span> 
									<div class="user-name">
										<p>Ogunsusi Temitayo</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> 
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
        </div>
        <?php
            require_once("includes/config.php");
            function sanitize($dirty){
                return htmlentities($dirty, ENT_QUOTES, "UTF-8");
            }
            $banner = ((isset($_POST['path']))?sanitize($_POST['path']):'');
            $banner = trim($banner);
            // $banner = $_POST['banner'];
            $imageName = ((isset($_POST['imageName']))?sanitize($_POST['imageName']):'');
            $imageName = trim($imageName);
            // $imageName = $_POST['imageName'];
            $con->query("INSERT INTO banners (path, imageName) VALUES ('$banner', '$imageName')");
        ?>

		<div id="page-wrapper">
            <form action="banner.php" method="post">
                <div class="form-group">
                    <label for="email">Image path</label>
                    <input type="file" name="path" class="form-control" value="<?= $banner ?>" />
                <div>
                <div class="form-group">
                <label for="email">Image Name</label>
                    <input type="text" class="form-control" name="imageName" value="<?= $imageName ?>" />
                </div>
            </form>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        

        <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
