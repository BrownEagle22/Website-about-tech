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
        $template->showHeader("cv");
    ?>
	
	<div class="container" id="cv">
		<h1 class="text-center">Curriculum vitae</h1>
		
		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 cv-row-title blue-font">
				PERSONAS DATI
			</div>
			<div class="col-sm-7 cv-right-side">
				<div class="row big-font">Ēriks Žeibe</div>

				<div class="row cv-data">
					<span class="glyphicon glyphicon-home cv-icon"></span>
					Prūšu iela 22, Rīga, LV-1057(Latvija)
					<br>
					<span class="glyphicon glyphicon-phone cv-icon"></span>
					(+371) 22113263
					<br>
					<span class="glyphicon glyphicon-envelope cv-icon"></span>
					eriks_zeibe@hotmail.com
				</div>

				<div class="row">
					<span class="lightblue-font">Dzimums</span> Vīrietis
					<span class="lightblue-font">| Dzimšanas datums</span> 15/07/1998
					<span class="lightblue-font">| Pilsonība</span> Latvijas
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 cv-row-title blue-font">
				VĒLAMĀ NODARBOŠANĀS
			</div>
			<div class="col-sm-7 cv-right-side">
				<div class="row big-font">Programmētājs</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 cv-row-title blue-font">
				IZGLĪTĪBA
			</div>
			<div class="col-sm-7 row cv-right-side">
				<div class="cv-line"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 cv-row-title blue-font">
				01/09/2005-13/06/2014
			</div>
			<div class="col-sm-7 cv-right-side">
				<div class="row med-font blue-font">
					Apliecība par vispārējo pamatizglītību
				</div>
				<div class="row">
					Rīgas 25. vidusskola, Rīga (Latvija)
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 cv-row-title blue-font">
				01/09/2014-pašlaik
			</div>
			<div class="col-sm-7 cv-right-side">
				<div class="row">
					Rīgas Valsts tehnikums, Rīga (Latvija)
				</div>
				<div class="row">
					Programmēšanas tehniķis
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 cv-row-title blue-font">
				PRASMES
			</div>
			<div class="col-sm-7 row cv-right-side">
				<div class="cv-line"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 cv-row-title blue-font">
				Dzimtā valoda
			</div>
			<div class="col-sm-7 cv-right-side">
				<div class="row">
					latviešu
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 cv-row-title blue-font">
				Citas valodas
			</div>
			<div class="col-sm-7 cv-right-side">

				<div class="row table-responsive">
					<table class="table table-hover table-bordered table-condensed cv-table" id="cv-lang-table">
						<thead>
							<tr class="blue-font">
								<th></th>
								<th class="text-center" colspan="2">SAPRATNE</th>
								<th class="text-center" colspan="2">RUNĀŠANA</th>
								<th class="text-center">RAKSTĪŠANA</th>
							</tr>
							<tr class="blue-font">
								<th></th>
								<th class="text-center">Klausīšanās</th>
								<th class="text-center">Lasīšana</th>
								<th class="text-center">Dialogs</th>
								<th class="text-center">Monologs</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">angļu</td>
								<td class="text-center">B2</td>
								<td class="text-center">B2</td>
								<td class="text-center">B1</td>
								<td class="text-center">B2</td>
								<td class="text-center">B2</td>
							</tr>
							<tr>
								<td class="text-center">krievu</td>
								<td class="text-center">B2</td>
								<td class="text-center">B1</td>
								<td class="text-center">A2</td>
								<td class="text-center">A2</td>
								<td class="text-center">B1</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="row">
					Līmeņi: A1 un A2: Pamatlīmenis - B1 un B2: Vidējais līmenis - C1 un C2: Augstākais līmenis
				</div>

				<div class="row">
					<a href="http://europass.cedefop.europa.eu/lv/resources/european-language-levels-cefr" target="_blank">Eiropas kopīgās pamatnostādnes valodu apguvei</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 cv-row-title blue-font">
				Digitālā prasme
			</div>
			<div class="col-sm-7 cv-right-side">

				<div class="row table-responsive">
					<table class="table table-hover table-bordered table-condensed cv-table">
						<thead>
							<tr class="blue-font">
								<th class="text-center" colspan="5">PAŠNOVĒRTĒJUMS</th>
							</tr>
							<tr class="blue-font">
								<th valign="middle" class="text-center">Informācijas apstrāde</th>
								<th valign="middle" class="text-center">Komunikācija</th>
								<th valign="middle" class="text-center">Satura veidošana</th>
								<th valign="middle" class="text-center">Drošība</th>
								<th valign="middle" class="text-center">Problēm-risināšana</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">Vidējais līmenis</td>
								<td class="text-center">Vidējais līmenis</td>
								<td class="text-center">Vidējais līmenis</td>
								<td class="text-center">Vidējais līmenis</td>
								<td class="text-center">Augstākais līmenis</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="row">
					<a href="http://europass.cedefop.europa.eu/lv/resources/digital-competences" target="_blank">Digitālās prasmes - Pašnovērtējuma tabula</a>
				</div>

				<div class="row">
					- labas MS Office programmatūras prasmes (MS Word, MS Excel, MS PowerPoint)
				</div>

				<div class="row">
					- Prasmes programmēšanas valodās Java (pamata līmenī) un C++ (iesācēja līmenī)
				</div>

				<div class="row">
					- HTML, CSS, Bootstrap pamatzināšanas 
				</div>
			</div>
		</div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>