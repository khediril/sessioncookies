<?php
setcookie('user_id', '1234');

setcookie('user_bgcolor', 'red', time() + 3600 * 24, '/', '', false, true);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">

    
</head>

<body>
    <h1>Titre principal : Page 1</h1>
    <?php
    if (isset($_COOKIE['user_id'])) {
        echo 'Votre ID de session est le ' . $_COOKIE['user_id'];
        echo 'couleur :'.$_COOKIE['user_bgcolor'];
    }
    ?>
    <p>Un paragraphe aller <a href='test2.php'> à la page2</a></p>
</body>

</html>