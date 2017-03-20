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
						<li class="side-menu-item active"><a href="router.php">How router works</a></li>
						<li class="side-menu-item"><a href="switch.php">How switch works</a></li>
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
				<h1 class="text-center">How does router works?</h1>
				
				<img src="../../images/network_devices/router/router1.gif" alt="" class="left-side-image">
				Lately, the Technology Explained articles have talked about the Internet and communications in general. This article will add to that series by explaining a very important piece of equipment – the router. <br><br>

				In order for a computer to connect to more than one other computer, you need a router or a hub. Two very different pieces of equipment that perform somewhat similar jobs. We’ll focus on the router since you very well may have one in your house. <br><br>

				<i>Let me take a moment to explain to the more technically inclined that I understand that there are such things as token ring networks that don’t require a router or a hub. Yet, our average Internet user isn’t going to employ a token ring, so leave that alone, please.</i> <br><br>

				Many of you will have wireless routers, a few of you may have wired routers. How the information gets to and from the router isn’t that important to this discussion. What is important is how does a router work – what happens inside the router with all that data coursing through it. To keep it simple, I’m going to use a 3 computer network to explain the routing principles. <br><br>

				So, let’s say you have three computers in your home and a connection to the Internet. This will give us a network that looks like such:
				<img src="../../images/network_devices/router/router2.png" alt="" class="middle-image">

				In the middle of that, is the wireless router. I know you knew that, but it had to be said. Wirelessly attached to it are a laptop, a PC, and a Mac (just for you Jackson!). Actually, the Mac is in there to show that the computers don’t necessarily need to be the same kind or platform. One might be sending up a file to work, one might be downloading something from YouTube and one is reading MakeUseOf.com – of course. All this information is coming down from, and up to, the Internet. <br><br>

				Believe it or not, the router can only talk to one of these things at a time! The process I’m about to talk about just happens so fast that it seems to happen all at once. <br><br>

				Let’s say that the Mac is uploading a file to work, the laptop is watching YouTube and the PC is surfing MakeUseOf.com. <br><br>

				Each communication happens in small packets of data. You might recall this from the How the Internet Works article I did awhile back. The IP address in that article was the important thing that allowed packets to find their way to your computer. Here’s a packet:
				<img src="../../images/network_devices/router/router3.png" alt="" class="middle-image">

				The important parts, for this article, are the Source Address and the Destination Address. These will be Internet Protocol (IP) addresses. <br><br>

				However, if you are using a router, your computer’s IP address is going to begin with either 198.168.0 or 10.0.0. This is because the powers-that-be decided that those IP address would be reserved for local network use. Like in a home network. <br><br>

				When the packet comes back from that server somewhere out on the Internet, the Destination Address IP is now your external IP and the Source Address IP is now the IP address of the server sending you a packet. (Note: that is the IP address of Telus.com – not my home IP address.) <br><br>

				Think of it like a letter. You send a friend a letter and the return address is yours, and the send-to address is theirs. They write a letter back and the return address is theirs and the send-to address is yours. See how that works? We should write more letters. <br><br>

				Well, the router looks at the Source Address IP of the incoming packet and looks it up in the table as a former Destination Address IP. When it finds it, the router says, “Aha! Guy’s computer sent a packet to that IP address. His computer must be waiting for a reply! Here’s Guy’s local IP address so I’ll pull out the external IP address, pop his local IP address in and send it on its way!” That’ll do router, that’ll do. <br><br>

				You can imagine, with how many thousands of packets travel in and out of your home every minute, how fast this sorting process has to be! It happens so fast, you never even notice the fact that at one moment the router is talking to the Mac, then the laptop, then maybe the Mac again, and then the PC. Miracles everywhere – just stop and notice. <br><br>

				I hope you enjoyed this article on how a router works, and now have a better appreciation of what’s going on in that silly box of electronics next to your modem. If there are any other technologies you’d like me, or our other great writers, to break down for you, I’d be glad to hear about it in the comments!
			</div>
			<div class="row video text-center">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/f9M6P9IVn7k" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>