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
 $cookieName = "username";

 $cookieValue = "Punit Middha";
 setcookie($cookieName, $cookieValue, time() + (360*24), "/");
 if(isset($_COOKIE[$cookieName])) {
 echo "<br>Welcome User: <b>" . $_COOKIE[$cookieName]."</b>";
 }
?>
<br /><br />
<a href="Question7(page2).php">Go to Page 2</a>
</div>
</body>
</html>