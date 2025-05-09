<?php
// Connect to the database
include "db_connect.php";

// Get the date range from the POST data
$from_date = $_POST['from-date'];
$to_date = $_POST['to-date'];

// Prepare and execute the SQL query
$sql = "SELECT * FROM transaction WHERE Tdate BETWEEN '$from_date' AND '$to_date'";
$result = mysqli_query($conn, $sql);

// Process the query results
if (mysqli_num_rows($result) > 0) {
    // Output the table headers
    echo "<table>";
    echo "<tr>
            <th>Date</th>
            <th>send_id</th>
            <th>receiver_id</th>
            <th>Amount</th>
        </tr>";

    // Output the table rows
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["Tdate"] . "</td>";
        echo "<td>" . $row["sendid"] . "</td>";
        echo "<td>" . $row["reciverid"] . "</td>";
        echo "<td>" . $row["amount"] . "</td>";
        echo "</tr>";
    }

    // Output the table footer
    echo "</table>";
} else {
    echo "No transactions found for the specified date range.";
}

// Close the database connection
mysqli_close($conn);
?>
