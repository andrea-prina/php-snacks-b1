<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 02</title>
</head>
<body>

    <?php 
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

    $userName = $_GET["name"];
    $userEmail = $_GET["email"];
    $userAge = $_GET["age"];

    $accessAllowed = false;

    if ((strlen($userName) > 3) && (is_numeric($userAge))){

        $atPosition = strpos($userEmail, "@");

        if ($atPosition > 0 && strpos($userEmail, ".", $atPosition + 2)){
            $accessAllowed = true;
        }
    }

    ?>

    <h1><?php echo $userName, " ", $userEmail, " ", $userAge; ?></h1>
    <h1>
        <?php 
        if ($accessAllowed){
            echo "Accesso riuscito";
        } else {
            echo "Accesso negato";
        }
        ?>
    </h1>


    
</body>
</html>