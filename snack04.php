<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 04</title>
</head>
<body>
    <?php 
    
    // Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta 

    $numsArray = [];

    while (count($numsArray) < 15){

        $randomNum = rand(0, 20);

        if (in_array($randomNum, $numsArray) === false){
            $numsArray[] = $randomNum;
        }
    }

    ?>

    <h1><?php var_dump($numsArray); ?></h1>
</body>
</html>