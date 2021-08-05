<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Question8/Question8(5).php" method="post">
        <label for="id">Enter the id to remove the details</label>
        <input type="number" name="id" id="id">
        <button type="submit">Delete</button>
    </form>

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

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $Id=$_POST["id"];

            //checking if the entered id exist in the  database or not

           $sql="SELECT * from person WHERE Id='$Id'";
           $result=mysqli_query($conn,$sql);
           if(mysqli_num_rows($result)==0){
               throw new Exception("sorry the record does not exist");
           }

           $sql="DELETE FROM person WHERE Id='$Id'";
           if(mysqli_query($conn,$sql)){
               echo "record deleted successfully";
           }
           else{
               throw new Exception("could not delete the record ,something went wrong");
           }
        }
    
    ?>
</body>
</html>