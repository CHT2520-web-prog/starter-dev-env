<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Codespace</title>
</head>

<body>

<h1>PHP + MariaDB</h1>

<?php
try{
    $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=app', 'app', 'app');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

?>

</body>
</html>