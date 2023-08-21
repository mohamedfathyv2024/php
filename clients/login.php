<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    <title>Clients</title>
</head>
<body>
    

<form action="login.php" method="post">
        <h2>login now</h2>
        <table>
      
        <tr>
                <th>username</th>
                <td><input type="text" name="username"></td>
        </tr>
        <tr>
                <th>password</th>
                <td><input type="text" name="password"></td>
        <tr>
                <th></th>
                <td><input type="submit" name="login" value="login" style="font-size:24px;"></td>
        </tr>
        </table>

        <?php
        if(isset($_POST["username"])){
                $username=$_POST["username"];
                $password=$_POST["password"];
        
                $con=mysqli_connect("localhost", "root","","project");

                $result="SELECT * FROM clients WHERE username='$username'  AND password='$password'   ";

                $query=mysqli_query($con , $result);

                $rows=mysqli_fetch_assoc($query);

                if(mysqli_num_rows($query)>0){
                        header("Location:../products/index.php ");
                }else {
                        echo "check your data";
                }


        }


        ?>

</body>