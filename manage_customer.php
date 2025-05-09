<?php
    include "validate_admin.php";
    include "db_connect.php";
    include "header.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
    

    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Details</title>
	<style>
		table {
			font-family: Arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even) {
			
		}
	</style>
</head>
<body>
	<h2>Customer Details</h2>
	<form method="POST" action="#">
		<label>Search:</label>
		<input type="text" name="search" placeholder="Search by Name or Account No">
		<input type="submit" name="submit" value="Search">
		<br><br>
		<label>Sort By:</label>
		<select name="sort_by">
			<option value="name">Name</option>
			<option value="account_no">Account No</option>
		</select>
		<input type="submit" name="submit" value="Sort">
	</form>
	<br><br>
	<table>
		<thead>
			<tr>
				<th>Account No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>customerid</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include "db_connect.php";

				//retrieve data based on search and sort
				$search = isset($_POST['search']) ? $_POST['search'] : '';
				$sort_by = isset($_POST['sort_by']) ? $_POST['sort_by'] : 'name';
				if($search != '') {
					$sql = "SELECT * FROM users WHERE name LIKE '%".$search."%' OR AccountNumber LIKE '%".$search."%' ORDER BY ".$sort_by;
				} else {
					$sql = "SELECT * FROM users ORDER BY ".$sort_by;
				}
				$result = $conn->query($sql);

				//display data in table
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>".$row['AccountNumber']."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "<td>".$row['phoneNumber']."</td>";
						echo "<td>".$row['customerId']."</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='5'>No Results Found</td></tr>";
				}

				//close database connection
				$conn->close();
			?>
		</tbody>
	</table>
</body>
</html>
