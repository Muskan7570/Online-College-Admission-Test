<link rel="stylesheet" href="css/pay.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form class = container-pay>
    <input type="textbox" name="name" id="name" placeholder="Enter your name"/><br/><br/><br>
    <input type="textbox" name="amt" id="amt" placeholder="Enter amt"/><br/><br/>
    <input type="button" name="btn" id="btn" value="Pay Now" onclick="pay_now()"/>
</form>

<script>
    function pay_now(){
        var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt+"&name="+name,
               success:function(result){
                   var options = {
                        "key": "rzp_test_fCmj9CdnP20Z3J", 
                        "amount": 110000, 
                        "currency": "INR",
                        "name": "United Group of Institutions",
                        "description": "Test Transaction",
                        "image": "image/ugilogo.png",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>