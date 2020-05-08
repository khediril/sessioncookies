<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $color = $_POST['color'];
    setcookie('name', $name, time() + 3600 * 24);
    setcookie('color', $color, time() + 3600 * 24);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:<?php if (isset($color)) echo $color; ?>">
    <form method="post" accept-charset="UTF-8">



        <h3><label for="loginName">Votre Nom</label></h3>
        <input id="loginName" type="text" name="name">


        <h3><label for="color">color</label></h3>
        <div class="form-group">

            <select name="color" id="color">
                <option value="red" selected>red</option>
                <option value="green">green</option>
                <option value="yellow">yellow</option>
                <option value="blue">blue</option>
            </select>
        </div>
        <br>

        <input type="submit" value="submit" name="submit">


    </form>
    <hr>
    <?php
    if (isset($_POST['submit'])) {
        echo "Vous êtes  :" . $name;
        echo "<br>";
        echo "et votre couleur préférée :" . $color;
        echo '<br> <a href="page1.php"> Aller à la page 1</a>';
    }
    ?>


</body>

</html>