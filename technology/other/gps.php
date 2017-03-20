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
					<ul class="nav nav-pills nav-stacked collapse" id="pc-parts">
						<li class="side-menu-item"><a href="../pc_parts/cpu.php">How CPU works</a></li>
						<li class="side-menu-item"><a href="../pc_parts/ram.php">How RAM works</a></li>
						<li class="side-menu-item"><a href="../pc_parts/hdd.php">How HDD works</a></li>
						<li class="side-menu-item"><a href="../pc_parts/gpu.php">How GPU works</a></li>
					</ul>
				</li>

				<li>
					<a href="#pc-peripherals" data-toggle="collapse">
						Computer peripherals
						<div class="caret-container"><span class="caret"></span></div>
					</a>
					<ul class="nav nav-pills nav-stacked collapse" id="pc-peripherals">
						<li class="side-menu-item"><a href="../pc_peripherals/mouse.php">How mouse works</a></li>
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
					<ul class="nav nav-pills nav-stacked collapse in" id="other">
						<li class="side-menu-item"><a href="refidgerator.php">How refrigerator works</a></li>
						<li class="side-menu-item active"><a href="gps.php">How gps works</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="col-md-9">
			<div class="row article-text">
				<h1 class="text-center">How does GPS works?</h1>
				
				The Global Positioning System (GPS) is a network of about 30 satellites orbiting the Earth at an altitude of 20,000 km. The system was originally developed by the US government for military navigation but now anyone with a GPS device, be it a SatNav, mobile phone or handheld GPS unit, can receive the radio signals that the satellites broadcast. <br><br>

				Wherever you are on the planet, at least four GPS satellites are ‘visible’ at any time. Each one transmits information about its position and the current time at regular intervals. These signals, travelling at the speed of light, are intercepted by your GPS receiver, which calculates how far away each satellite is based on how long it took for the messages to arrive.<br><br>


				Once it has information on how far away at least three satellites are, your GPS receiver can pinpoint your location using a process called trilateration.

				<h3 class="text-center"><strong>Trilateration</strong></h3>

				<img src="../../images/other/gps/gps1.jpg" alt="" class="left-side-image">
				Imagine you are standing somewhere on Earth with three satellites in the sky above you. If you know how far away you are from satellite A, then you know you must be located somewhere on the red circle. If you do the same for satellites B and C, you can work out your location by seeing where the three circles intersect. This is just what your GPS receiver does, although it uses overlapping spheres rather than circles. <br><br>

				The more satellites there are above the horizon the more accurately your GPS unit can determine where you are. <br><br><br>

				<h3 class="text-center"><strong>GPS and Relativity</strong></h3>

				GPS satellites have atomic clocks on board to keep accurate time. General and Special Relativity however predict that differences will appear between these clocks and an identical clock on Earth.<br><br>

				General Relativity predicts that time will appear to run slower under stronger gravitational pull – the clocks on board the satellites will therefore seem to run faster than a clock on Earth.<br><br>

				Furthermore, Special Relativity predicts that because the satellites’ clocks are moving relative to a clock on Earth, they will appear to run slower.<br><br>

				The whole GPS network has to make allowances for these effects –  proof that Relativity has a real impact.
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/IoRQiNFzT0k" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>