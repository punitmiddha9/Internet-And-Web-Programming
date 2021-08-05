<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method='POST'>
        <h2>Input string:</h2>
        <input type="text" name="string">
        <input type="submit" value="Submit">
    </form>

    <?php
        function Palindrome($string){
        if (strrev($string) == $string){
        return 1;
        }
        else{
        return 0;
        }
        }
        // Driver Code
        $original = $_POST['string'];
        if(Palindrome($original)){
        echo "<br>Palindrome";
        }
        else {
        echo "<br>Not a Palindrome";
        }
    ?>
    </center>
</body>
</html>