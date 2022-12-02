<!--

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
buona password! :pulcino_che_esce_da_uovo: 
-->
<?php

require_once 'functions.php';
require_once 'vars.php';

//var_dump($_GET['user_number']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>password generator</title>
</head>
<body>

    <div class="container p-5">
        <div class="row">
            <div class="col">

                <h1>Password Generator</h1>

                <?php if(empty($_GET['user_number'])) : ?>
                    <form class="pt-3" action="index.php">

                        <div class="mb-3">

                            <label class="form-label">
                                Inserisci un numero da 8 a 32 per generare la tua password
                            </label>

                            <input method="GET" type="number" class="form-control" name="user_number" placeholder="Inserisci un numero da 8 a 32">

                            <button type="submit" class="btn btn-primary mt-3">genera</button>

                        </div>

                    </form>
                <?php elseif(($_GET['user_number']) < 8 || ($_GET['user_number']) > 32) : ?>

                    <h3>Il numero inserito non è valido</h3>

                <?php else: ?>
                
                    <h3>La tua password è:</h3>
                    <?php echo getRandom($_GET['user_number'],$letters,$numbers,$specials) ?>

                <?php endif; ?>
            

            </div>
        </div>
    </div>
    
    

</body>
</html>