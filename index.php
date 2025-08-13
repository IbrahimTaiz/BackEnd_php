<?php
declare(strict_types=1);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? 'Guest';
    $color = $_POST['color'] ?? 'black';
    header(
        'Location: result.php?name=' . urlencode($name) . '&color=' . urlencode($color),
        true,
        303
    );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="POST">
    <label for="name">user name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name:">
    <label for="color">favorite color:</label>
    <input type="color" id="color" name="color" value="#FFFFFF">
    <input type="submit" value="Send">
</form>

<?php
// Display current time
echo date('H:i:s');
?>

</body>
</html>
