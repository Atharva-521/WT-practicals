<?php
    
    $temp = array(
        68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
        68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83
    );
    $op = $_REQUEST['op'];
    
    $count = count($temp);
    
    $total = 0;
    foreach ($temp as $h) { 
        $total += $h;
    }
    
    $avg = round($total / $count);

    if($op == 1){
        
        echo "<p>The average high temperature for the month was $avg &deg;F.</p>\n";
    }
    else if($op == 2){
        
        rsort($temp);
        
        $topTemps = array_slice($temp, 0, 5);
        echo "<p>The warmest five high temperatures were: <br />\n";
        foreach ($topTemps as $t) {
            echo "$t &deg;F <br> \n";
        }
    }
   else if ($op == 3) {
    sort($temp); 
    $lowTemps = array_slice($temp, 0, 5); 
    echo "<p>The coolest five high temperatures were: <br/>\n";
    foreach ($lowTemps as $l) {
        echo "$l&deg;F <br>\n";
    }
}
   
?>
