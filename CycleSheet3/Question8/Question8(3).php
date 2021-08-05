<?php
 $servername="localhost:3306";
 $username="root";
 $password="punit@694";
 $database="person";


 $conn=mysqli_connect($servername,$username,$password,$database);
 if(!$conn){
 die("could not connect to the database");
 }
 echo "connected successfully<br><br>";

//counting number of employees in each department

$sql="SELECT Department, COUNT(*) FROM person group by Department";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
            echo "<br>".$row[0].":".$row[1];
    }
}

?>