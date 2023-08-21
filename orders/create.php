<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <H1 align="center">ORDERS FORM</H1>
    <center>
    <form action="create.php" method="post">
        <table width="23%" border="2" align="center">
            <tr>
                <th>name</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
            <tr>
                <th>Image</th>
                <td><input type="text" name="img"></td>
            </tr>
            <tr>
                <th>size</th>
                <td><input type="number" name="size" max=200 min=10></td>
            </tr>
            <tr>
                <th>color</th>
                <td><input type="color" name="color"></td>
            </tr>
            <tr>
                <th>gender</th>
                <td><input type="radio" name="gender">male <input type="radio" name="gender">female</td>
            </tr>
            <tr>
                <th>count stock</th>
                <td><input type="number" name="count" max=20 , min=1></td>
            </tr>
            
            
        </table>
        <br>
        <br>
        <input align="center" type="submit" name="go" value="GO">
    </form>    
    </center>


    <?php
        if(isset($_POST["name"])){

            $name=$_POST["name"];
            $size=$_POST["size"];
            $img=$_POST["img"];
            $color=$_POST["color"];
            $gender=$_POST["gender"];
            $count=$_POST["count"];


            $con=mysqli_connect("localhost", "root","","project");

            $query="INSERT into orders (`name`,`image`,`size`,`color`,`gender`,`count_in_stock`,`created_at`,`updated_at`)
            values('$name','$img','$size','$color','$gender','$count',DEFAULT,DEFAULT)";

            $test=mysqli_query($con,$query);

            if($test){
                echo"added";
            }
            
            
        }