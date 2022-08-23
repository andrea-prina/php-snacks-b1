
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 01</title>
</head>
<body>

    <?php

        // Creiamo un array di array contenenti le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        //     Olimpia Milano - Cantù | 55-60

    
        $matchResults = [
            [
                "homeTeam" => "Olimpia Milano",
                "awayTeam" => "Dinamo Sassari",
                "homeScore" => 56,
                "awayScore" => 48
            ],
            [
                "homeTeam" => "Virtus Bologna",
                "awayTeam" => "Reyer Venezia",
                "homeScore" => 28,
                "awayScore" => 77
            ],
            [
                "homeTeam" => "Fortitudo Pompea Bologna",
                "awayTeam" => "De' Longhi Treviso",
                "homeScore" => 33,
                "awayScore" => 61
            ],
            [
                "homeTeam" => "Givova Scafati",
                "awayTeam" => "Olimpia Milano",
                "homeScore" => 48,
                "awayScore" => 47
            ],
            [
                "homeTeam" => "Reyer Venezia",
                "awayTeam" => "Dinamo Sassari",
                "homeScore" => 34,
                "awayScore" => 51
            ],
            [
                "homeTeam" => "Vanoli Cremona",
                "awayTeam" => "Fortitudo Pompea Bologna",
                "homeScore" => 38,
                "awayScore" => 63
            ],
        ];

    ?>

    <h1>Matches Results:</h1>
    
    <ul>
        <?php for ($i = 0; $i < count($matchResults); $i++) { ?>
            <li>
                <?php
                echo $matchResults[$i]["homeTeam"] . " - " . $matchResults[$i]["awayTeam"] . " | " . $matchResults[$i]["homeScore"] . "-" . $matchResults[$i]["awayScore"];
                ?>
            </li>
        <?php } ?>
    </ul>
    
</body>
</html>