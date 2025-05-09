<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Statement Page</title>
    <style>
        /* Global styles */
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

/* Header styles */
header {
  background-color: #0077b6;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem;
}

nav ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  margin: 0 1rem;
}

nav a {
  color: #fff;
  text-decoration: none;
  padding: 0.5rem;
}

nav a:hover {
  background-color: #fff;
  color: #0077b6;
}

/* Profile section styles */
.profile {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 2rem 0;
}

.profile img {
  border-radius: 50%;
  height: 150px;
  margin-bottom: 1rem;
  width: 150px;
}

.profile ul {
  list-style: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

.profile li {
  margin-bottom: 1rem;
}

.profile strong {
  font-weight: bold;
}

/* Accounts section styles */
.accounts {
  margin: 2rem 0;
}

.accounts table {
  border-collapse: collapse;
  width: 100%;
}

.accounts th,
.accounts td {
  border: 1px solid #ddd;
  padding: 0.5rem;
}

.accounts th {
  background-color: #f2f2f2;
  font-weight: bold;
  text-align: left;
}

.accounts td {
  text-align: right;
}

/* Statements section styles */
.statements {
  margin: 2rem 0;
}

.statements h2 {
  margin-bottom: 1rem;
}

.statements form {
  display: flex;
  justify-content: space-between;
  margin-bottom: 1rem;
}

.statements label {
  font-weight: bold;
}

.statements input[type="date"] {
  padding: 0.5rem;
}

.statements button {
  background-color: #0077b6;
  border: none;
  color: #fff;
  padding: 0.5rem 1rem;
}

.statements button:hover {
  background-color: #005073;
  cursor: pointer;
}

.statements table {
  border-collapse: collapse;
  width: 100%;
}

.statements th,
.statements td {
  border: 1px solid #ddd;
  padding: 0.5rem;
}

.statements th {
  background-color: #f2f2f2;
  font-weight: bold;
  text-align: left;
}

.statements td {
  text-align: right;
}

    </style>
</head>
<body>  
    <header>
        <h1>Banking Statement Page</h1>
        <nav>
            <ul>
                <li><a href="profile.php">Accounts</a></li>
                <li><a href="payment.php">Payments</a></li>
                <li><a href="statement.php">Statements</a></li>
                <li><a href="#">Support</a></li>
                <li><form action="logout.php" method="post" >
                        <input type="submit" value="Logout">
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="statement-form">
            <h2>Select Dates to Generate Statement</h2>
            <form id="statement-form" method="POST" action="#">
                <label for="from-date">From Date:</label>
                <input type="date" id="from-date" name="from-date" required>
                <label for="to-date">To Date:</label>
                <input type="date" id="to-date" name="to-date" required>
                <input type="submit" value="Generate Statement">
            </form>
        </section>
        <section class="statement-results">
            <h2>Statement Results</h2>
            <table id="statement-table" border="1px solid black " style="border-collapse:collapse">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>send_id</th>
                        <th>receiver_id</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
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

                </tbody>
            </table>
        </section>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
</body>
</html>
