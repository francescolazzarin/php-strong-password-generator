<?php
    session_start();
    $password=$_SESSION['password'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
</head>
<body>
    <main>
        <h1>Password generata</h1>
        <p>
            la password è:
            <?php
                echo $password;
            ?>
        </p>
    </main>
</body>
</html>