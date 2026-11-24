
<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $sql = "INSERT INTO stranka
            (ime, priimek, email, telefon)
            VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['ime'],
        $_POST['priimek'],
        $_POST['email'],
        $_POST['telefon']
    ]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dodaj Osebo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>dodaj novo osebo</h1>

<form method="POST">

    <label>Ime</label>
    <input type="text" name="ime" required>

    <label>Priimek</label>
    <input type="text" name="priimek" required>

    <label>Email</label>
    <input type="email" name="email">

    <label>Telefon</label>
    <input type="text" name="telefon">

    <button type="submit">Shrani osebo</button>

</form>

<a href="index.php">nazaj na osebe</a>

</body>
</html>
