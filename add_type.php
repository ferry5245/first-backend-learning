<html>
<head>
    <title>Add Items</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add_type.php" method="post" name="form1">
        Item Type <input type="text" name="item_type">
    <input type="submit" name="submit" value="Submit me!" />
    </form>
    
    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $item_type   = $_POST['item_type'];
        
        // include database connection file
        include_once("config.php");
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO ItemType(item_type) VALUES('$item_type')");
        // Show message when user added
        echo "Item added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>