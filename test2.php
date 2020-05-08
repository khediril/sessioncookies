<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        <?php
        if (isset($_COOKIE['user_bgcolor'])) {
            echo 'body {background-color:'.$_COOKIE['user_bgcolor'].'};';
        }
        echo 'body {background-color:'.$_COOKIE['user_bgcolor'].'};';
        ?>
    </style>
</head>
<body>
<h1>Titre principal:Page 2</h1>
    <?php
    if (isset($_COOKIE['user_bgcolor'])) {
        
        echo 'couleur :'.$_COOKIE['user_bgcolor'];
    }
    ?>
    <p>Un paragraphe</p>
    
</body>
</html>