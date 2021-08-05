<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Inserting</title>
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
 </style>
</head>
<body>
 <a href="index.html">Go to Main page</a><br><br>
 <!-- form to get the employee data -->
 <form method="post" action="#">
 <input type="text" name="id" placeholder="Enter Id" required><br>
 <input type="text" name="name" placeholder="Enter name" required><br>
 <input type="date" name="dob" required><br>
 <input type="text" name="dep" placeholder="Enter department" required><br>
 <input type="text" name="salary" placeholder="Enter salary"/><br>
 <input type="submit" name="submit" />
 </form>
 <?php
 //$connection to the database, please update the following data with yours credentials
 $conn = mysqli_connect('localhost','root','','q8') or die('Unable to connect');
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $id = $_POST['id'];
 $name = $_POST['name'];
 $dob = $_POST['dob'];
 $dep = $_POST['dep'];
 $sal = $_POST['salary'];
 //Query to insert
 $query = "INSERT INTO `person`(`Id`, `name`, `dob`, `department`, `salary`) VALUES
('$id','$name','$dob','$dep','$sal')";
 $que = mysqli_query($conn,$query);
 //Notification after insertion
 if($que){
 echo "<script>alert('Inserted Successfully');</script>";
 }
 else{
 echo "<script>alert('Unable to insert');</script>";
 }
 }
 ?>
</body>
</html>
