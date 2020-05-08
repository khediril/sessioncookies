<?php 
    
    $color= isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white';
    $name= isset($_COOKIE['name']) ? $_COOKIE['name'] : 'inconnu';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?php echo $color; ?>">
    <h1>Page 1</h1>
    <h2>Vous êtes <?php echo $name; ?></h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nesciunt veritatis et repellat commodi veniam doloremque, a officia temporibus ipsam libero vitae porro possimus exercitationem ratione cupiditate aspernatur dolores saepe.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima odio est itaque facere deleniti voluptas recusandae id quas provident, inventore doloremque illum placeat assumenda earum facilis sequi, tempore incidunt non.</p>
</body>
</html>