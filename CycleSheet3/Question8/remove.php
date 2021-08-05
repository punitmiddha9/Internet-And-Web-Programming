<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Remove Employee</title>
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
 <input type="text" name="id" placeholder="Enter id" required><br>
 <input type="submit" name="submit" />
 </form>
 <?php
 //$connection to the database, please update the following data with yours credentials
 $conn = mysqli_connect('localhost','root','','q8') or die('Unable to connect');
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $id = $_POST['id'];
 //Query to delete the employee data
 $query = "DELETE FROM `person` WHERE Id LIKE '$id'";
 $execute = mysqli_query($conn,$query);
 //Notification after deletion of employee
 if($execute){
 echo "<script>alert('Removed Successfully');</script>";
 } else{
 echo "<script>alert('Unable to remove');</script>";
 }
 }
 ?>
</body>
</html>
