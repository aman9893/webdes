
<?php
//including the database connection file
include_once("dbconfig.php");
 include_once("header.php");
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM contact ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>viewpage</title>
</head>
 
<body>

<div class="container jumbotron">
  <div class="table-responsive"> 
    <table  class="table  .table-hover" >
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
            <td>phone</td>
            <td>Email</td>
           <td> message</td>
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['phone']."</td>";
            echo "<td>".$res['email']."</td>"; 
            echo "<td>".$res['message']."</td>"; 
            
            
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>

</div>
</div>
</body>
</html>

