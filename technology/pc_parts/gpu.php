<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../../lib/jquery-3.1.1.js"></script>
	<script src="../../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../style.css">
	<link rel="shortcut icon" type="image/png" href="../../images/icon.png"/>
	<title>How Does Tech Works</title>
    <?php
        include ("../../template.php");
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
				<li><a href="../../technology.php">Introduction</a></li>

				<li>
					<a href="#pc-parts" data-toggle="collapse">
						Computer parts
						<div class="caret-container"><span class="caret"></span></div>
					</a>
					<ul class="nav nav-pills nav-stacked collapse in" id="pc-parts">
						<li class="side-menu-item"><a href="cpu.php">How CPU works</a></li>
						<li class="side-menu-item"><a href="ram.php">How RAM works</a></li>
						<li class="side-menu-item"><a href="hdd.php">How HDD works</a></li>
						<li class="side-menu-item active"><a href="gpu.php">How GPU works</a></li>
					</ul>
				</li>

				<li>
					<a href="#pc-peripherals" data-toggle="collapse">
						Computer peripherals
						<div class="caret-container"><span class="caret"></span></div>
					</a>
					<ul class="nav nav-pills nav-stacked collapse" id="pc-peripherals">
						<li class="side-menu-item"><a href="../pc_peripherals/mouse.php">How optical mouse works</a></li>
						<li class="side-menu-item"><a href="../pc_peripherals/keyboard.php">How keyboard works</a></li>
						<li class="side-menu-item"><a href="../pc_peripherals/headphones.php">How headphones works</a></li>
						<li class="side-menu-item"><a href="../pc_peripherals/inkjet_printer.php">How inkjet printer works</a></li>
						<li class="side-menu-item"><a href="../pc_peripherals/laser_printer.php">How laser printer works</a></li>
					</ul>
				</li>

				<li>
					<a href="#network" data-toggle="collapse">
						Network devices
						<div class="caret-container"><span class="caret"></span></div>
					</a>
					<ul class="nav nav-pills nav-stacked collapse" id="network">
						<li class="side-menu-item"><a href="../network_devices/router.php">How router works</a></li>
						<li class="side-menu-item"><a href="../network_devices/switch.php">How switch works</a></li>
						<li class="side-menu-item"><a href="../network_devices/bridge.php">How bridges works</a></li>
					</ul>
				</li>

				<li>
					<a href="#other" data-toggle="collapse">
						Other
						<div class="caret-container"><span class="caret"></span></div>
					</a>
					<ul class="nav nav-pills nav-stacked collapse" id="other">
						<li class="side-menu-item"><a href="../other/refidgerator.php">How refrigerator works</a></li>
						<li class="side-menu-item"><a href="../other/gps.php">How gps works</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="col-md-9">
			<div class="row article-text">
				<h1 class="text-center">How does GPU works?</h1>
				
				<img class="left-side-image" src="../../images/pc_parts/gpu_images/gpu1.jpg" alt="">
				The images you see on your monitor are made of tiny dots called pixels. At most common resolution settings, a screen displays over a million pixels, and the computer has to decide what to do with every one in order to create an image. To do this, it needs a translator -- something to take binary data from the CPU and turn it into a picture you can see. Unless a computer has graphics capability built into the motherboard, that translation takes place on the graphics card. <br><br>

				A graphics card's job is complex, but its principles and components are easy to understand. In this article, we will look at the basic parts of a video card and what they do. We'll also examine the factors that work together to make a fast, efficient graphics card. <br><br>

				Think of a computer as a company with its own art department. When people in the company want a piece of artwork, they send a request to the art department. The art department decides how to create the image and then puts it on paper. The end result is that someone's idea becomes an actual, viewable picture. <br><br>

				A graphics card works along the same principles. The CPU, working in conjunction with software applications, sends information about the image to the graphics card. The graphics card decides how to use the pixels on the screen to create the image. It then sends that information to the monitor through a cable. <br><br>

				Creating an image out of binary data is a demanding process. To make a 3-D image, the graphics card first creates a wire frame out of straight lines. Then, it rasterizes the image (fills in the remaining pixels). It also adds lighting, texture and color. For fast-paced games, the computer has to go through this process about sixty times per second. Without a graphics card to perform the necessary calculations, the workload would be too much for the computer to handle. <br><br>

				The graphics card accomplishes this task using four main components:
				<ul>
					<li>A motherboard connection for data and power</li>
					<li>A processor to decide what to do with each pixel on the screen</li>
					<li>Memory to hold information about each pixel and to temporarily store completed pictures</li>
					<li>A monitor connection so you can see the final result</li>
				</ul>
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/0pbPqWaDuVY" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>