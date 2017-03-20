<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="./lib/jquery-3.1.1.js"></script>
	<script src="./lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./style.css">
	<link rel="shortcut icon" type="image/png" href="./images/icon.png"/>
	<title>How Does Tech Works</title>
    <?php
        include ("template.php");
        $template = new Template();
    ?>
</head>
<body>
    <?php
        $template->showHeader("tech");
    ?>
	
	<div class="container-fluid">
		<div class="col-md-3">
			<h3 class="text-center"><strong>Technology</strong></h3>
			<ul class="nav nav-pills nav-stacked" id="side-menu">
				<li><a href="#">Introduction</a></li>

				<li>
					<a href="#pc-parts" data-toggle="collapse">
						Computer parts
						<div class="caret-container"><span class="caret"></span></div>
					</a>
					<ul class="nav nav-pills nav-stacked collapse" id="pc-parts">
						<li class="side-menu-item"><a href="technology/pc_parts/cpu.php">How CPU works</a></li>
						<li class="side-menu-item"><a href="technology/pc_parts/ram.php">How RAM works</a></li>
						<li class="side-menu-item"><a href="technology/pc_parts/hdd.php">How HDD works</a></li>
						<li class="side-menu-item"><a href="technology/pc_parts/gpu.php">How GPU works</a></li>
					</ul>
				</li>

				<li>
					<a href="#pc-peripherals" data-toggle="collapse">
						Computer peripherals
						<div class="caret-container"><span class="caret"></span></div>
					</a>
					<ul class="nav nav-pills nav-stacked collapse" id="pc-peripherals">
						<li class="side-menu-item"><a href="technology/pc_peripherals/mouse.php">How optical mouse works</a></li>
						<li class="side-menu-item"><a href="technology/pc_peripherals/keyboard.php">How keyboard works</a></li>
						<li class="side-menu-item"><a href="technology/pc_peripherals/headphones.php">How headphones works</a></li>
						<li class="side-menu-item"><a href="technology/pc_peripherals/inkjet_printer.php">How inkjet printer works</a></li>
						<li class="side-menu-item"><a href="technology/pc_peripherals/laser_printer.php">How laser printer works</a></li>
					</ul>
				</li>

				<li>
					<a href="#network" data-toggle="collapse">
						Network devices
						<div class="caret-container"><span class="caret"></span></div>
					</a>
					<ul class="nav nav-pills nav-stacked collapse" id="network">
						<li class="side-menu-item"><a href="technology/network_devices/router.php">How router works</a></li>
						<li class="side-menu-item"><a href="technology/network_devices/switch.php">How switch works</a></li>
						<li class="side-menu-item"><a href="technology/network_devices/bridge.php">How bridges works</a></li>
					</ul>
				</li>

				<li>
					<a href="#other" data-toggle="collapse">
						Other
						<div class="caret-container"><span class="caret"></span></div>
					</a>
					<ul class="nav nav-pills nav-stacked collapse" id="other">
						<li class="side-menu-item"><a href="technology/other/refidgerator.php">How refrigerator works</a></li>
						<li class="side-menu-item"><a href="technology/other/gps.php">How gps works</a></li>
						<li class="side-menu-item"><a href="./technology/other/calling.html">How calling works</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="col-md-9">
			<div class="row article-text">
				<h1 class="text-center">Introduction</h1>
				<strong>What Is Technology?</strong> Technology is a body of knowledge devoted to creating tools, processing actions and extracting of  materials. The term ‘Technology” is wide and everyone has their own way of understanding the meaning of technology. We use technology to accomplish various tasks in our daily lives, in brief; we can describe technology as products, processes or organizations. We use technology to extend our abilities, and that makes people as the most important part of any technological system. <br><br>

				Technology is also an application of science to solve a problem. But what you have to know is that technology and science are different subjects which work hand-in-hand to accomplish a specific task or solve a particular problem. <br><br>

				We apply technology in almost everything we do in our lives, we use technology at work, we use it to , extract materials , we use technology for communication, transportation, learning, manufacturing, creating artifacts, securing data, scaling businesses and so much more.  Technology is human knowledge which involves tools, materials and systems. The application of technology results in artifacts or products. If technology is well applied, it can benefit humans, but if it is wrongly applied, it can cause harm to human beings. <br><br>

				Many businesses are using technology to stay competitive, they create new products and services using technology, and they also use technology to deliver those products and services to their customers on time. A good example is, mobile phones companies like Apple & Samsung, these two electronics companies, use high end technology to create new smartphones and other electronic devices to stay competitive. This competitive edge is gained through employing advanced technology.
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>