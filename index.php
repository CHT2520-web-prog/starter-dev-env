<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Codespace</title>
</head>

<body>

<h1>PHP + MariaDB</h1>

<?php

$connection = new mysqli(
    "localhost",
    "student",
    "student",
    "webapp"
);

if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}

echo "<p>Successfully connected to MariaDB!</p>";

?>

</body>
</html>