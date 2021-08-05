<?php
    switch (@$_GET['background']){ 
        case "red":
        $background = "red";
        break;
        case "blue":
        $background = "blue";
        break;
        case "black":
        $background = "black";
        break;
        case "white":
        $background = "white";
        break;
        case "yellow":
        $background = "yellow";
        break;
        default:
        echo"Wrong action";
        break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
        }
        h2 {
            color: #ffc93c;
        }
    </style>
</head>
<body bgcolor="<?php echo $background ?>">
    <h2>Select background Color</h2>
    <!-- changing the background colors accordingly-->
    <a href="?background=red">Red</a> <br>
    <a href="?background=blue">Blue</a> <br>
    <a href="?background=black">Black</a> <br>
    <a href="?background=white">White</a> <br>
    <a href="?background=yellow">Yellow</a> <br>
</body>
</html>
