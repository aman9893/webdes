<?php include 'header.php';?>

<br>
<br>

<br>
<br>

 
<form name="reg" class="container"  action="carrerform.php" onsubmit="return validateForm()" method="post"   enctype="multipart/form-data">



          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
 
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'We Will contact Soon Success';
          }
          ?>  


<div class="row">
<div class="col-md-6">

<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" name="fname" id="usr">
</div>
<div class="form-group">
  <label for="usr"> Email Adrees:</label>
  <input type="email" class="form-control" name="lname" >
</div>

<div class="form-group">
  <label for="usr"> Phone Number:</label>
  <input type="number" class="form-control" name="gender" >
</div>
<div class="form-group">
  <label for="usr">Experience:</label>
  <input type="number" class="form-control" name="contact" >
</div>
<div class="form-group">
  <label for="usr">Upload Resume :</label>
  <input type="file" name="pic" id="fileToUpload">
</div>
<div class="form-group">
  <label for="usr">Skill:</label>
  <input type="text" class="form-control" name="password" id="usr">
</div>


   <input name="submit" class=" btn btn-primary"s  type="submit" value="Submit" />
 
  </form>

  </div>

  </div>
</body>
</html>
<?php include 'footer.php';?>