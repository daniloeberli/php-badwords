<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badwords</title>
</head>
<body>
    <?php

    $par = $_GET["paragraph"];
    $word = $_GET["word"];

    ?>

    <h1> testo originale: <?php echo $par ?> </h1>
    <h2> lunghezza: <?php echo strlen($par) ?></h2>

    <?php
    
    $new_par = str_replace($word,"***",$par)
    
    ?>

    <h1> testo censurato: <?php echo $new_par ?> </h1>
    <h2> lunghezza: <?php echo strlen($new_par) ?></h2>

    <a href="index.php">Home</a>

</body>
</html>