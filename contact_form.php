<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdesky";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    		$name             =     $_POST['name'];
            $phone            =     $_POST['phone'];
            $email            =     $_POST['email'];
            $message          =     $_POST['message'];
            $subject          =     $_POST['subject'];        

$sql = "INSERT INTO contact(name,phone,email,message,subject)VALUES('".$name."','".$phone."' ,'".$email."','".$message."' ,'".$subject."')";

if($conn->query($sql))
{
    echo 1;
    $from = 'From: webdesky.com'; 
    $to = 'hr@webdesky.com'; 
    $subject = 'Customer Inquiry';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
 

}
?>
