<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Formulier</title>
 
   
</head>
<body>
    <h1>Vul formulier</h1>
    <form action="" method="POST">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" required><br>
 
        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" required><br>
 
        <label for="leeftijd">Leeftijd:</label>
        <input type="number" name="leeftijd" required><br>
 
        <label for="adres">Adres:</label>
        <input type="text" name="adres" required><br>
 
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
 
        <input type="submit" value="Verstuur">
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
        echo "<h2>Ingevoerde gegevens:</h2>";
        echo "<p>Naam: " . $_POST['naam'] . "</p>";
        echo "<p>Achternaam: " . $_POST['achternaam'] . "</p>";
        echo "<p>Leeftijd: " . $_POST['leeftijd'] . "</p>";
        echo "<p>Adres: " . $_POST['adres'] . "</p>";
        echo "<p>Email: " . $_POST['email'] . "</p>";
    }
    ?>
</body>
</html>