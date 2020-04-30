
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP11</title>
</head>

<body>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
    
    <input type="value" name="height">
    <br>
    <input type="value" name="width">
    <input type="submit">
   
    </form>

    </body>
    
    <?php
    
    if(isset($_POST['height']) && isset($_POST['width']))
    {
      
        $rezultatas = plotas($_POST['height'], $_POST['width']);
       
        echo 'Staciakmpio plotas: '.$rezultatas;
    }
       
    function plotas($height, $width) {
        $square = $height*$width;
        return $square;}
    ?>
    
</html>
