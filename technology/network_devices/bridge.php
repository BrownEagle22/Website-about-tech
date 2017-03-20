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
						<li class="side-menu-item"><a href="switch.php">How switch works</a></li>
						<li class="side-menu-item active"><a href="bridge.php">How bridges works</a></li>
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
				<h1 class="text-center">How does bridge works?</h1>
				
				<img src="../../images/network_devices/bridge/bridge1.png" alt="" class="left-side-image">
				A network bridge helps to join two otherwise separate computer networks together to enable communication between them. Bridge devices are used with local area networks (LANs) for extending their reach to cover larger physical areas. <br><br>

				Bridge devices inspect incoming network traffic and determine whether to forward or discard it according to its intended destination. An Ethernet bridge, for example, inspects each incoming Ethernet frame - including the source and destination MAC addresses, and sometimes the frame size - in making individual forwarding decisions. <br><br>

				 Bridge devices operate at the data link layer (Layer 2) of the OSI model. <br><br>
				 <h3 class="text-center"><strong>Types of Network Bridges</strong></h3>
				

				Several different kinds of bridge devices exist, each designed for specific kinds of networks including
				<ul>
					<li>Wireless bridges - support Wi-Fi wireless access points</li>
					<li>Wi-Fi Ethernet bridges - allows connecting Ethernet clients and interfacing them to a local Wi-Fi network, useful for older network devices that lack Wi-Fi capability</li>
				</ul>

				<h3 class="text-center"><strong>Wireless Bridging</strong></h3>
				

				Bridging is especially popular on Wi-Fi computer networks. In Wi-Fi, wireless bridging requires access points communicate with each other in a special mode that supports the traffic needing to flow between them. Two access points that support wireless bridging mode work in pairs. Each continues to support their own local networks of connected clients while additionally communicating with the other to handle bridging traffic. <br><br>

				Network professionals sometimes use the term "BSS" - Basic Service Set - to refer to an access point and its local clients. <br><br>

				 Wireless bridging joins two BSS networks together. <br><br>

				Bridging mode can be activated on an access point through an administrative setting or sometimes a physical switch on the unit. Not all access points support wireless bridging mode; consult the manufacturer's documentation to determine whether a given model supports this feature. <br><br>

				<h3 class="text-center"><strong>Bridges vs. Repeaters</strong></h3>

				Bridge and network repeater devices share a similar physical appearance; sometimes, a single unit performs both functions. Unlike bridges, however, repeaters do not perform any traffic filtering and do not join two networks together but instead pass along all traffic they receive. Repeaters serve primarily to regenerate traffic signals so that a single network can reach longer physical distances. <br><br>

				<h3 class="text-center"><strong>Bridges vs. Switches and Routers</strong></h3>
				

				In wired computer networks, bridges serve a similar function as network switches. Traditional wired bridges support one incoming and one outgoing network connection (accessible through a hardware port), whereas switches usually offer four or more hardware ports. Switches are sometimes called multi-port bridges for this reason. <br><br>

				Likewise, bridges lack the intelligence of network routers: Bridges do not understand the concept of remote networks and cannot redirect messages to different locations dynamically but instead support only one outside interface.
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/7nTgQQbF9zo" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
    <?php
        $template->showFooter();
    ?>
</body>
</html>