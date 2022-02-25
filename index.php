<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM Toko ORDER BY ID DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add Items</a><br/><br/>
<a href="add_brand.php">Add Brand</a><br/><br/>
<a href="add_type.php">Add Type</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>ID              </th> 
        <th>Item Name       </th> 
        <th>Brand ID        </th> 
        <th>Price           </th>
        <th>Item Type       </th>
        <th>Specification   </th>
        <th>Descriptions    </th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['ID']."</td>";
        echo "<td>".$user_data['item_name']."</td>";
        echo "<td>".$user_data['brand_id']."</td>";    
        echo "<td>".$user_data['Price']."</td>";    
        echo "<td>".$user_data['types_id']."</td>";    
        echo "<td>".$user_data['Specification']."</td>";    
        echo "<td>".$user_data['Descriptions']."</td>";    
        // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>