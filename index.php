
<?php
require_once "db.php";

$stmt = $pdo->query(
    "SELECT * FROM stranka ORDER BY id_stranka"
);

$persons = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Persons Database</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Persons Database</h1>

<a href="add.php" class="button">Add Person</a>

<table>
    <tr>
        <th>ID</th>
        <th>Ime</th>
        <th>Priimek</th>
        <th>Email</th>
        <th>Telefon</th>
    </tr>

    <?php foreach ($persons as $person): ?>
    <tr>
        <td><?= htmlspecialchars($person['id_stranka']) ?></td>
        <td><?= htmlspecialchars($person['ime']) ?></td>
        <td><?= htmlspecialchars($person['priimek']) ?></td>
        <td><?= htmlspecialchars($person['email'] ?? '') ?></td>
        <td><?= htmlspecialchars($person['telefon'] ?? '') ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
