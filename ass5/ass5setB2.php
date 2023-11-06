<?php
// Replace with your database connection details
$host = "localhost";
$port = "5432"; // The default PostgreSQL port
$dbname = "postgres";
$user = "postgres";
$password = "6512";

// Create a connection
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

if (isset($_POST['competition_name'])) {
    $competition_name = $_POST['competition_name'];

    $sql = "SELECT Student.Name, Student.Class
            FROM Student
            JOIN Student_Competition ON Student.Stud_id = Student_Competition.Stud_id
            JOIN Competition ON Student_Competition.C_no = Competition.C_no
            WHERE Competition.C_name = '$competition_name' AND Student_Competition.Rank = 1";

    $result = pg_query($conn, $sql);

    if ($result) {
        if (pg_num_rows($result) > 0) {
            while ($row = pg_fetch_assoc($result)) {
                echo "Student Name: " . $row["Name"] . "<br>";
                echo "Class: " . $row["Class"] . "<br>";
            }
        } else {
            echo "No student secured 1st rank in the competition: $competition_name";
        }
    } else {
        echo "Error in SQL query: " . pg_last_error();
    }
}

// Close the connection
pg_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <form method="post">
        <label for="competition_name">Enter Competition Name:</label>
        <input type="text" name="competition_name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
