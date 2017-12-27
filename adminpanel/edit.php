<?php
// including the database connection file
include_once("dbconfig.php");
  include_once("header.php");

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];    
    
    // checking empty fields
    if(empty($name) || empty($phone) || empty($email)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($phone)) {
            echo "<font color='red'>phone field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE contact SET name='$name',phone='$phone',email='$email' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM contact WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $phone = $res['phone'];
    $email = $res['email'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>

    <div class="container jumbotron ">
    <form name="form1" method="post" action="edit.php">
    
            	<div class="form-group">
                <label for="usr">Name:</label>
                <td><input type="text" name="name"  class="form-control"  value="<?php echo $name;?>">
       
          
            <label for="usr">mobile_number:</label>
                <td><input type="text" name="phone"class="form-control"  value="<?php echo $phone;?>">
         
             <label for="usr">Email:</label>
                <td><input type="text" name="email"class="form-control"  value="<?php echo $email;?>">
         
             <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
         </br>

              <input type="submit" name="update" class="btn btn-primary" value="Update">
    
    </form>

</div>


</body>
</html>