<?php

class Multiplication1 {

    public function __construct(){
        for ($num=1;$num<=5;$num++) {
            echo '<th>';
            for ($i = 1; $i <= 10; $i++) {
                $res = $num * $i;
                echo '<p align="left">' . $num . ' x ' . $i . ' = ' . $res . '</p>';
            }
            echo '</th>';
        }
    }
}
class Multiplication2 {
    public function __construct(){
        for ($num=6;$num<=10;$num++) {
            echo '<th>';
            for ($i = 1; $i <= 10; $i++) {
                $res = $num * $i;
                echo '<p align="left">' . $num . ' x ' . $i . ' = ' . $res . '</p>';
            }
            echo '</th>';
        }
    }
}

class Multiplication3 {

    public function __construct(){
        for ($num=1;$num<=5;$num++) {
            echo '<th>';
            for ($i = 1; $i <= 10; $i++) {
                $res = $num * $i;
                $text= '<p align="left">' . $num . ' x ' . $i . ' = ' . $res . '</p>';
                $healthy = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
                $yummy   = array(
                        "<span style=\"color:Fuchsia;\">0</span>",
                        "<span style=\"color:red;\">1</span>",
                        "<span style=\"color:green;\">2</span>",
                        "<span style=\"color:Gold;\">3</span>",
                        "<span style=\"color:blue;\">4</span>",
                        "<span style=\"color:SpringGreen;\">5</span>",
                        "<span style=\"color:DimGrey;\">6</span>",
                        "<span style=\"color:AntiqueWhite;\">7</span>",
                        "<span style=\"color:MediumSlateBlue;\">8</span>",
                        "<span style=\"color:Turquoise;\">9</span>");
                $newphrase = str_replace($healthy, $yummy, $text);
                //------------
                echo $newphrase;
            }
            echo '</th>';
        }
    }
}

class Multiplication4 {
    public function __construct(){
        for ($num=6;$num<=10;$num++) {
            echo '<th>';
            for ($i = 1; $i <= 10; $i++) {
                $res = $num * $i;
                $text= '<p align="left">' . $num . ' x ' . $i . ' = ' . $res . '</p>';
                $healthy = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
                $yummy   = array(
                        "<span style=\"color:Fuchsia;\">0</span>",
                        "<span style=\"color:red;\">1</span>",
                        "<span style=\"color:green;\">2</span>",
                        "<span style=\"color:Gold;\">3</span>",
                        "<span style=\"color:blue;\">4</span>",
                        "<span style=\"color:SpringGreen;\">5</span>",
                        "<span style=\"color:DimGrey;\">6</span>",
                        "<span style=\"color:AntiqueWhite;\">7</span>",
                        "<span style=\"color:MediumSlateBlue;\">8</span>",
                        "<span style=\"color:Turquoise;\">9</span>");
                $newphrase = str_replace($healthy, $yummy, $text);
                //------------
                echo $newphrase;
            }
            echo '</th>';
        }
    }
}
