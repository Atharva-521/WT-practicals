<?php
$fruits = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$foundValue = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $searchValue = $_POST["searchValue"];

    
    $index = array_search($searchValue, $fruits);

    if ($index !== false) {
        $foundValue = "$searchValue found at index $index in the array.";
    } else {
        $foundValue = "$searchValue not found in the array.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Array</title>
</head>
<body>
    <h1>Search in Array</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="searchValue">Enter a value to search for: </label>
        <input type="text" name="searchValue" id="searchValue">
        <input type="submit" value="Search">
    </form>

    <?php
    if (!empty($foundValue)) {
        echo "<p>$foundValue</p>";
    }

    echo "<h2>Array Contents:</h2>";
   
    foreach ($fruits as $fruit) {
        echo "$fruit, ";
    }
    echo "";
    ?>
</body>
</html>


