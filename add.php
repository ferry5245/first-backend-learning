
<html>
<head>
    <title>Add Items</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
    Item Name<input type="text" name="item_name" /><br />    
    Brand ID<select name="brand_id" id="brand_id">
        <option value=1>Lenovo</option>
        <option value=2>Asus</option>
        <option value=3>HP</option>
        <option value=4>Acer</option>
    </select><br />
    Price<input type="text" name="Price" /><br/>
    Item Type<select name="types_id" id="types_id">
        <option value=1>Laptop</option>
        <option value=2>Phone</option>
        <option value=3>Accessory</option>
    </select><br/>
    Specification<input type="text" name="Specification" /><br />
    Descriptions<input type="text" name="Descriptions" /><br />
    <input type="submit" name="submit" value="Submit me!" />
    </form>
    
    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $item_name      = $_POST['item_name'];
        $brand_id       = $_POST['brand_id'];
        $Price          = $_POST['Price'];
        $types_id       = $_POST['types_id'];
        $Specification  = $_POST['Specification'];
        $Descriptions   = $_POST['Descriptions'];
        
        // include database connection file
        include_once("config.php");
        // mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO Toko(item_name,brand_id,Price,types_id,Specification,Descriptions) VALUES($item_name,$brand_id,$Price,$types_id,$Specification,$Descriptions)");
        // mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=1;");
        // Show message when user added
        echo "Item added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>