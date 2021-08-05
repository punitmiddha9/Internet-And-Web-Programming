<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Updating</title>
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
 $query = "SELECT * FROM `person` WHERE department LIKE 'SALE'";
 $execute = mysqli_query($conn,$query);
 ?>
 <?php
 while($row = mysqli_fetch_assoc($execute)){

 $sal = $row['salary'];
 $id = $row['Id'];
 //Calculating the update salary
 $update = ($sal*10)/100;
 $update = $update+$sal;
 //Updating the salary with respective id
 $q = "UPDATE `person` SET `salary` = $update WHERE Id LIKE '$id'";
 //echo $q."<br>";
 $exe = mysqli_query($conn,$q);
 }
 //Query to select no.of employee who got benefied
 $query = "SELECT COUNT(*) AS effected FROM `person` where department LIKE
'SALE'";
 $execute = mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($execute);
 echo "No.of persons benefited:: ". $row['effected'];
 //Displaying the benefied employee details
 $query = "SELECT * FROM `person` WHERE department LIKE 'SALE'";
 $execute = mysqli_query($conn,$query);
 ?>
 <table>
 <thead>
 <th>ID</th>
 <th>Name </th>
 <th>DOB </th>
 <th>Department </th>
 <th>Salary</th>
 </thead>
 <?php
 while($row = mysqli_fetch_assoc($execute)){
 ?>
 <tr>
 <td><?php echo $row['Id'];?></td>
 <td><?php echo $row['name'];?></td>
 <td><?php echo $row['dob'];?></td>
 <td><?php echo $row['department'];?></td>
 <td><?php echo $row['salary'];?></td>
 </tr>
 <?php
 }
 ?>
</body>
</html>
