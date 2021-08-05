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

     //updating the salary of the sale department 
     $sql="UPDATE person set Salary=Salary+(Salary*0.1) where Department='SALE'";
    if(mysqli_query($conn,$sql)){
        echo"updated successfully<br>";
    }
    else{
        echo"sorry could not update";
    }
    //displaying who got benefit from the above increment
    $sql="SELECT Department,COUNT(*) from person WHERE Department='SALE'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            echo $row[1]." employees got benefit from the ".$row[0]."department";
        }
    }
?>