<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "12Berke-";
$dbname = "winkel";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to database ($dbname)<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
 
}
 
 
$query1 = "SELECT * FROM producten";
$stmt1 = $conn->prepare($query1);
$stmt1->execute();
$result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
 
if ($result1) {
    foreach ($result1 as $row) {
        echo "Product Code: " . $row["product_code"] . ", Naam: " . $row["product_naam"] . ", Prijs: " . $row["prijs_per_stuk"] . "<br>";
    }
} else {
    echo "Error executing query: " . $stmt1->errorInfo()[2];
}
 
 
 
$conn = null;
?>
</body>
</html>