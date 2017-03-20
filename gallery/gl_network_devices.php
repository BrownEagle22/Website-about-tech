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
				<li class="active"><a href="gl_network_devices.php">Network devices</a></li>
				<li><a href="gl_other.php">Other</a></li>
			</ul>
		</div>

		<div class="col-md-9">
			<div class="row text-center">
				<h1>Network devices</h1>

				<!--    bridge IMAGES      -->

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/network_devices/bridge/bridge1.png" target="_blank">
						<div class="thumbnail">
							<img src="../images/network_devices/bridge/bridge1.png" alt="">
							<div class="caption text-center">
								<p>This is bridge</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/network_devices/bridge/bridge2.jpg" target="_blank">
						<div class="thumbnail">
							<img src="../images/network_devices/bridge/bridge2.jpg" alt="">
							<div class="caption text-center">
								<p>This is bridge</p>
							</div>
						</div>
					</a>
				</div>

				<!--    router IMAGES      -->

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/network_devices/router/router1.gif" target="_blank">
						<div class="thumbnail">
							<img src="../images/network_devices/router/router1.gif" alt="">
							<div class="caption text-center">
								<p>This is router</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/network_devices/router/router9.png" target="_blank">
						<div class="thumbnail">
							<img src="../images/network_devices/router/router9.png" alt="">
							<div class="caption text-center">
								<p>This is router</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/network_devices/router/router10.jpg" target="_blank">
						<div class="thumbnail">
							<img src="../images/network_devices/router/router10.jpg" alt="">
							<div class="caption text-center">
								<p>This is router</p>
							</div>
						</div>
					</a>
				</div>

				<!--    switch IMAGES      -->

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/network_devices/switch/switch1.jpg" target="_blank">
						<div class="thumbnail">
							<img src="../images/network_devices/switch/switch1.jpg" alt="">
							<div class="caption text-center">
								<p>This is switch</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/network_devices/switch/switch2.png" target="_blank">
						<div class="thumbnail">
							<img src="../images/network_devices/switch/switch2.png" alt="">
							<div class="caption text-center">
								<p>This is switch</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12 gl-div">
					<a href="../images/network_devices/switch/switch3.png" target="_blank">
						<div class="thumbnail">
							<img src="../images/network_devices/switch/switch3.png" alt="">
							<div class="caption text-center">
								<p>This is switch</p>
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