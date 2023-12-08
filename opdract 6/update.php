<?php
$servername = "localhost";
$username = "root";
$password = "12Berke-";
$dbname = "winkel";

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $product_naam = $_POST["product_naam"];
        $prijs_per_stuk = $_POST["prijs_per_stuk"];
        $omschrijving = $_POST["omschrijving"];
        

    
        $stmt = $conn->prepare("UPDATE producten SET prijs_per_stuk=:prijs, omschrijving=:omschrijving");
        $stmt->bindParam(':prijs', $prijs_per_stuk);
        $stmt->bindParam(':omschrijving', $omschrijving);

        $stmt->execute();

        echo "Productinformatie bijgewerkt!";
    }
}
catch(PDOException $e) {
    echo "Connectie mislukt: " . $e->getMessage();
}


$conn = null;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Productinformatie</title>
</head>
<body>

<h2>Productinformatie bijwerken</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Productnaam: <input type="text" name="product_naam"><br>
    Prijs per stuk: <input type="text" name="prijs_per_stuk"><br>
    Omschrijving: <textarea name="omschrijving"></textarea><br>
    <input type="submit" value="Bijwerken">
</form>

</body>
</html>
