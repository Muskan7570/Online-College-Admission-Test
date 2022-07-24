

<?php
session_start();
error_reporting(0);
include('../connect.php');

$email = $_SESSION['uemail'];

?>
      <div id="content">
        <div class="content_item" class="container">
          <div class="col-md-12">
            <div class="well well-md">
              <p>
                <?php 

$sql = "SELECT * FROM admission WHERE email = '$email' AND status = '1'";
  $result = mysqli_query($conn, $sql);
($row = mysqli_fetch_assoc($result));
if ( $row['status'] == '1') {
				 ?>
              </p>
           
              <h3>Letter of Admission to <?php echo $row['fullname']?></h3>
                      <p>Dear <?php echo $row['fullname']."," ?></p>
                      <p style = "color:blue"><i>
                        Congratulations! We are pleased to offer you admission to the UNITED GROUP OF INSTITUTIONS, ALLAHABAD</p>
                      <p>
                        PROCEDURE FOR PAYMENT OF ACCEPTANCE FEE, ACADEMIC CLEARANCE & PAYMENT OF TUITION FEE

YOU ARE EXPECTED TO PAY THE ACCEPTANCE FEE ON OR BEFORE 7TH AUGUST, 2021. PLEASE NOTE THAT THE ACCEPTANCE FEE IS NON-REFUNDABLE AND DOES NOT GUARANTEE YOUR ADMISSION. NOTE THAT UNDER NO CIRCUMSTANCE WOULD THE DATE FOR THE PAYMENT OF ACCEPTANCE FEE BE EXTENDED.
<ol>
<li>Pay your acceptance fee with an ATM card.</li>
<li>Print your acceptance  fee receipt and clearance schedule.</li>
<li>Keep your receipt and clearance schedule for registration.</li>
<li>Deadline for payment of tuition fee is 24TH JULY, 2022.</li>
</ol>
<h3>THE FOLLOWING DOCUMENTS ARE REQUIRED FOR REGISTRATION:</h3>
<ol>
<li>UPSEE Result or IIT-JEE Mains Result. (Original and 4 Photocopies)</li>
<li>Application Slip.</li>
<li>Admission Slip.</li>
<li>Acceptsance Fee Receipt.</li>
<li>Receipt for payment made for change of Course/Institution. (IF APPLICABLE)</li>
</ol>


<b>TUITION FEE MUST BE PAID BY 24TH JULY, 2022 FAILING WHICH YOU FORFEIT THIS PROVISIONAL OFFER OF ADMISSION.</b><br><br><br>

SIGNED<br>
---------------------<br>
REGISTRAR
                      </p>

                  <?php }else{ ?>
                    <h4 style="color:red">Sorry, no Admission yet. Check back later.</h4>
                    <?php } ?>
             
            </div>  
      </div>
      </div><!--close content-->  
    </div><!--close site_content-->  
 



