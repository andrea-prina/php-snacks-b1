<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 05</title>
</head>
<body>
    <?php 
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    // Ogni punto un nuovo paragrafo.

    $paragraph = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime vel unde deleniti culpa, odit, tempore sit aut atque voluptate explicabo, ipsa modi sapiente sed quo at libero exercitationem repudiandae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime vel unde deleniti culpa, odit, tempore sit aut atque voluptate explicabo, ipsa modi sapiente sed quo at libero exercitationem repudiandae. Amet?";

    $subPargraphs = (explode(".", $paragraph));
    ?>

    <h1>CHAPTER</h1>

    <?php for ($i = 0; $i < count($subPargraphs); $i++) { ?>
            <p>
                <?php
                echo $subPargraphs[$i];
                ?>
            </p>
    <?php } ?>

</body>
</html>