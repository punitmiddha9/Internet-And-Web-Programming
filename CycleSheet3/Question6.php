<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            color: crimson;
        }
    </style>
</head>
<body style="margin: 0 auto;width: 300px">
<div>
<?php
 // set the visitCount variable to 1
 $visitCount = 1;
 // if cookie is set for the variable
 if(isset($_COOKIE['visitCount'])){
 //read the current cookie value
 $visitCount = $_COOKIE['visitCount'];
 //increment visitCount by one
 $visitCount ++;
 }
 // set cookie for visitCount
 // this visitCount using cookie valid for 1 day
 setcookie('visitCount', $visitCount, time()+3600*24);
 //print the visit count
 echo "<p><br>Your Visit Count is <b>".$visitCount."</b></p>";

?>
</div>
</body>
</html>
