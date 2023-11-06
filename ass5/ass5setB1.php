<?php

$filename = "item.dat";

// Function to calculate and display the bill
function generateBill($filename) {
    if (file_exists($filename)) {
        echo "===============================================" . PHP_EOL;
        echo "Item Code  Item Name        Unit Sold  Rate   Total" . PHP_EOL;
        echo "===============================================" . PHP_EOL;

        $totalCost = 0;
        $file = fopen($filename, "r");

        while (($line = fgets($file)) !== false) {
            $itemInfo = explode(",", trim($line));

            if (count($itemInfo) == 4) {
                list($itemCode, $itemName, $unitSold, $rate) = $itemInfo;
                $unitSold = intval($unitSold);
                $rate = floatval($rate);
                $totalItemCost = $unitSold * $rate;
                $totalCost += $totalItemCost;
                printf("%9s  %20s  %9s  %6.2f  %6.2f" . PHP_EOL, $itemCode, $itemName, $unitSold, $rate, $totalItemCost);
            }
        }

        fclose($file);

        echo "===============================================" . PHP_EOL;
        echo "Total Cost:                       " . number_format($totalCost, 2) . PHP_EOL;
        echo "===============================================" . PHP_EOL;
    } else {
        echo "File $filename not found." . PHP_EOL;
    }
}

generateBill($filename);

?>
