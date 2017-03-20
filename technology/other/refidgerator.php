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
						<li class="side-menu-item active"><a href="refidgerator.php">How refrigerator works</a></li>
						<li class="side-menu-item"><a href="gps.php">How gps works</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="col-md-9">
			<div class="row article-text">
				<h1 class="text-center">How does refrigerator works?</h1>
				<img src="../../images/other/refrigerator/refrigerator1.gif" alt="" class="right-side-image">
			 	In the summertime, have you ever gotten out of a swimming pool and then felt very cold standing in the sun? That's because the water on your skin is evaporating. The air carries off the water vapor, and with it some of the heat is being taken away from your skin. <br><br>

				This is similar to what happens inside older refrigerators. Instead of water, though, the refrigerator uses chemicals to do the cooling. <br><br>

				There are two things that need to be known for refrigeration.
				<ol>
					<li>A gas cools on expansion.</li>
					<li>When you have two things that are different temperatures that touch or are near each other, the hotter surface cools and the colder surface warms up. This is a law of physics called the Second Law of Thermodynamics. </li>
				</ol>
				

				<h3 class="text-center"><strong>Old Refrigerators</strong></h3>
				
				If you look at the back or bottom of an older refrigerator, you'll see a long thin tube that loops back and forth. This tube is connected to a pump, which is powered by an electric motor. <br><br>

				Inside the tube is Freon, a type of gas. Freon is the brand name of the gas. This gas, chemically is called Chloro-Flouro-Carbon or CFC. This gas was found to hurt the environment if it leaks from refrigerators. So now, other chemicals are used in a slightly different process (see next section below).<br><br>

				CFC starts out as a liquid. The pump pushes the CFC through a lot of coils in the freezer area. There the chemical turns to a vapor. When it does, it soaks up some of the heat that may be in the freezer compartment. As it does this, the coils get colder and the freezer begins to get colder.<br><br>

				In the regular part of your refrigerator, there are fewer coils and a larger space. So, less heat is soaked up by the coils and the CFC vapor.<br><br>

				The pump then sucks the CFC as a vapor and forces it through thinner pipes which are on the outside of the refrigerator. By compressing it, the CFC turns back into a liquid and heat is given off and is absorbed by the air around it. That's why it might be a little warmer behind or under your refrigerator.<br><br>

				Once the CFC passes through the outside coils, the liquid is ready to go back through the freezer and refrigerator over and over.

				<h3 class="text-center"><strong>Today's Refrigerators</strong></h3>

				Modern refrigerators don't use CFC because CFCs are harmful to the atmosphere if released. Instead they use another type of gas called HFC-134a, also called tetrafluoroethane. HFC turns into a liquid when it is cooled to -15.9 degrees Fahrenheit (-26.6 degrees Celsius). <br><br>

				A motor and compressor squeezes the HFC. When it is compressed, a gas heats up as it is pressurized. When you pass the compressed gas through the coils on the back or bottom of a modern refrigerator, the warmer gas can lose its heat to the air in the room.<br><br>

				Remember the law of thermodynamics.<br><br>

				As it cools, the HFC can change into a liquid because it is under a high pressure.<br><br>

				The liquid flows through what's called an expansion valve, a tiny small hole that the liquid has to squeeze through. Between the valve and the compressor, there is a low-pressure area because the compressor is pulling the ammonia gas out of that side.<br><br>

				When the liquid HFC hits a low pressure area it boils and changes into a gas. This is called vaporizing.<br><br>

				The coils then go through the freezer and regular part of the refrigerator where the colder liquid in the coil pulls the heat out of the compartments. This makes the inside of the freezer and entire refrigerator cold.<br><br>

				The compressor sucks up the cold gas, and the gas goes back through the same process over and over.

				<h3 class="text-center"><strong>How Does the Temperature Stay the Same Inside?</strong></h3>

				A device called a thermocouple (it's basically a thermometer) can sense when the temperature in the refrigerator is as cold as you want it to be. When it reaches that temperature, the device shuts off the electricity to the compressor.<br><br>

				But the refrigerator is not completely sealed. There are places, like around the doors and where the pipes go through, that can leak a little bit.<br><br>

				So when the cold from inside the refrigerator starts to leak out and the heat leaks in, the thermocouple turns the compressor back on to cool the refrigerator off again.<br><br>

				That's why you'll hear your refrigerator compressor motor coming on, running for a little while and then turning itself off.<br><br>

				Today's refrigerators, however, are very energy efficient. Ones sold today use about one-tenth the amount of electricity of ones that were built 20 years ago. So, if you have an old, old refrigerator, it's better to buy a new one because you'll save money (and energy) over a long period of time. 
			</div>
			<div class="row text-center video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/h5wQoA15OnQ" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
    <?php
        $template->showFooter();
    ?>
</body>
</html>