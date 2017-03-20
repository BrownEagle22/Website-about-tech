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
					<ul class="nav nav-pills nav-stacked collapse in" id="network">
						<li class="side-menu-item"><a href="router.php">How router works</a></li>
						<li class="side-menu-item active"><a href="switch.php">How switch works</a></li>
						<li class="side-menu-item"><a href="bridge.php">How bridges works</a></li>
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
				<h1 class="text-center">How does switch works?</h1>
				
				<img src="../../images/network_devices/switch/switch1.jpg" alt="" class="left-side-image">

				Switches are another fundamental part of many networks because they speed things up. Switches allow different nodes (a network connection point, typically a computer) of a network to communicate directly with one another in a smooth and efficient manner. <br><br>

				There are many different types of switches and networks. Switches that provide a separate connection for each node in a company's internal network are called LAN switches. Essentially, a LAN switch creates a series of instant networks that contain only the two devices communicating with each other at that particular moment. In this article, we will focus on Ethernet networks that use LAN switches. You will learn what a LAN switch is and how transparent bridging works, as well as about VLANs, trunking and spanning trees. <br><br>

				A switch begins learning the local MAC addresses as soon as it is connected to other devices or to a network. This learning capability makes switches easy to use on a network. <br><br>

				The switch learning process works like this:

				<ol>
					<li>As a PC or other networked device sends a frame to another device through the switch, the switch captures the source MAC address of the frame and the interface that received it.</li>
					<li>The switch confirms or adds the MAC address and the port to the lookup table.</li>
				</ol>
				<br><br>

				A switch also keeps a timer for each of the MAC address entries in its lookup table. By default, many vendors set this time to hold an address entry to 300 seconds (5 minutes). This can be changed if you want. The timer lets the switch get rid of old entries to keep the lookup process short and fast. <br><br>

				The aging timer also helps when a device moves to another switch port. In that case, the address would appear in both places in the lookup tables. When a frame arrives headed for that address, the switch can compare the aging timer for both entries and select the most recent if the entry has not already timed out. <br><br>

				Most often, the initial communication to a switch is an Address Resolution Protocol (ARP) request. The inbound ARP contains the sender’s MAC address, and the switch adds that address to its lookup table. The ARP Response contains the MAC address of the intended target. The ARP response also updates the switch’s lookup table.
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/1YT7hsfYxz8" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>