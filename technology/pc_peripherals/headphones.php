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
						<li class="side-menu-item"><a href="keyboard.php">How keyboard works</a></li>
						<li class="side-menu-item active"><a href="headphones.php">How headphones works</a></li>
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
				<h1 class="text-center">How does Headphones works?</h1>
				<img src="../../images/pc_peripherals/headphones/headphones1.jpg" alt="" class="left-side-image">
				If you've ever been to a rock concert and heard music thumping out of giant loudspeakers, you'll know sound can pack a powerful punch. Sometimes, however, we want to enjoy music more quietly and intimately or in places where others don't want to hear what we're listening to. Trains and planes are noisy enough—just imagine the cacophony there would be if everyone sat with massive stereo systems in front of them! For times like this, headphones let us retreat quietly into our own imaginary worlds. Let's take a closer look at what's inside them and how they work! <br><br>

				<div class="photo-text">
					Photo: My open-backed Sennheiser HD-485 headphones. Most of what you see in this photo is cosmetic: it adds little or nothing to the quality of the sound you hear. But it's important to remember that headphones have to be comfortable to wear for a reasonable amount of time or they'll be a waste of your money. The softly padded earpieces and foam padding across the top of the headband make these very comfortable. The plastic they're made from is light enough not to press on your head, but strong and durable enough to withstand wear and tear. Another cool feature is the removable lead: there's a jack plug where the wire joins onto the body of the headphones, which you can easily remove and replace.
				</div>
				
				<h3 class="text-center"><strong>Headphones: miniature loudspeakers fixed to your ears</strong></h3>

				Headphones (which are often called "cans" by DJs and people who work in radio broadcasting) work in exactly the same way as speakers, so you might want to consult our article on loudspeakers if you're not sure how they use magnetism to turn electrical energy into sound. <br><br>

				<img src="../../images/pc_peripherals/headphones/headphones2.jpg" alt="" class="right-side-image">

				The biggest difference between loudspeakers and headphones is, of course, size. A loudspeaker needs to set all the air moving in a room so you can hear the sound it's making, but the speaker in a headphone only has to move the volume of air inside your ear canal. That's why it can be so much smaller and more discreet. <br><br>

				Large headphones are essentially just two loudspeakers mounted on a strap that clamps firmly over your head. Earbuds work the same way but, as you would expect, everything inside them (the magnet, the coil of wire, and the diaphragm cone that makes sound) is shrunk down to a much smaller size. <br><br>

				Speakers tend to be built into "enclosures" (as engineers call them—the rest of us call them "boxes") to amplify their sounds and keep them safe from damage. If you look closely, you'll see speaker enclosures usually have openings at the front or the back so air can move more freely in and out of them to generate decent sound. The same is true of headphones and earbuds, which come in two main types. As their name suggests, closed-back headphones are sealed at the back so (theoretically) no sound escapes (or leaks in from outside) while open-back headphones are open to the air at the back as well as the front. Many people find that open-back headphones sound better but much of the noise will leak into the room around you and annoy other people, while "ambient" noise from the room can easily penetrate open-back headphones and annoy you too. If that's a problem, you need closed-back headphones or noise-cancelling headphones, which make it easy to cut yourself off completely. <br><br>

				<div class="photo-text">
					Photo: A pair of earbud phones from an MP3 player. The metal gauze on the front is "acoustically transparent": it lets sound out without letting (too much) dirt and dust in. The backs of some earbuds are completely sealed to stop sound from escaping (so they're similar to closed-back headphones), though other earbuds do have small vent holes in them (making them equivalent to larger, open-backed headphones).
				</div>
				
				<h3 class="text-center"><strong>How earbuds work</strong></h3>

				Taking broken things apart is a great way to find out how they work. If you're a young person, ask an adult first to make sure what you want to dismantle is really safe.
				
				<ol>
					<li>
						Here's my broken earbud and I've popped the back off it. You can see how the wires run up through the main case to the coil inside. We need two wires to make a circuit: one carries the current into the coil from the stereo; the other carries it back again.
						<img src="../../images/pc_peripherals/headphones/headphones3.jpg" alt="" class="middle-image">
					</li>
					<li>
						Next, I've tipped the earbud over and popped the front cover off. The front cover is a plastic disc with holes in it to let the sound enter your ear. Just behind it there's a very small cone. It's hardly cone-shaped, though: it's a flattish, transparent disc made of very thin and flexible plastic, and it's quite crinkly and crackly when you move it. You can just see the tiny metal coil (colored red) attached to it.
						<img src="../../images/pc_peripherals/headphones/headphones4.jpg" alt="" class="middle-image">
					</li>
					<li>
						In summary, then, these are all the bits that make up your earbuds:
						<ul>
							<li>
								<img src="../../images/pc_peripherals/headphones/headphones5.jpg" alt="" class="right-side-image">
								Back case: holds everything together. The wires run up through a hole at the bottom.
							</li>
							<li>Front case: This is the part that faces into your ear. Sometimes it's covered with a little fabric pouch to keep it clean.</li>
							<li>Seal: This rubbery circle clips the front case to the back case, holding the two together.</li>
							<li>Wires: Carry signals from the stereo to the speaker.</li>
							<li>Magnet: The permanent magnet at the back of the speaker. This is the heaviest part of an earbud and makes up the vast majority of its weight.</li>
							<li>Coil: This becomes an electromagnet when electricity flows through it.</li>
							<li>Transparent plastic cone: This makes the sound when it moves.</li>
						</ul>
					</li>
				</ol>
		        
		        <h3 class="text-center"><strong>How bigger headphones work</strong></h3>

				As you might expect there's nothing radically different inside bigger headphones: they're just a scaled-up version of what you find inside earbuds. <br><br>

				As luck would have it, the arrival of my new Sennheiser headphones was followed quite quickly by the final collapse of my old pair. I could have repaired them, my friends, but in the interests of your curiosity, they've agreed to leave their insides to medical science! Let's see what we find when we open them up: <br><br>
				
				<ol>
					<li>
						This is one of the two earpieces from my old pair of open-backed headphones with the light foam cover and the cable removed. Note that "open-backed" is a bit of an understatement for what you see here: the headphones are almost completely open to the air and built around a kind of plastic spoke design. The diaphragm that makes the sound is in the center. The open spokes radiating outwards are there to make the headphone the right size to cover your ear, without making it too heavy or uncomfortable.
						<img src="../../images/pc_peripherals/headphones/headphones6.jpg" alt="" class="middle-image">
					</li>
					<li>
						Now I've popped out the central part that contains the loudspeaker:
						<img src="../../images/pc_peripherals/headphones/headphones7.jpg" alt="" class="middle-image">
					</li>
					<li>
						Break off the protective plastic "spokes" and you can see the transparent plastic cone/diaphragm behind. You can also just see some small holes (beige dots) behind it that let sound out of the back and allow the diaphragm to move back and forth more freely
						<img src="../../images/pc_peripherals/headphones/headphones8.jpg" alt="" class="middle-image">
					</li>
					<li>
						Now the painful part. Break open the diaphragm cone (it's much thicker plastic than the ones in earbuds) and you can see the coil (red band) fastened on to it and the permanent magnet (silver and gold) behind. The coil sits in the slot like a band running loosely around the outside of the magnet:
						<img src="../../images/pc_peripherals/headphones/headphones9.jpg" alt="" class="middle-image">
					</li>
					<li>
						Here's another shot of the diaphragm cone and the coil:
						<img src="../../images/pc_peripherals/headphones/headphones10.jpg" alt="" class="middle-image">
					</li>
				</ol>
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/_W2z-ikIgM0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>