<?php

include_once("db.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];

    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
          
    
    if(empty($name) || empty($description) || empty($quantity)) {                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($des)) {
            echo "<font color='red'>description field is empty.</font><br/>";
        }
        
        if(empty($quantity)) {
            echo "<font color='red'>qauntity field is empty.</font><br/>";
        }  
         echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        exit();
    } else {    
     
        $result = mysqli_query($mysqli, "UPDATE product SET name='$name',description='$description',quantity='$quantity' WHERE id=$id");
        
       
        header("Location: home.php");
    }
}
?>
<?php

$id = $_GET['id'];
 

$result = mysqli_query($mysqli, "SELECT * FROM product WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $des = $res['description'];
    $quantity = $res['quantity'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>description</td>
                <td><input type="text" name="description" value="<?php echo $des;?>"></td>
            </tr>
            <tr> 
                <td>quantity</td>
                <td><input type="text" name="quantity" value="<?php echo $quantity;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>