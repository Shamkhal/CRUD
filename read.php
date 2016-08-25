<!doctype html>
<html>
    <head>
    <style>
        table, td, tr{
            border: 1px solid black;
        }
    </style>
    </head>
    <body>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Mobile Number</td>
        </tr>

    <?php
 
                    include "db.php";

                    $sql = "SELECT * FROM crud";
                    $query = mysqli_query($db_con, $sql); 
        

                    if ($query) {
                        
                        while($row = mysqli_fetch_assoc($query)){
                            echo "<tr>";
                            
                            echo"<td>".$row['crud_id']."</td>";
                            echo"<td>".$row['crud_name']."</td>";
                            echo"<td>".$row['crud_surname']."</td>";
                            echo"<td>".$row['crud_mobile']."</td>";

                            echo "</tr>";
    }
}

    ?>
          

        
        </table>

        <a href="list.php">Back</a>


    </body>
</html>