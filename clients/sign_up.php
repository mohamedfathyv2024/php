<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    <title>Clients</title>
</head>
<body>
    <form action="sign_up.php" method="post">
        <h2>APPLICATION REGISTER FORM</h2>
        <table>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
                <th>Email</th>
                <td><input type="email" name="email"></td>
        </tr>
        <tr>
                <th>username</th>
                <td><input type="text" name="username"></td>
        </tr>
        <tr>
                <th>password</th>
                <td><input type="text" name="password"></td>
        </tr>
        <tr>
                <th>phone</th>
                <td><input type="text" name="phone"></td>
        </tr>
        <tr>
                <th>address</th>
                <td><textarea name="address" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
                <th></th>
                <td><input type="submit" name="register" value="REGISTER NOW !"></td>
        </tr>

        </table>
        <?php
        if(isset($_POST["name"])){

            $name=$_POST["name"];
            $username=$_POST["username"];
            $add=$_POST["address"];
            $password=$_POST["password"];
            $email=$_POST["email"];
            $phone=$_POST["phone"];


            $con=mysqli_connect("localhost", "root","","project");

            $query="INSERT into clients (`full_name`,`username`,`password`,`email`,`phone_number`,`address`)
            values('$name','$username','$password','$email','$phone','$add')";

            $test=mysqli_query($con,$query);

            if($test){
                header("location: login.php");
            }
            
        }



      ?>












    </form>











</body>