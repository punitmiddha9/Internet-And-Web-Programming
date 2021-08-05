<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Deparment count</title>
 <style>
 body{
 margin:0;
 padding:10px;
 display:flex-box;
 justify-content:center;
 }
 input{
 padding:5px;
 margin:2px;
 }
 table{
 padding:10px;
 }
 td{
 padding:6px;
 }
 </style>
</head>
<body>
 <a href="index.html">Go to Main page</a><br><br>

 <?php
 //$connection to the database, please update the following data with yours credentials
 $conn = mysqli_connect('localhost','root','','q8') or die('Unable to connect');
 //Query to select each deparment and employees worked in it
 $query = "SELECT department,count(*) as No_of_employees FROM `person` group by
department";
 $execute = mysqli_query($conn,$query);
 ?>
 <table>
 <thead>
 <th>Deparment</th>
 <th>Count </th>
 </thead>
 <?php
 while($row = mysqli_fetch_assoc($execute)){
 ?>
 <tr>
 <td><?php echo $row['department'];?></td>
 <td><?php echo $row['No_of_employees'];?></td>
 </tr>
 <?php
 }
 ?>
</body>
</html>
