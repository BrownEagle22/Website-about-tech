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
						<li class="side-menu-item active"><a href="inkjet_printer.php">How inkjet printer works</a></li>
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
				<h1 class="text-center">How does inkjet printer works?</h1>
				
				<img src="../../images/pc_peripherals/inkjet_printer/inkjet_printer1" alt="" class="left-side-image">
				Twenty or thirty years ago, many people thought computers would make paper obsolete. The Xerox company, which pioneered photocopiers in the 1960s, became so worried that paper was going to disappear (and wipe out its lucrative business) that it set up a famous laboratory called PARC to develop computers instead. Ironically, even though Xerox PARC helped to invent the computers we all rely on today, paper stayed as popular as ever: people loved it and it was just good too an invention to replace. Now, thanks to the popularity of home computers and digital cameras, more people have printing machines in their homes than ever before—and most of them are inkjet printers. But how exactly do they work? <br><br>

				<div class="photo-text">
					Photo: A portable Canon inkjet printer from the late 1990s. This one also works as a scanner if you replace the print head with a scanner cartridge.
				</div>
				
				<h3 class="text-center"><strong>Printing with metal type</strong></h3>
				<img src="../../images/pc_peripherals/inkjet_printer/inkjet_printer2" alt="" class="right-side-image">

				Let's rewind a few hundred years, back to the 15th century. There was some small-scale printing with wooden blocks before this time, but printing only really took off when a German printer named Johannes Gutenberg (c.1400–1468) invented something called movable metal type around 1450. If you've ever seen a typewriter (a personal letter-writing machine popular until computers came along in the 1980s), you'll know all about metal type. A typewriter has a keyboard like the one on a computer, but instead of making letters appear one at a time on the screen, it prints them directly onto a piece of paper. Inside the typewriter, there are metal letters called pieces of type. As you press the keys, the pieces of type hammer against a ribbon (a spool of fabric) covered in ink and make an impression on the paper. Gutenberg was the pioneer of metal type. He made thousands of little metal letters (printed in relief and in reverse) and moved them around inside wooden blocks so he could print any page he liked—hence the name "movable metal type". <br><br>

				<div class="photo-text">
					Photo: The metal type in a relatively modern typewriter. The letters are backward so they print the right way round when they press an inked ribbon against the paper.
				</div>
				<br><br>
				Typewriters were based on Gutenberg's invention and took off in the 1860s after American journalist Christopher Latham Sholes (1819–1890) and his partners made the first really practical typing machine (dozens of other people had tried before). Although typewriters were a brilliant invention, they could make only one copy of a piece of information at a time. Because they printed directly onto the paper, typing could be slow and messy and mistakes were difficult to correct. When business computers started to become popular in the 1960s, many people became interested in using them as word processors: highly automated typewriters that allowed text to be typed onto a screen, edited and corrected until it was perfect, and only then printed out onto paper.

				<h3 class="text-center"><strong>Impact printing</strong></h3>

				Early computer printers borrowed heavily from typewriter technology, but it soon became obvious that better methods were needed for quicker and more efficient printing. Instead of using rows of metal levers to hammer letters against the page, as in a typewriter, computer printers (and electric typewriters, which were similar) started to use three other technologies. One of them was called a golf ball. The golf ball typewriter or printer has all the letters, numbers, and other characters it needs to print arranged on the surface of a metal ball. To print a word, the ball rotates at high speed until the right piece of type is facing the paper. Then it flips up and bashes the type against a ribbon, pressing the letter onto the page. Having done that, it spins round to the next letter... and so on. The second printing technology was called a daisy wheel, in which the type letters are arranged like petals around a central wheel. A bit like a golf ball, the daisy wheel rotates at high speed, stopping to press letters against the ribbon when they are in the correct position. <br><br>

				<img src="../../images/pc_peripherals/inkjet_printer/inkjet_printer3" alt="" class="left-side-image">

				A third printing technology, known as dot-matrix, was popular from the 1970s until about the early 1990s. In a dot-matrix printer, there is no metal type at all. Instead, letters are printed by a matrix (a square or rectangular grid) of several dozen metal needles that press against a ribbon in different patterns to make whichever letter, number, or other character is required. Dot-matrix printers produce a characteristic "dotty" print finish that you still sometimes see on bills, invoices, and railroad train or movie-theater tickets. <br><br>

				<div class="photo-text">
					Picture: Using a pattern of dots to create letter shapes is the basic idea of dot-matrix printing. Old-style dot-matrix printers typically did this with a five by seven or seven by seven square (matrix) of metal needles. With smaller needles and more of them, you can make better-looking characters—but the printout still tends to look a bit dotty on close inspection.
				</div>
				
				<h3 class="text-center"><strong>Inkjet printing</strong></h3>

				Inkjet printers were really an evolution of dot-matrix printers. Instead of metal needles, they use hundreds of tiny guns to fire dots of ink at the paper instead. The characters they print are still made up of dots, just like in a dot-matrix printer, but the dots are so very tiny that you cannot see them. Different types of inkjet printer fire the ink in various ways. In Canon printers, the ink is fired by heating it so it explodes toward the paper in bubbles. This is why Canon sells its printers under the brand name "Bubble Jet." Epson printers work a slightly different way. They use an effect called piezoelectricity. Tiny electric currents controlled by electronic circuits inside the printer make miniature crystals jiggle back and forth, firing ink in jets as they do so. You can think of inkjet printers very simply as a firing squad of nozzles rattling off millions of dots of ink at the paper every single second!
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/S_fMI-2Bgn0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>