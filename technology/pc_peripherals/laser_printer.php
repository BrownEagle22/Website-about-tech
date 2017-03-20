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
						<li class="side-menu-item"><a href="headphones.php">How headphones works</a></li>
						<li class="side-menu-item"><a href="inkjet_printer.php">How inkjet printer works</a></li>
						<li class="side-menu-item active"><a href="laser_printer.php">How laser printer works</a></li>
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
				<h1 class="text-center">How does laser printer works?</h1>
				<img src="../../images/pc_peripherals/laser_printer/laser_printer1.jpg" alt="" class="left-side-image">
				Have you ever tried writing with a beam of light? Sounds impossible, doesn't it, but it's exactly what a laser printer does when it makes a permanent copy of data (information) from your computer on a piece of paper. Thanks to sci-fi and spy movies, we tend to think of lasers as incredibly powerful light beams that can slice through chunks of metal or blast enemy spaceships into smithereens. But tiny lasers are useful too in a much more humdrum way: they read sounds and video clips off the discs in CD and DVD players and they're vital parts of most office computers printers. All set? Okay, let's take a closer look at how laser printers work! <br><br>

				<div class="photo-text">
					Photo: A compact laser printer doesn't look that different to an inkjet printer, but it puts ink on the page in a completely different way. An inkjet printer uses heat to squirt drops of wet ink from hot, syringe-like tubes, while a laser printer uses static electricity to transfer a dry ink powder called toner.
				</div>
				
				<h3 class="text-center"><strong>Laser printers are similar to photocopiers</strong></h3>

				<img src="../../images/pc_peripherals/laser_printer/laser_printer2.jpg" alt="" class="right-side-image">

				<div class="photo-text">
					Photo: Ink sticks to a laser printer's drum the way this balloon sticks to my pullover: using static electricity.
				</div>
				<br><br>

				Laser printers are a lot like photocopiers and use the same basic technology. Indeed, as we describe later in this article, the first laser printers were actually built from modified photocopiers. In a photocopier, a bright light is used to make an exact copy of a printed page. The light reflects off the page onto a light-sensitive drum; static electricity (the effect that makes a balloon stick to your clothes if you rub it a few times) makes ink particles stick to the drum; and the ink is then transferred to paper and "fused" to its surface by hot rollers. A laser printer works in almost exactly the same way, with one important difference: because there is no original page to copy, the laser has to write it out from scratch. <br><br>

				Imagine you're a computer packed full of data. The information you store is in electronic format: each piece of data is stored electronically by a microscopically small switching device called a transistor. The printer's job is to convert this electronic data back into words and pictures: in effect, to turn electricity into ink. With an inkjet printer, it's easy to see how that happens: ink guns, operated electrically, fire precise streams of ink at the page. With a laser printer, things are slightly more complex. The electronic data from your computer is used to control a laser beam—and it's the laser that gets the ink on the page, using static electricity in a similar way to a photocopier. <br><br>

				<h3 class="text-center"><strong>How a laser printer works</strong></h3>
				
				When you print something, your computer sends a vast stream of electronic data (typically a few megabytes or million characters) to your laser printer. An electronic circuit in the printer figures out what all this data means and what it needs to look like on the page. It makes a laser beam scan back and forth across a drum inside the printer, building up a pattern of static electricity. The static electricity attracts onto the page a kind of powdered ink called toner. Finally, as in a photocopier, a fuser unit bonds the toner to the paper. <br><br>

				<img src="../../images/pc_peripherals/laser_printer/laser_printer3" alt="" class="right-side-image">

			    <ol>
			    	<li>Millions of bytes (characters) of data stream into the printer from your computer.</li>
			    	<li>An electronic circuit in the printer (effectively, a small computer in its own right) figures out how to print this data so it looks correct on the page.</li>
			    	<li>The electronic circuit activates the corona wire. This is a high-voltage wire that gives a static electric charge to anything nearby.</li>
			    	<li>The corona wire charges up the photoreceptor drum so the drum gains a positive charge spread uniformly across its surface.</li>
			    	<li>At the same time, the circuit activates the laser to make it draw the image of the page onto the drum. The laser beam doesn't actually move: it bounces off a moving mirror that scans it over the drum. Where the laser beam hits the drum, it erases the positive charge that was there and creates an area of negative charge instead. Gradually, an image of the entire page builds up on the drum: where the page should be white, there are areas with a positive charge; where the page should be black, there are areas of negative charge.</li>
			    	<li>An ink roller touching the photoreceptor drum coats it with tiny particles of powdered ink (toner). The toner has been given a positive electrical charge, so it sticks to the parts of the photoreceptor drum that have a negative charge (remember that opposite electrical charges attract in the same way that opposite poles of a magnet attract). No ink is attracted to the parts of the drum that have a positive charge. An inked image of the page builds up on the drum.</li>
			    	<li>A sheet of paper from a hopper on the other side of the printer feeds up toward the drum. As it moves along, the paper is given a strong positive electrical charge by another corona wire.</li>
			    	<li>When the paper moves near the drum, its positive charge attracts the negatively charged toner particles away from the drum. The image is transferred from the drum onto the paper but, for the moment, the toner particles are just resting lightly on the paper's surface.</li>
			    	<li>The inked paper passes through two hot rollers (the fuser unit). The heat and pressure from the rollers fuse the toner particles permanently into the fibers of the paper.</li>
			    	<li>The printout emerges from the side of the copier. Thanks to the fuser unit, the paper is still warm. It's literally hot off the press!</li>
			    </ol>
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/WB0HnXcW8qQ" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>