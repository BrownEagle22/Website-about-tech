<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="./lib/jquery-3.1.1.js"></script>
	<script src="./lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./style.css">
	<link rel="shortcut icon" type="image/png" href="./images/icon.png"/>
	<title>How Does Tech Works</title>
    <?php
        include ("template.php");
        $template = new Template();
    ?>
</head>
<body>
    <?php
        $template->showHeader();
    ?>

	<div class="container" id="kontakti">
		<h1 class="text-center">Contacts</h1>
		<div class="row">
			<div class="col-sm-6">
				<div class="well well-lg">

					<div class="row">
						<div class="col-xs-4 contact-text">
							<p><strong>Full name:</strong></p>
						</div>
						<div class="col-xs-8" style="height: 100%;">
							<p class="align-middle" style="display: inline-block;">Ēriks Žeibe</p>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4 contact-text">
							<p><strong>Location:</strong></p>
						</div>
						<div class="col-xs-8">
							<p>Riga, Latvia</p>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4 contact-text">
							<p><strong>Email:</strong></p>
						</div>
						<div class="col-xs-8">
							<p>eriks_zeibe@inbox.lv</p>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4 contact-text">
							<p><strong>Phone nr:</strong></p>
						</div>
						<div class="col-xs-8">
							<p>(+371) 23456789</p>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4 contact-text">
							<p><strong>Fax:</strong></p>
						</div>
						<div class="col-xs-8">
							<p>(+371) 23456789</p>
						</div>
					</div>

					<div class="row">
						<i class="col-xs-12">Available every day 8:00-20:00 (Except holidays)</i>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17405.462977200998!2d24.104821984172087!3d56.954235955783695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96a8a0e931b27448!2sPIKC+R%C4%ABgas+Valsts+tehnikums!5e0!3m2!1slv!2slv!4v1485099534982" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>