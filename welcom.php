<?php
$name = $_GET['name'] ?? 'guest';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ibrahim Alamri Welcome Page </title>
</head>
<body>
 
    <p>
        Welcome <?php echo htmlspecialchars($name); ?>
    </p>
    <form action="welcom.php" method="GET">
        <input type="text" id="name" name="name" placeholder="Enter your name:">
        <input type="submit" value="Send">
    </form>
  
</body>
</html>
