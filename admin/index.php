

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2>Event card Admin Login</h2>
  <div class="panel panel-primary">
    <div class="panel-heading">Login Admin</div>
    <div class="panel-body">




<form name="login"   method="post" action="">
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>Welcome back.</h4>
            <input type="text" id="userName" class="form-control   input-sm chat-input" name="userid" placeholder="username" />
            </br>
            <input type="password" id="userPassword" class="form-control   input-sm chat-input"  name="pswrd" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
              <input type="button" class="btn btn-primary" onclick="check(this.form)" name="save" value="Login"/>
              <input type="reset" class="btn btn-danger" value="Cancel"/>
          </from>
            </span>
            </div>
            </div>
        
        </div>
    </div>
</div>


<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "admin" && form.pswrd.value == "admin")
  {
    window.open('../adminpanel/index.php',"_self")/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}

</script>


</body>
</html>