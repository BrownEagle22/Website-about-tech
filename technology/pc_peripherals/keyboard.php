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
						<li class="side-menu-item"><a href="mouse.php">How mouse works</a></li>
						<li class="side-menu-item active"><a href="keyboard.php">How keyboard works</a></li>
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
				<h1 class="text-center">How does keyboard works?</h1>
				
				<img src="../../images/pc_peripherals/keyboard/keyboard1.jpg" alt="" class="left-side-image">
				Tap tap tap! Tap tap tap! That's the sound of someone thinking aloud in the 21st century, which typically means banging out words in a blog or an email or word-processing an essay or a forum post. Computer keyboards are generally quicker to use than old-fashioned typewriter keyboards, though they're still no match for dictating your documents with voice recognition software. Have you ever stopped to wonder what your keyboard's like inside? You might be surprised to find it's just a load of electrical switches. Let's take a closer look! <br><br>

				<div class="photo-text">
					Photo: A typical low-cost computer keyboard. Each key is nothing more than a switch: it closes an electrical circuit when you press it down and opens the circuit when you release it again.
				</div>
				
				<h3 class="text-center"><strong>A word of warning!</strong></h3>
				You've heard me say this before. Taking things to bits is a brilliant way to learn how they work but, for a whole bunch of reasons, it's often dangerous, difficult, or ill-advised. In the case of computer keyboards, there's not a lot of danger, but there are a couple of hundred tiny pieces that fall out very easily. If you drop the keyboard while you're messing about with it, expect to find yourself taking at least a couple of hours to put it all back together again. You have been warned!

				<h3 class="text-center"><strong>1. What's under the keys?</strong></h3>
				<img src="../../images/pc_peripherals/keyboard/keyboard2.jpg" alt="" class="middle-image">
				Pull a key off the keyboard and you can see roughly how it works. There's a little hole in the plastic base and the keyboard has a long round bar the same shape. When you press the key, the bar pushes down through the hole to touch the contact layers below. Inside the hole, there's a little tiny piece of rubber (you can't see it in this photo) that stops the key moving down and pushes it back up when you release it. This is what gives the spring to the keys.
				
				<h3 class="text-center"><strong>2. What's under the keyboard?</strong></h3>
				<img src="../../images/pc_peripherals/keyboard/keyboard3.jpg" alt="" class="middle-image">
				Take off the keyboard's bottom panel and you can see how it all works from beneath. You can see the transparent plastic contact layers that detect key presses and (through those layers) you can see the round bars poking the keys down from above. The green rectangle at the top contains three small LEDs that activate the indicator lights for "Num lock", "Caps lock", and "Scroll lock". Notice also the cable running along the inside of the case at the top of the keyboard, which carries electrical signals from the keyboard to your computer's USB port (or PS/2 port on older machines).

				<h3 class="text-center"><strong>3. How do the keys press down?</strong></h3>
				<img src="../../images/pc_peripherals/keyboard/keyboard4.jpg" alt="" class="middle-image">
				Peel back the electrical contact layers and you can see the bottom of the keys and where they press down. Balancing on my fingertip, you can see one of the little rubber pieces that makes the keys bounce up and down. Notice the pattern of electrical tracks on the contact layers. In this photo, we are looking down through the bottom of the keyboard (so the keys are underneath).

				<h3 class="text-center"><strong>4. How do the contact layers work?</strong></h3>
				<img src="../../images/pc_peripherals/keyboard/keyboard5.jpg" alt="" class="middle-image">
				This is the magic part of a keyboard. There are three separate layers of plastic that work together to detect your key presses. Two of them are covered in electrically conducting metal tracks and there's an insulating layer between them with holes in it. The dots you can see are places where the keys press the two conducting layers together. The lines are electrical connections that allow tiny electric currents to flow when the layers are pressed tight to one another by a key moving down from above. <br><br>

				In the photo below, you can see a closeup of the underside of one key—and, if you look closely, just about see how it works. There's one set of electrical connections on the lower sheet of plastic, printed in light gray. The other set is on the upper sheet of plastic and printed in dark gray. The two sheets are kept apart by a clear plastic layer except at the holes, which is where the keys push down to make the two sheets touch.
				<img src="../../images/pc_peripherals/keyboard/keyboard6.jpg" alt="" class="middle-image">
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/chSzoovWtzU" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>