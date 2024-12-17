<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detailsstud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data
$sql = "SELECT * FROM stude";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["name"]."</td>
            <td>".$row["email"]."</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$sql1 = "INSERT INTO stude (id, name, email) VALUES (1,'anju', 'anju@example.com')";
$sq12 = "INSERT INTO stude (id, name, email) VALUES (2,'anu', 'anu@example.com')";
$sql3 = "INSERT INTO stude (id, name, email) VALUES (3,'manuu', 'manu@example.com')";
$sql4 = "INSERT INTO stude (id, name, email) VALUES (4,'haniya', 'hanu@example.com')";

// Execute each query individually
if ($conn->query($sql1) === TRUE) {
  echo "Record 1 inserted successfully<br>";
} else {
  echo "Error: " . $sq11 . "<br>" . $conn->error . "<br>";
}

if ($conn->query($sq12) === TRUE) {
  echo "Record 2 inserted successfully<br>";
} else {
  echo "Error: " . $sq12 . "<br>" . $conn->error . "<br>";
}
if ($conn->query($sql3) === TRUE) {
  echo "Record 3 inserted successfully<br>";
} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error . "<br>";
}
if ($conn->query($sq14) === TRUE) {
  echo "Record 4 inserted successfully<br>";
} else {
  echo "Error: " . $sq14 . "<br>" . $conn->error . "<br>";
}

// Repeat for remaining queries

$conn->close();
?>