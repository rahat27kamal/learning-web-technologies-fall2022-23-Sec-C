<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add product</title>
</head>

<body>
    <form method="post" action="search.php">
        <fieldset>
            <legend>DISPLAY</legend>
            <?php
                
                 $con = mysqli_connect('localhost', 'root', '', 'product_db');
                 $sql = "SELECT  Id,Name,(Selling_price-Buying_price) AS Profit FROM products ";
                $status = mysqli_query($con, $sql);

                 if(mysqli_num_rows($status)>0){
            ?>
            <input type="text" placeholder="Search data" name="search" value="">
            <button name="submit">Search by name</button>
            
            <table cellpadding="5px" border="1">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                   
                    <th>Profit</th>
                </thead>
                <?php 
                while($row= mysqli_fetch_assoc($status))
                {

                ?>
                <tr>
                    <td><?php echo $row['Id'] ?></td>
                       <td><?php echo $row['Name']?> </td>
                         <td><?php echo $row['Profit']?> </td>
                    <td><a href="edit.php?Id=<?php echo $row['Id']; ?>">Edit</a>  <a href="delete.php?Id=<?php echo $row['Id']; ?>">Delete</a></td>
                   
                </tr>
                <tr>
                    <td><?php echo $row['Id'] ?></td>
                        <td><?php echo $row['Name']?> </td>
                          <td><?php echo $row['Profit']?> </td>
                    <td><a href="edit.php?Id=<?php echo $row['Id']; ?>">Edit</a>  <a href="delete.php?Id=<?php echo $row['Id']; ?>">Delete</a></td>
                    
                </tr>
                <tr>
                    <td><?php echo $row['Id'] ?></td>
                       <td><?php echo $row['Name']?> </td>
                          <td><?php echo $row['Profit']?> </td>
                    <td><a href="edit.php?Id=<?php echo $row['Id']; ?>">Edit</a>  <a href="delete.php?Id=<?php echo $row['Id']; ?>">Delete</a></td>
                   
                </tr>
                <?php
                }
                ?>
            </table>

            <?php
            }
            ?>
        </fieldset>
    </form>
</body>

</html>