<html>
<head>
    <title>Add the Data</title>
</head>
 
<body>
<?php

include_once("db.php");
 
if(isset($_POST['Submit'])) {    
    $name = $_POST['productName'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
        
    
    if(empty($name) || empty($description) || empty($quantity)) {                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($description)) {
            echo "<font color='red'>description field is empty.</font><br/>";
        }
        
        if(empty($quantity)) {
            echo "<font color='red'>qauntity field is empty.</font><br/>";
        }
        
        
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        
        $result = mysqli_query($mysqli, "INSERT INTO product(name,desescription,quantity) VALUES('$name','$description','$quantity')");
        
        
        echo "<font color='green'>successfully data add.";
        echo "<br/><a href='home.php'>View Result</a>";
    }
}
?>
</body>
</html>