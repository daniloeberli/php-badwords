<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badwords</title>
</head>
<body>
    <form action="index2.php" method="GET">
        <label for="paragraph">Scrivi il tuo testo</label>
        <textarea id="paragraph" name="paragraph" rows="5" cols="33"></textarea>

        <label for="word">Parola da censurare</label>
        <input type="text" name="word" id="word">
        
    
        <button type="submit">Invia</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>