
    <?php
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);
        $operation = $_POST['operation'];

        // Function to find the modulo of the two numbers
        function findModulo($num1, $num2) {
            return $num1 % $num2;
        }

        // Function to find the power of the first number raised to the second
        function findPower($num1, $num2) {
            return pow($num1, $num2);
        }

        // Function to find the sum of the first n numbers (considering the first number as n)
        function findSum($num1) {
            $sum = 0;
            for ($i = 1; $i <= $num1; $i++) {
                $sum += $i;
            }
            return $sum;
        }

        // Function to find the factorial of the second number
        function findFactorial($num2) {
            if ($num2 === 0) {
                return 1;
            } else {
                return $num2 * findFactorial($num2 - 1);
            }
        }

        // Calculate and display the results based on the selected operation
        if ($operation === "modulo") {
            echo "Modulo: " . findModulo($num1, $num2);
        } else if ($operation === "power") {
            echo "Power: " . findPower($num1, $num2);
        } else if ($operation === "sum") {
            echo "Sum of the first " . $num1 . " numbers: " . findSum($num1);
        } else if ($operation === "factorial") {
            echo "Factorial of " . $num2 . ": " . findFactorial($num2);
        } else {
            echo "Invalid operation selected.";
        }
    } else {
        echo "Please enter two numbers and select an operation in the form.";
    }
    ?>


