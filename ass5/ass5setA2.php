<?php
$host = "localhost";
$port = "5432";
$dbname = "event_committee";
$user = "91976";
$password = "050204";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
    die("Failed to connect to the database");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventTitle = $_POST["eventTitle"];
    
    // Validate the input, e.g., check for empty or invalid values
    
    // Now, update the committee status
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventTitle = $_POST["eventTitle"];
    
    // Validate the input, e.g., check for empty or invalid values
    
    // Now, update the committee status
    $updateStatusQuery = "UPDATE committee
                          SET status = 'working'
                          WHERE cno IN (
                              SELECT committee.cno
                              FROM committee
                              JOIN event_committee_relation ON committee.cno = event_committee_relation.cno
                              JOIN event ON event_committee_relation.eno = event.eno
                              WHERE event.title = $1
                          )";
    
    $result = pg_query_params($conn, $updateStatusQuery, array($eventTitle));
    
    if ($result) {
        echo "Committee status updated to 'working' for the event '$eventTitle'";
    } else {
        echo "Error updating committee status: " . pg_last_error($conn);
    }
}


?>