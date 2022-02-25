<html>
<head>
    <title>Add Items</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add_brand.php" method="post" name="form1">
        Item Name <input type="text" name="BrandName">
    <input type="submit" name="submit" value="Submit me!" />
    </form>
    
    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $BrandName   = $_POST['BrandName'];
        echo "$BrandName";
        // include database connection file
        include_once("config.php");
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO Brand(BrandName) VALUES('$BrandName')");
        // Show message when user added
        print_r($mysqli);
        echo "Item added successfully. <a href='index.php'>View Users</a>";
        
    }
    ?>
</body>
</html>