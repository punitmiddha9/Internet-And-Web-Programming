<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 0 auto;width: 300px">
<div>
<?php
 //assign cookie name to variable
 $cookieName = "username";
 //dispaly cookie value ie Username
 if(isset($_COOKIE['username'])) {
 echo "<br>Welcome User: <b>" . $_COOKIE[$cookieName]."</b>";
 }
?>
<br /><br />
<a href="Question7(page1).php">Go to Page 1</a>
</div>
</body>
</html>