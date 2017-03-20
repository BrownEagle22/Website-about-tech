<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../lib/jquery-3.1.1.js"></script>
	<script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<link rel="shortcut icon" type="image/png" href="../images/icon.png"/>
	<title>How Does Tech Works</title>
    <?php
        include ("../template.php");
        $template = new Template();

        include ("functions.php");
        $funkcijas = new Funkcijas();
    ?>
</head>
<body>
    <?php
        $template->showHeader();
    ?>

	<div class="container">

        <div class="well">
            <h2><u>1. uzdevums</u></h2>
            <p>
                <strong><i>Noskaidrot, kura php versija ir uzlikta.</i></strong>
            </p>
            <?php
                $funkcijas->showPhpVers();
            ?>
        </div>

        <div class="well">
            <h2><u>2. uzdevums</u></h2>
            <p>
                <strong><i>Uzrakstīt php skriptu, kas izvada tekstu uz ekrāna.</i></strong>
            </p>
            <?php
                $funkcijas->showMsg();
            ?>
        </div>

        <div class="well">
            <h2><u>3. uzdevums</u></h2>
            <p>
                <strong><i>Uzrakstīt php skriptu, kas saskaita divus skaitļus un uz ekrāna izvada to rezultātu.</i></strong>
            </p>
            <?php
                $funkcijas->showSum();
            ?>
        </div>

        <div class="well">
            <h2><u>4. uzdevums</u></h2>
            <p>
                <strong><i>Uzrakstīt php skriptu, kas nosaka virknes garumu.</i></strong>
            </p>
            <?php
                $funkcijas->showLen();
            ?>
        </div>

        <div class="well">
            <h2><u>5. uzdevums</u></h2>
            <p>
                <strong><i>Dots teikums: „Es mācos programmēt PHP valodā.” Uzrakstīt php skriptu, kas
                nosaka, kurā pozīcijā atrodas mazais un lielais "p" burts.</i></strong>
            </p>
            <?php
                $funkcijas -> showPos();
            ?>
        </div>

        <div class="well">
            <h2><u>6. uzdevums</u></h2>
            <p>
                <strong><i>Uzrakstīt php skriptu, kas izvada šādu noformatētu tekstu: „PHP ir php skriptu valoda ar kuras palīdzību tiek veidoti MySql vaicājumi”.</i></strong>
            </p>
            <?php
                $funkcijas -> showFormatedTxt();
            ?>
        </div>

        <div class="well">
            <h2><u>7. uzdevums</u></h2>
            <p>
                <strong><i>Uzrakstīt php skriptu, kas izvada skaitļus no 1 līdz 100 rindā izmantojot gan while,
                gan for ciklus.</i></strong>
            </p>
            <div class="row text-center">
                <?php
                    $funkcijas -> izvaditSimts();
                ?>
            </div>
        </div>

        <div class="well">
            <h2><u>8. uzdevums</u></h2>
            <p>
                <strong><i>Uzrakstīt php skriptu, kas izvada skaitļus no 1 līdz 10 kollonā gan while, gan for
                ciklus.</i></strong>
            </p>
            <?php
                $funkcijas -> izvaditDesmit();
            ?>
        </div>

        <div class="well">
            <h2><u>9. uzdevums</u></h2>
            <p>
                <strong><i>Uzrakstīt php skriptu, kas atspoguļo switch darbības principu gan skaitļiem, gan
                tekstam.</i></strong>
            </p>
            <p class="switch-text">(Switch gadījumi: 1, 2, 3, default)</p>
            <?php
                $funkcijas -> numSwitchTest();
            ?>
            <br>
            <p class="switch-text">(Switch gadījumi: Vācija, Francija, Lielbritānija, default)</p>
            <?php
                $funkcijas -> textSwitchTest();
            ?>
        </div>

        <div class="well">
            <h2><u>10. uzdevums</u></h2>
            <p>
                <strong><i>Uzrakstīt php skriptu, kas atspoguļo if..., elseif...., else konstrukciju.</i></strong>
            </p>
            <?php
                $funkcijas -> showAgeDescr();
            ?>
        </div>

        <div class="well">
            <h2><u>11. uzdevums</u></h2>
            <p>
                <strong><i>Uzrakstīt php skriptu, kas uz ekrāna izvada alfabētu.</i></strong>
            </p>
            <?php
                $funkcijas -> showAlphabet();
            ?>
        </div>

        <div class="well">
            <h2><u>12. uzdevums</u></h2>
            <p>
                <strong><i>Uzrakstīt php skriptu, kas izvada uz ekrāna izvada ASCII tabulas simbolus un to
                kodus sākot no 127. līdz 64. Piemēram, 127 = •, 26 = ~, 125 = } u.c.</i></strong>
            </p>
            <div class="row text-center">
                <?php
                    $funkcijas -> showAscii();
                ?>
            </div>

        </div>
	</div>

    <?php
        $template->showFooter();
    ?>
</body>
</html>