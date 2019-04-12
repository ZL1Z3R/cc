<?php
/*Color*/
$green = "\033[92m";
$red = "\033[91m";
$cyan = "\033[36m";
$yellow = "\033[93m";
$bold = "\033[5m";
$white = "\033[0m";
/*Form*/
$date   = date('d-M-Y H:i');
//system("clear");
echo $cyan . "
  _____ _____  ______ _____ _____ _______    _____          _____  _____
 / ____|  __ \|  ____|  __ \_   _|__   __|  / ____|   /\   |  __ \|  __ \
| |    | |__) | |__  | |  | || |    | |    | |       /  \  | |__) | |  | |
| |    |  _  /|  __| | |  | || |    | |    | |      / /\ \ |  _  /| |  | |
| |____| | \ \| |____| |__| || |_   | |    | |____ / ____ \| | \ \| |__| |
 \_____|_|  \_\______|_____/_____|  |_|     \_____/_/    \_\_|  \_\_____/
                                  ( CC )
";
echo $green . "|+++|======================================|+++|";
echo $bold . $cyan . "\nCreate By : ZL1Z3R
Team : Sword X Cyb3r
Coder : php.sc code
version : 1.0.0
CODE : PHP script \n";
echo $bold . $yellow . "TIME : $date\n";
echo $bold . $blue . "TIDAK ADA SESUATU YANG SEMPURNA\n";
echo $bold . $red . "JADI ANDA TERUSLAH BELAJAR UNTUK MENCAPAI KEINGINAN\n";
echo $green . "|+++|======================================|+++|\n";
echo $bold . $cyan . "Count      : ";
$count = trim(fgets(STDIN,1024));
echo $bold . $green . "Delay      : ";
$sleep = trim(fgets(STDIN,1024));
for($x = 0; $x < $count; $x++){
$str = file_get_contents("http://namegenerators.org/fake-name-generator-us/");
$var = '/<div class="col2">(.*?)<\/div>/s';
preg_match_all($var, $str, $matches);
echo $cyan . "\n $$$$$$$$$$$$$$$ MORE INFORMATION $$$$$$$$$$$$$$$\n";
echo $bold . $yellow . "[name : ".str_replace("</span>", "", str_replace('<span class="name">', "", $matches[1][3]))."]".
                " [address : ".$matches[1][8]."]".
                " [phone : ".$matches[1][9]."]\n";
echo $cyan . "\n $$$$$$$$$$$$$$$ CARD INFORMATION $$$$$$$$$$$$$$$\n";
echo $bold . $yellow . "[email : ".$matches[1][10]."]".
                " [card number : ".str_replace(" ", "", $matches[1][14])."]".
                " [cvv : ".$matches[1][16]."]".
                " [exp-date : ".$matches[1][15]."]\n";
        sleep($sleep);
}
?>