<?php 
include "functions.php";

// Descrizione
// Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
// L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

// Milestone 1
// Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
// Scriviamo tutto (logica e layout) in un unico file index.php

// Milestone 2
// Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

// Milestone 3
// Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

// Milestone 4 (BONUS)
// Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
// Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

if( !empty($_GET['length']) ) {
    $pw_length = $_GET['length'];
} else {
    $pw_length = '';
};

$generated_pw = passwordGenerate($pw_length);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap CDN -->
</head>
<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <form action="index.php" method="GET">
            <div class="mb-3">
                <label for="password-length">Lunghezza della password</label>
                <input type="number" name="length" id="password-length" min="8" max="24" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>
        </form>
        <!-- Campo output con controllo: password generata o messaggio informativo -->
        <?php if( !empty($generated_pw) ) { ?>
        <h3><?php echo "La password generata è: $generated_pw" ?></h3>
        <?php } else { ?>
        <h3><?php echo "Nessun parametro valido inserito" ?></h3>
        <?php } ?>
        <!-- /Campo output con controllo: password generata o messaggio informativo -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- /Bootstrap JS -->
</body>
</html>