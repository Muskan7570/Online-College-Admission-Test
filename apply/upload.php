<?php
session_start();
error_reporting(0);
include 'header.php';
include('../connect.php');



$sql = "select * from admission where email='".$_SESSION['email']."'"; 
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$photo=$row['photo'];


if(isset($_POST['btnupload'])){
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
	move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];

 $sql = " update admission set ssce='$location' where email='".$_SESSION['email']."'";
   $_SESSION['reg_success']=$location;
   if (mysqli_query($conn, $sql)) {

    ?>
									


	<?php	
}
}

?>

<title>Upload Image| </title>
	<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style2 {color: #FF0000}
-->
    </style>
	<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="well contact-form-container">
       	<form  class="wizard-big" method="post"  enctype="multipart/form-data">
          <fieldset> 
			      <div class="form-group">Fullname: <?php echo $_SESSION['fullname']; ?></div>
            <div class="form-group">Email: <?php echo $_SESSION['email']; ?></div>
            <div class="form-group">Application ID: <?php echo $_SESSION['ApplicationID']; ?></div>
			      <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1"><span class="controls"><br> <br>
                <span class="style2">N/B: Copy out your email and Application ID</span> <br><br>
              </label>
            </div>
            <div class="form-group">
              <button class="btn btn-primary" onclick="myFunction()">
              Finish
              </button>  
              <p id="demo"></p>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
function myFunction() {
  alert("User Registered Successfully")
}
</script>
