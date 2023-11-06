<?php
    $s1 = isset($_GET['str']) ? $_GET['str'] : "";
    $ch = isset($_GET['rd']) ? $_GET['rd'] : 1;

    if ($ch == 1) {
        echo "Length of String $s1 is " . cal_strlen($s1);
    } elseif ($ch == 2) {
        echo "<br>Total vowels are " . cal_vowel($s1);
    } elseif ($ch == 3) {
        echo "<br>Lower case converted into Title case: " . convert_string($s1);
    } elseif ($ch == 4) {
        echo "Padded String: " . padboth($s1);
    } elseif ($ch == 5) {
        echo "String with White Spaces Removed: " . r_whitespace($s1);
    } elseif ($ch == 6) {
        echo "Reverse string: " . reverse($s1);
    }

    function cal_strlen($s) {
        $length = strlen($s);
        return $length;
    }

    function cal_vowel($s) {
        $str = strtolower($s);
        $countv = 0;
        $countc = 0;
        $len = strlen($s);

        for ($i = 0; $i < $len; $i++) {
            if (preg_match("/[aeiou]/i", $str[$i])) {
                $countv += 1;
            } elseif (preg_match("/[a-z]/i", $str[$i])) {
                $countc += 1;
            }
        }

        return $countv;
    }

    function convert_string($s) {
        $b = strtolower($s);
        $c = ucwords($b);
        return $c;
    }

    function padboth($s) {
        return str_pad($s, 20, "*", STR_PAD_BOTH);
    }

    function r_whitespace($s) {
        $e = str_replace(" ", "",$s);
        return $e;
    }

    function reverse($s) {
        $x = strrev($s);
        return $x;
    }
?>

