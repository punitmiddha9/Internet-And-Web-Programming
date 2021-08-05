
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Question8/Question8(1).php" method="POST">

    <label for="Id">Enter your Id</label>
    <input type="number" name="Id" id="id"><br><br>

    <label for="name">Enter your Name</label>
    <input type="text" name="name" id="name"><br><br>

    <label for="dob">Enter your Date of Birth</label>
    <input style="width:12rem;" type="text" name="dob" id="dob" placeholder="Enter in  YYYY-MM-DD format">
    <br><br>

    <label for="department">Enter your Department</label>
    <input type="text" name="department" id="department"><br><br>

    <label for="salary">Enter your Salary</label>
    <input type="Number" name="salary" id="salary"><br><br>

    <button type="submit">SUBMIT</button>

    </form>
    <?php 
        //connecting with the mysql database
        $servername="localhost:3306";
        $username="root";
        $password="Sql@1234";
        $database="demo";

        $conn=mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
           die("could not connect to the database");
        }
        echo "connected successfully";

        //the table person is already created in the database
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $Id=$_POST["Id"];
            $firstname=$_POST["name"];
            $DOB=$_POST["dob"];
            $Department=$_POST["department"];
            $Salary=$_POST["salary"];

            //inserting these records into the database
            $sql = "INSERT INTO person (Id,firstname,DOB,Department,Salary)
                    VALUES ($Id,'$firstname','$DOB','$Department',$Salary)";

               if(mysqli_query($conn,$sql)){
                   echo "data inserted successfully";
               }
               else{
                   echo "error:".$conn."could not insert data";
               }

        }
    ?>
    
</body>
</html>
