
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>image</th>
            <th>size</th>
            <th>color</th>
            <th>count in stock</th>
        </tr>

        <?php
        $con=mysqli_connect("localhost","root","","project");
        // if($con){
        //     echo "done";
        // }
        $di="update orders SET name='Atia' where size=40";
        $query=mysqli_query($con,$di); // perform query on database 

    //     print_r($query); // just the numbers of rows and other data about your database 

    //     while($rows=mysqli_fetch_array($query)){
            
    //         // $rows has inside it array that fetched from database

    //         echo"<tr>";
    //         echo "<td>" . $rows['name'] . "</td>";
            
    //         echo "<td>" . $rows['image'] . "</td>";
            

    //         echo "<td>" . $rows['size'] . "</td>";
            

    //         echo "<td>" . $rows['color'] . "</td>";
            

    //         echo "<td>" . $rows['count_in_stock'] . "</td>";
    //         // echo "<hr>";
    //         echo "</tr>";
    //     }
    //     ?>
    // </table>
    // <hr>
  
</body>
</html>
