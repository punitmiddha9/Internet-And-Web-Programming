<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Department search</title>
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
 <form method="post" action="#">
 <input type="text" name="dep" placeholder="Enter department" required><br>
 <input type="submit" name="submit" />
 </form>
 <?php
 //$connection to the database, please update the following data with yours credentials
 $conn = mysqli_connect('localhost','root','','q8') or die('Unable to connect');
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $dep = $_POST['dep'];
 //Query to select all the employees in the given department
 $query = "SELECT * FROM `person` WHERE department LIKE '$dep'";
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
 //Displaying the every employees data
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
 }
 ?>
</body>
</html>
