<?php
    $arr = $_POST['arr'];
    $op = $_POST['op'];
    $item1 = $_POST['item1'];
    $item2 = $_POST['item2'];

    $array = explode(':', $arr);
    switch ($op) {
        case 1:
            echo "<br>Given Array is: ";
            print_r($array);
            array_push($array, $item1);
            echo "<br>";
            echo "<br>After inserting element using push in stack <br>";
            print_r($array);
            break;
        case 2:
            echo "<br>Given Array is: ";
            print_r($array);
            array_pop($array);
            echo "<br>";
            echo "<br>After deleting element using pop in stack <br>";
            print_r($array);
            break;
        case 3:
            echo "<br>Array elements in stack are: ";
            print_r($array);
            break;
        case 4:
            echo "<br>Given Array is: ";
            print_r($array);
            array_push($array, $item2);
            echo "<br>";
            echo "<br>After inserting element using push in queue <br>";
            print_r($array);
            break;
        case 5:
            echo "<br>Given Array is: ";
            print_r($array);
            array_shift($array);
            echo "<br>";
            echo "<br>After deleting element using shift in queue <br>";
            print_r($array);
            break;
        case 6:
            echo "<br>Array elements in queue are: ";
            print_r($array);
            break;
    }
?>

