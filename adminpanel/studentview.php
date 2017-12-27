
<?php
//including the database connection file
include_once("dbconfig.php");
 include_once("header.php");
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM member ORDER BY id DESC"); // using mysqli_query instead
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
            <td>Email Adrees:</td>
            <td>Phone Number:</td>
           <td>Experience:</td>
           <td>Upload Resume</td>
            <td>Skill:</td>
         
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            
            echo "<td>".$res['fname']."</td>";
            echo "<td>".$res['lname']."</td>"; 
            echo "<td>".$res['gender']."</td>"; 
            echo "<td>".$res['contact']."</td>";  
            echo "<td>".$res['picture']."</td>"; 
            echo "<td>".$res['password']."</td>"; 
           
            echo "<td>| <a href=\"studentdelete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";       
        }
        ?>
    </table>

</div>
</div>
</body>
</html>

