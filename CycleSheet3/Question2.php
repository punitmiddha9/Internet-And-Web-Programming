<!DOCTYPE HTML>
<html>
<body>
    <?php
        $name = $passwd = $gender = $dob = $education = $email="";
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>
    <h2>Form </h2>
    <form method="post" action="Question2b.php">
        Name: <input type="text" name="name" value="<?php echo $name;?>">

        <br><br>
        Password: <input type="password" name="passwd" value="<?php echo $passwd;?>">
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo
        "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo
        "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo
        "checked";?> value="other">Other 

        <br><br>
        Date of Birth:
        <input type="date" name="dob" value="<?php echo $dob;?>">
        <br><br>
        Education:
        <input type="checkbox" name="education" <?php if (isset($education) && $education=="PG")
        echo "checked";?> value="PG">PG
        <input type="checkbox" name="education" <?php if (isset($education) && $education=="UG")
        echo "checked";?> value="UG">UG
        <input type="checkbox" name="education" <?php if (isset($education) &&
        $education=="Professional") echo "checked";?> value="Professional">Professional
        <br><br>
        Email Id:
        <input type="text" name="email" value="<?php echo $email;?>">
        <br><br>
        <button onclick="myFunction()">SUBMIT</button>
        <script>
            function myFunction() {
            location.replace("Question2b.php")
            }
        </script>
    </form>
</body>
</html>