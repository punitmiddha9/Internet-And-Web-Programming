<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {

            color: white;
            background: #f29191;
        }
    </style>
</head>
<body>
<form method='POST'>
        <br>
        <label for="name" id="name">Name</label>
        <input name="name" id="name">
    </form>
    <?php
        $name = $_POST['name'];
        date_default_timezone_set('Asia/Calcutta');
        $Hr = date('G');
        if ( $Hr >= 5 && $Hr <= 11 ) {
        $greetings = "<br>Good Morning, $name";
        } else if ( $Hr >= 12 && $Hr <= 18 ) {
        $greetings = "<br>Good Afternoon, $name";
        } else if ( $Hr >= 19 || $Hr <=21 ) {
        $greetings = "<br>Good Evening, $name";
        } else if ( $Hr >= 22 || $Hr <=4 ) {
        $greetings = "<br>Good Night, $name";
        }
        echo $greetings;
    ?>
</body>
</html>
