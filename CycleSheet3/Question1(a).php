<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #ac66cc;
        }
        h3,h2 {
            color: #ffed99;
        }       
        #submit {
            background: #f6b8b8;
            border: none;
            border-radius: .3rem;
        }
    </style>
</head>
<body>
    <center>
        <form method='POST'>
            <h2>Enter Name:</h2>
            <input type="text" name="name" id="name">
            <input type="submit" value="Submit" id="submit">
        </form>
        <?php
        $name = $_POST['name'];
        echo "<h3> Welcome!!! $name </h3>";
        ?>
    </center>
</body>
</html>