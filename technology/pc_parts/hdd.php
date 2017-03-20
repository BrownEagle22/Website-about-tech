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
						<li class="side-menu-item active"><a href="hdd.php">How HDD works</a></li>
						<li class="side-menu-item"><a href="gpu.php">How GPU works</a></li>
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
				<h1 class="text-center">How does HDD works?</h1>
				<img class="left-side-image" src="../../images/pc_parts/hdd_images/hdd1.jpg" alt="">
				The average laptop in the shops for around $500 has somewhere in the region of 60GB of memory. You see that figure and think ‘wow – imagine all the movies, songs, images, files and documents I could save on that baby’, right? <br><br>

				But did you ever think about how it actually gets stored?<br><br>

				If you were to stack the equivalent capacity of CDs in front of you it would surely rise to eye-level. You can fit everything on those CDs onto that hard drive. Truly amazing for an invention that has its origins in the 1950’s and was first developed as a humble cassette tape. <br><br>

				<h3 class="text-center"><strong>How Does a Hard Drive Work – The Basics</strong></h3>
				<img class="right-side-image" src="../../images/pc_parts/hdd_images/hdd2.jpg" alt="">

				In order to fully understand a hard drive you have to know how one works physically. Basically, there are discs, one on top of the other spaced a few millimetres apart. These discs are called platters. Polished to a high mirror shine and incredibly smooth they can hold vast amounts of data.<br><br>

				Next we have the arm. This writes and reads data onto the disc. It stretches out over the platter and moves over it from centre to edge reading and writing data to the platter through its tiny heads which hover just over the platter. The arm, on the average domestic drives can oscillate around 50 times per second. On many high-spec machines and those used for complex calculations this figure can rise into the thousands.<br><br>

				Hard drives use magnetism to store information just like on old cassette tapes. For that reason, copper heads are used as they are easy to magnetise and demagnetise using electricity.
				
				<h3 class="text-center"><strong>Storage and Operation</strong></h3>
				<img class="middle-image" src="../../images/pc_parts/hdd_images/hdd3.jpg" alt="">

				When you save a file, the “˜write’ head on the arm writes the data onto the platter as it spins at high RPM often in the region of 4,000. However, it doesn’t just go anywhere as the computer must be able to locate the file later. It also must not interfere or indeed delete any other information already on the drive.<br><br>

				For this reason, platters are separated into different sectors and tracks. The tracks are the long circular divisions highlighted here in yellow. They are like “˜tracks’ on music records. Then we have the different sectors which are small sections of tracks. There are thousands of these from centre to edge of the platter. One is highlighted blue in the picture.

				<h3 class="text-center"><strong>In Operation</strong></h3>

				When you open a file, program or really anything on your PC, the hard drive must find it. So let’s say that you open an image. The CPU will tell the hard drive what you’re looking for. The hard drive will spin extremely fast and it will find the image in a nano-second. It will then “˜read’ the image and send it to the CPU. The time it takes to do this is called the “˜read time’. Then the CPU takes over and sends the image on its way to your screen.<br><br>

				Let’s say you edited the image. Well now those changes must be saved. When you click “˜Save‘, all of that information is shot to the CPU which in turn sorts it (processes it) and sends it to the hard drive for storage. The hard drive will spin up and the arm will use its “˜write‘ heads to overwrite the previous image with the new one. Job done.<br><br>

				That is what that buzzing disc in your computer gets up to all day. Now, as I do with most of my articles here on MUO I shall leave you with a friendly word of advice:<br><br>

				If you want to look inside to further understand how does hard drive work, do so with an old one. There are a few reasons for this.
				
				<ul>
					<li>Remember when you were a kid and you pulled apart that roll of film with all aunt Lucy’s wedding snaps on it? Well exposing a hard drive to light will damage it and render it as useless as that roll of film.</li>
					
					<li>Once you pop open that drive, plugs on the screws will snap to tell the manufacturer you have been poking around in there. By doing this, your warranty is void immediately. Many drives actually have this warning printed on the side.</li>
					
					<li>They’re expensive and carry a lot of important info so don’t just pop open the family PC to have a go at it. Pick up an old one on eBay.</li>
				</ul>
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/wteUW2sL7bc" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>