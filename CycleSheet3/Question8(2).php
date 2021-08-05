<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/Question8/Question8(2).php">
    <label for="dept_user">Enter Department to get the corresponding data</label>
    <input type="text" name="dept" id="dept">
    <button type="submit" style="display:inline;">Enter</button>
    </form>
    <?php
            $servername="localhost:3306";
            $username="root";
            $password="Sql@1234";
            $database="demo";

            $conn=mysqli_connect($servername,$username,$password,$database);
            if(!$conn){
            die("could not connect to the database");
            }
            echo "connected successfully<br><br>";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $dept=$_POST["dept"];

            $sql="SELECT Id,firstname,DOB,Department,Salary FROM person WHERE 
                                Department='$dept'";
            
            $result=mysqli_query($conn,$sql);
            echo'
                <table border="1" style="font-weight:bold;">
                
                <tr>
                <td>Id</td>
                <td>firstname</td>
                <td>DOB</td>
                <td>Department</td>
                <td style="width:2rem;">Salary</td>
                </tr">
               
                </table><br>
            ';
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                   echo'
                    <table border="1">
                    </thead>
                    <tr>
                    <td>'.$row["Id"].'</td>
                    <td>'.$row["firstname"].'</td>
                    <td>'.$row["DOB"].'</td>
                    <td>'.$row["Department"].'</td>
                    <td>'.$row["Salary"].'</td>
                    </tr>
                    </table>';
                   
                }
              } else {
                echo "0 results";
              }
        }
    ?>
</body>
</html>