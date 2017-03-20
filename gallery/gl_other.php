<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../lib/jquery-3.1.1.js"></script>
	<script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<link rel="shortcut icon" type="image/png" href="../images/icon.png"/>
	<title>How Does Tech Works</title>
    <?php
        include ("../template.php");
        $template = new Template();
    ?>
</head>
<body>
    <?php
        $template->showHeader("gallery");
    ?>
	
	<div class="container-fluid">
		<div class="col-md-3">
			<h3 class="text-center"><strong>Gallery</strong></h3>
			<ul class="nav nav-pills nav-stacked" id="side-menu">
				<li><a href="gl_pc_parts.php">Computer parts</a></li>
				<li><a href="gl_pc_peripherals.php">Computer peripherals</a></li>
				<li><a href="gl_network_devices.php">Network devices</a></li>
				<li class="active"><a href="gl_other.php">Other</a></li>
			</ul>
		</div>

		<div class="col-md-9">
			<div class="row text-center">
				<h1>Other technologies</h1>

				<!--    refrigerator IMAGES      -->

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/other/refrigerator/refrigerator1.gif" target="_blank">
						<div class="thumbnail">
							<img src="../images/other/refrigerator/refrigerator1.gif" alt="">
							<div class="caption text-center">
								<p>This is refrigerator</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/other/refrigerator/refrigerator2.png" target="_blank">
						<div class="thumbnail">
							<img src="../images/other/refrigerator/refrigerator2.png" alt="">
							<div class="caption text-center">
								<p>This is refrigerator</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/other/refrigerator/refrigerator3.jpg" target="_blank">
						<div class="thumbnail">
							<img src="../images/other/refrigerator/refrigerator3.jpg" alt="">
							<div class="caption text-center">
								<p>This is refrigerator</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/other/refrigerator/refrigerator4.jpg" target="_blank">
						<div class="thumbnail">
							<img src="../images/other/refrigerator/refrigerator4.jpg" alt="">
							<div class="caption text-center">
								<p>This is refrigerator</p>
							</div>
						</div>
					</a>
				</div>

				<!--    gps IMAGES      -->

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/other/gps/gps1.jpg" target="_blank">
						<div class="thumbnail">
							<img src="../images/other/gps/gps1.jpg" alt="">
							<div class="caption text-center">
								<p>This is GPS</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/other/gps/gps2.png" target="_blank">
						<div class="thumbnail">
							<img src="../images/other/gps/gps2.png" alt="">
							<div class="caption text-center">
								<p>This is GPS</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/other/gps/gps3.jpg" target="_blank">
						<div class="thumbnail">
							<img src="../images/other/gps/gps3.jpg" alt="">
							<div class="caption text-center">
								<p>This is GPS</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/other/gps/gps4.jpg" target="_blank">
						<div class="thumbnail">
							<img src="../images/other/gps/gps4.jpg" alt="">
							<div class="caption text-center">
								<p>This is GPS</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>