<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="./lib/jquery-3.1.1.js"></script>
	<script src="./lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/png" href="./images/icon.png"/>
	<title>How Does Tech Works</title>
    <?php
        include ("template.php");
        $template = new Template();
    ?>
</head>
<body>
    <?php
        $template->showHeader("home");
    ?>
	
	<div class="jumbotron">
		<img id="bg" src="./images/bg.jpg" alt="">
		<h2>
			"Technology is best when it brings people together." <br>
			<i><span class="author">- Matt Mullenweg</span></i>
		</h2>
	</div>
	
	<div class="container offer">
		<div class="row">
			<h1><strong>What we Offer</strong></h1>

			<div class="col-md-4 col-sm-4">
				<span class="glyphicon glyphicon-list-alt"></span>
				<h4>News blogs every week</h4>
			</div>
			<div class="col-md-4 col-sm-4">
				<span class="glyphicon glyphicon-wrench"></span>
				<h4 class="bold">Technical advices</h4>
			</div>
			<div class="col-md-4 col-sm-4">
				<span class="glyphicon glyphicon-thumbs-up"></span>
				<h4>Original content</h4>
			</div>
		</div>
	</div>

	<div class="row-bg">
		<div class="container news">
			<div class="row">

				<div class="col-lg-6">
					<div class="row news-blog">
						<div class="col-lg-6 col-md-3 col-sm-4">
							<a href="#"><img src="./images/pc_parts/cpu_images/cpuPic4.jpg" alt=""></a>
						</div>
						<div class="col-lg-6 col-md-9 col-sm-8">
							<h4><strong>How CPU are made</strong></h4>
							<p>CPU is a brain of a computer. It called Central Process Unit. CPU fetches and executes instructions. CPU consists of an Arithmetic and Logic Unit (ALU), a control unit, registers and buses...</p>
							<div class="text-center">
								<a href="technology/pc_parts/cpu.php" class="btn btn-default">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="row news-blog">
						<div class="col-lg-6 col-md-3 col-sm-4">
							<a href="#"><img src="./images/pc_parts/gpu_images/gpuPic2.jpg" alt=""></a>
						</div>
						<div class="col-lg-6 col-md-9 col-sm-8">
							<h4><strong>How GPU are made</strong></h4>
							<p>The images you see on your monitor are made of tiny dots called pixels. At most common resolution settings, a screen displays over a million pixels, and the computer has to decide what to do with every one in order to create an image...</p>
							<div class="text-center">
								<a href="technology/pc_parts/gpu.php" class="btn btn-default">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="row news-blog">
						<div class="col-lg-6 col-md-3 col-sm-4">
							<a href="#"><img src="./images/pc_parts/hdd_images/hddPic1.jpg" alt=""></a>
						</div>
						<div class="col-lg-6 col-md-9 col-sm-8">
							<h4><strong>How HDD are made</strong></h4>
							<p>The average laptop in the shops for around $500 has somewhere in the region of 60GB of memory. You see that figure and think ‘wow – imagine all the movies, songs, images, files and documents I could save on that baby’, right? But did you ever think about how it actually gets stored?</p>
							<div class="text-center">
								<a href="technology/pc_parts/hdd.php" class="btn btn-default">Read More</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="row news-blog">
						<div class="col-lg-6 col-md-3 col-sm-4">
							<a href="#"><img src="./images/pc_parts/ram_images/ramPic6.jpg" alt=""></a>
						</div>
						<div class="col-lg-6 col-md-9 col-sm-8">
							<h4><strong>How RAM are made</strong></h4>
							<p> Random access memory (RAM) is the best known form of computer memory. RAM is considered "random access" because you can access any memory cell directly if you know the row and column that intersect at that cell...</p>
							<div class="text-center">
								<a href="technology/pc_parts/ram.php" class="btn btn-default">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>