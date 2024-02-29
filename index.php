<?php
// Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
// Scriviamo tutto (logica e layout) in un unico file index.php

session_start();

$password = '';

include_once __DIR__  . '/partials/function/generaPassword.php';


if (isset($_GET['lunghezzaPassword'])){

    $lunghezzaPassword = $_GET['lunghezzaPassword'];
    $password = generaPassword($lunghezzaPassword);
    $_SESSION['password']=$password;
    header('location: success.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="text-center text-capitalize">Strong password generator</h1>
        <h2 class="text-center text-capitalize">genera una password sicura</h2>
    </header>
    <main class="container bg-dark">
        <div class="row">
            <form class="col-3" method="get">
                <div class="mb-3">
                    <label for="lunghezzaPassword" class="form-label text-light">lunghezza password</label>
                    <input type="number" class="form-control" id="lunghezzaPassword" name="lunghezzaPassword">
                </div>
                <button type="submit" class="btn btn-primary">genera</button>
            </form>
        </div>
        <!-- <div class="row mt-4">
            <div class="col">
                <div class="alert alert-success" role="alert">
                    La password generata è:
                </div>
            </div>
        </div> -->
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>