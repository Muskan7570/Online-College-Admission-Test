<?php
session_start();
error_reporting(1);
include 'header.php';
include('../connect.php');

$current_date = date('Y-m-d');

if(isset($_POST["btnsubmit"]))
{

//Get application ID
function applicationID(){
$string = (uniqid(rand(), true));
return substr($string, 0,5);
}
	
$applicationID = "ADM/".date("Y")."/".applicationID();		

$fullname = mysqli_real_escape_string($conn,$_POST['txtfullname']);
$gender = mysqli_real_escape_string($conn,$_POST['cmdgender']);
$phone = mysqli_real_escape_string($conn,$_POST['txtphone']);
$email = mysqli_real_escape_string($conn,$_POST['txtemail']);
$state = mysqli_real_escape_string($conn,$_POST['txtstate']);
$course = mysqli_real_escape_string($conn,$_POST['cmdcourse']);

$credential='upload/Result-Report-card-software.png';
$status='0';

	
//check if  email already exist
$sql_u = "SELECT * FROM admission WHERE email='$email'";
$res_u = mysqli_query($conn, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
$msg_error = "Email already exist";

}else {
$sql = "INSERT INTO admission (fullname,gender,phone,email,state,course,status,date_admission,applicationID)VALUES( '$fullname','$gender','$phone','$email','$state','$course','$status','$current_date','$applicationID')";
 
 if ($conn->query($sql) === TRUE) {
 
$_SESSION['email']=$email;
$_SESSION['fullname']=$fullname;
$_SESSION['ApplicationID']=$applicationID;

header("Location: upload.php"); 
    }else { 
?>
<script>
alert('Problem Occured , Try Again');

</script>
<?php
}
}
}
?>

<title>Application Form| Online College Admission Test</title>
<?php if ($msg <> "") { ?>
  <style type="text/css">
<!--
.style1 {
	font-size: 12px;
	color: #FF0000;
}
-->
</style>
<div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
  <button data-dismiss="alert" class="close" type="button">x</button>
  <p><?php echo $msg; ?></p>
</div>
<?php } ?>
<p><h4><?php echo "<p> <font color=red font face='arial' size='3pt'>$msg_error</font> </p>"; ?></h4>  </p>
  <h4><?php echo "<p> <font color=green font face='arial' size='3pt'>$msg_success</font> </p>"; ?></h4>  </p>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="well contact-form-container">
        <form class="form-horizontal contactform" action="" method="post" name="f" >
          <fieldset>
	          <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Fullname:
                <input type="text"  id="pass1" class="form-control" name="txtfullname" maxlength="32" pattern="[A-Z a-z][A-Z a-z]{1,32}"value="<?php if (isset($_POST['txtfullname']))?><?php echo $_POST['txtfullname']; ?>" required>
              </label>
            </div>
			      <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Gender:
               <select name="cmdgender" id="gender" class="form-control" required>
                  <option value="">--Select Gender--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
               </select>
              </label>
            </div>
			      <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Phone:
                <input type="text"  id="pass1" class="form-control" name="txtphone"  pattern="[6-9]{1}[0-9]{9}" value="<?php if (isset($_POST['txtphone']))?><?php echo $_POST['txtphone']; ?>" required>
              </label>
            </div>
				    <div class="form-group">
              <label class="col-lg-12 control-label" for="uemail">Email:
                <input type="email" name="txtemail" class="form-control" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  value="<?php if (isset($_POST['txtemail']))?><?php echo $_POST['txtemail']; ?>" required>
              </label>
            </div>
				    <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">State:
                <input type="text"  id="pass1" class="form-control" name="txtstate" maxlength="32" pattern="[A-Z a-z][A-Z a-z]{1,32}" value="<?php if (isset($_POST['txtstate']))?><?php echo $_POST['txtstate']; ?>" required>
              </label>
            </div>
			      <div class="form-group">
              <label class="col-lg-12 control-label" for="pass1">Courses:
                <select name="cmdcourse" id="course" class="form-control" required="">
                  <option value="">--SelectCourse--</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Pharmacy">Pharmacy</option>
                  <option value="Business">Business</option>
                  <option value="Computer Applications">Computer Applications</option>
                </select>
              </label>
            </div>
            <div style="height: 10px;clear: both"></div>
            <div class="form-group">
              <div class="col-lg-10">
                <button class="btn btn-primary" type="submit" name="btnsubmit">Submit</button> 
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
