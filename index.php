
<?php
    $paragrafo = 'E, e ho guardato dentro un emozione <br>
                  E ci ho visto dentro tanto amore <br>
                  Che ho capito perché non si comanda il cuore <br>
                  E va bene così, senza parole <br>
                  Senza parole';

    $word = $_GET["word"];

    $nuovo_testo = str_replace($word, "***", $paragrafo);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP BADWORDS</title>
</head>
<body>
    <div>
        <div class="testo-originale">
            <h1> Testo originale </h1>
            <h2>Senza Parole, Vasco Rossi</h2>       
                <p> 
                    <?php echo $paragrafo  ?> 
                </p>
                <p class="lungh-testo"> 
                    Lunghezza della strofa: <?php echo strlen($paragrafo); ?>
                </p>
        </div>
        <div class="testo-modificato">
            <h1> Testo modificato </h1>
            <h2>Senza Parole, Vasco Rossi</h2>       
            <p>
                <?php echo $nuovo_testo;?> 
            </p>
            <p class="lungh-testo"> 
                Nuova lunghezza della strofa: <?php echo strlen($nuovo_testo); ?>
            </p>
        </div>
    </div>
    <div class="censura-parola">
        <form action="index.php" method="get">
            <label for="word"> Inserisci la parola da sostituire </label>
            <input type="text" name="word" id="word">
            <button>Invia</button>
        </form>
    </div>
</body>
</html>
