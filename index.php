<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form action="" method="get">
        <label for="number">Inserisci il numero di caratteri</label>
        <input type="text" name="number" id="number">
        <button type="submit" value="CHECK">Invia</button>
    </form>
    <?php

        include('./functions.php');
       

        if(isset($_GET['number'])){
            $number = $_GET['number'];
            echo '<h1>La tua pasword: '. generatePass($number).' </h1>';
        }

        
    ?>
</body>
</html>