<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 07</title>
</head>
<body>
    
    <?php 

        // Creare un array contenente qualche alunno di un'ipotetica classe. 
        // Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
        // Stampare Nome, Cognome e la media dei voti di ogni alunno.

        $students = [
            [
                "firstName" => "Andrea",
                "lastName" => "Prina",
                "grades" => [9, 5, 8, 7, 7]
            ],
            [
                "firstName" => "Federica",
                "lastName" => "Lettomassi",
                "grades" => [9, 10, 6, 8, 8]
            ],
            [
                "firstName" => "Alessandro",
                "lastName" => "Collinarosse",
                "grades" => [4, 10, 8, 6]
            ],
        ];

    ?>

    <h1>Students Data</h1>

    <ul>
        <?php for ($i = 0; $i < count($students); $i++) { ?>
                <li>
                    <h3><?php echo $students[$i]["lastName"] ?></h3>
                    <p><?php echo $students[$i]["firstName"] ?></p>
                    <p><?php echo "Average grade: ", array_sum($students[$i]["grades"])/count($students[$i]["grades"]) ?></p>
                </li>
        <?php } ?>
    </ul>

</body>
</html>