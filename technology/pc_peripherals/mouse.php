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
					<ul class="nav nav-pills nav-stacked collapse in" id="pc-peripherals">
						<li class="side-menu-item active"><a href="mouse.php">How optical mouse works</a></li>
						<li class="side-menu-item"><a href="keyboard.php">How keyboard works</a></li>
						<li class="side-menu-item"><a href="headphones.php">How headphones works</a></li>
						<li class="side-menu-item"><a href="inkjet_printer.php">How inkjet printer works</a></li>
						<li class="side-menu-item"><a href="laser_printer.php">How laser printer works</a></li>
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
				<h1 class="text-center">How does optical mouse works?</h1>
				
				<img src="../../images/pc_peripherals/optical_mouse/mouse1.jpg" alt="" class="left-side-image">
				An optical mouse works in a completely different way. It shines a bright light down onto your desk from an LED (light-emitting diode) mounted on the bottom of the mouse. The light bounces straight back up off the desk into a photocell (photoelectric cell), also mounted under the mouse, a short distance from the LED. The photocell has a lens in front of it that magnifies the reflected light, so the mouse can respond more precisely to your hand movements. As you push the mouse around your desk, the pattern of reflected light changes, and the chip inside the mouse uses this to figure out how you're moving your hand. <br><br>

				<div class="photo-text">Photo: An optical mouse seen from underneath. Note how the rubber ball you'd find in a ball-wheel mouse has been replaced by the photocell and LED.</div> <br><br>

				Some optical mice have two LEDs. The first one shines light down onto the desk. The light from that is picked up by the photocell. The second LED lights up a red plastic strip along the back of the mouse so you can see it's working. Most optical mice also have a wheel at the front so you can scroll pages on-screen much faster. You can click the wheel too, so it functions like the third (center) button on a conventional ball mouse. <br><br>

				<h3 class="text-center"><strong>Inside an optical computer mouse</strong></h3>
				An optical mouse is much more hi-tech than a ball mouse. Where a ball mouse has quite a few moving parts, an optical mouse is almost entirely electronic (it has almost no moving parts). <br><br>

				Here's the inside of a typical optical mouse and a few of the main components. The most interesting bits are in the center (where the LED light shines down onto your desk) and at the front (where button presses are detected by switches):
				

				<ol>
					<li>
						<img src="../../images/pc_peripherals/optical_mouse/mouse2.jpg" alt="" class="right-side-image">
						An LED at the back generates red light and shines it horizontally, from the back of the mouse toward the front (from the left to the right of this photo).
					</li>
					<li>A plastic light guide channels the light from the LED at an angle, down onto the desk.</li>
					<li>A light-detector chip measures light reflected back up from the desk, converting the analog movements of your hand into digital signals that can be sent to your computer.</li>
					<li>The scroll wheel at the front of the mouse is mounted on a switch mechanism that detects both how much it's rotated and whether you've pressed it (it functions like the central button of a conventional mouse). Rotations of the scroll wheel can be detected in a variety of different ways. Some mice use potentiometers (broadly, variable resistors), similar to the volume control on a radio but able to turn around multiple times. Others use various kinds of rotary switches or optical (rotary) encoders to convert analog wheel movements to digital signals.</li>
					<li>A microswitch detects when you press the right mouse button. There's an identical switch on the other side to detect the left mouse button.</li>
					<li>The USB cable connection carries digital information from the mouse to your computer.</li>
				</ol>
				
				<img src="../../images/pc_peripherals/optical_mouse/mouse3.jpg" alt="" class="middle-image">
				<div class="photo-text">
					Photo: The light-guide (just the right of the black chip) carries light from the LED down to your desktop. It's a bit like a prism, but it's made from lightweight plastic and there's a small lens mounted at the very end where the guide faces the LED.
				</div>
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/xEGrtR2wnTY" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
    <?php
        $template->showFooter();
    ?>
</body>
</html>