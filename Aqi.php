<?php
$host = "localhost";
$user = "root"; // change if needed
$pass = "";     // change if needed
$db = "AQI";

// Connect to DB
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $city = $conn->real_escape_string($_POST['city']);
    $country = $conn->real_escape_string($_POST['country']);
    $aqi = $conn->real_escape_string($_POST['aqi']);

    $sql = "INSERT INTO Info (city, country, aqi) VALUES ('$city', '$country', '$aqi')";
    $conn->query($sql);
}

// Fetch 10 most recent entries
$sql = "SELECT city, country, aqi FROM Info ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Top 10 AQI Cities</title>
</head>
<body>
    <h2>Latest 10 Cities with AQI</h2>
    <table border="1">
        <tr>
            <th>City</th>
            <th>Country</th>
            <th>AQI</th>
        </tr>
        <?php
        if ($result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= htmlspecialchars($row['city']) ?></td>
                <td><?= htmlspecialchars($row['country']) ?></td>
                <td><?= htmlspecialchars($row['aqi']) ?></td>
            </tr>
        <?php endwhile; else: ?>
            <tr><td colspan="3">No data found</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
