<?php
    class Funkcijas {
        public $msg = "Hello";
        public $txtLen = "Kartupelis";
        public $virkne = "Es macos programmet PHP valoda.";
        public $sk1 = 13;
        public $sk2 = 5;
        public $switchNum = 2;
        public $switchTxt = "Vācija";
        public $age = 33;

        public function showPhpVers() {
            echo "PHP versija: " . phpversion();
        }

        public function showMsg() {
            echo $this->msg;
        }

        public function showSum() {
            echo $this->sk1 . "+" . $this->sk2 . "=" . ($this->sk1 + $this->sk2);
        }

        public function showLen() {
            echo "Vārda '" . $this->txtLen . "' garums ir " . strlen($this->txtLen);
        }

        public function showPos() {
            echo "'P' pozīcija: " . strpos($this->virkne, "P") . "; 'p' pozīcija: " . strpos($this->virkne, "p");
        }

        public function showFormatedTxt() {
            echo "<strong>PHP ir php</strong> <i>skriptu valoda ar kuras</i> <u>palīdzību tiek veidoti</u> <strong>MySql vaicājumi</strong>";
        }

        public function izvaditSimts() {
            echo "<div class='col-xs-4'>";

            //1-50 ar for ciklu
            for ($i = 1; $i < 51; $i++) {
                if (($i % 34) == 0) {
                    echo "</div><div class='col-xs-4'>";
                }
                echo $i . "<br>";
            }

            //51-100 ar while ciklu
            while($i < 101) {
                if (($i % 34) == 0) {
                    echo "</div><div class='col-xs-4'>";
                }
                echo $i . "<br>";
                $i++;
            }

            echo "</div>";
        }

        public function izvaditDesmit() {
            //1-5 ar for ciklu
            for ($i = 1; $i < 6; $i++) {
                echo $i . "; <br>";
            }

            //6-10 ar while ciklu
            while($i < 11) {
                echo $i . "; <br>";
                $i++;
            }
        }

        public function numSwitchTest() {
            echo "<strong>Ievads:</strong> " . $this->switchNum . "<br>";
            echo "<strong>Izvads:</strong> ";
            switch($this->switchNum) {
                case 1: {
                    echo "Šis cipars ir viens";
                    break;
                }
                case 2: {
                    echo "Tas ir divi";
                    break;
                }
                case 3: {
                    echo "Šitais ir trīs";
                    break;
                }
                default: {
                    echo "Šis skaitlis neietilpst (1-3) intervālā";
                }
            }

        }

        public function textSwitchTest() {
            echo "<strong>Ievads:</strong> " . $this->switchTxt . "<br>";
            echo "<strong>Izvads:</strong> ";
            switch($this->switchTxt) {
                case "Vācija": {
                    echo "Šeit tu varēsi izbraukāties ar mašīnu bez ātruma ierobežojumiem.";
                    break;
                }
                case "Francija": {
                    echo "Tev noteikti ir jāapskata Eifeļa tornis.";
                    break;
                }
                case "Lielbritānija": {
                    echo "Es tev ieteiktu paņemt līdzi lietussargu.";
                    break;
                }
                default: {
                    echo "Novēlu laimīgu ceļojumu!";
                }
            }
        }

        public function showAgeDescr() {
            echo "<strong>Ievads:</strong> " . $this->age . "<br>";
            echo "<strong>Izvads:</strong> ";

            if ($this->age < 0) {
                echo "Tas nevar būt tavs vecums.";
            } elseif ($this->age < 18) {
                echo "Tu vēl esi bērns";
            } elseif ($this->age < 30) {
                echo "Tu esi jaunietis";
            } elseif ($this->age < 50) {
                echo "Tu esi pieredzējis cilvēks";
            } elseif ($this->age < 70) {
                echo "Tev varētu būt mazbērni";
            } elseif ($this->age < 110) {
                echo "Tu tagad visticamāk mierīgi atpūties pensijā.";
            } else {
                echo "Es šaubos, ka tev ir tik daudz gadu!";
            }
        }

        public function showAlphabet() {
            for ($i = 65; $i < 91; $i++) {
                echo chr($i) . " ";
            }
        }

        public function showAscii() {
            echo "<div class='col-xs-4'>";

            for ($i = 127; $i > 63; $i--) {
                echo $i . " = " . chr($i) . "<br>";
                if (($i-63) % 22 == 0) {
                    echo "</div><div class='col-xs-4'>";
                }

            }

            echo "</div>";
        }
    }