


<html>
<head><title>IPG Connect Sample for PHP</title></head>
<body>
<p><h1>Order Form</h1>
<form method="post" action="https://test.ipg-online.com/connect/gateway/processing">
<input type="hidden" name="txntype" value="sale">
<input type="hidden" name="timezone" value="Europe/Berlin"/>
<input type="hidden" name="txndatetime" value="<?php echo getDateTime() ?>"/>
<input type="hidden" name="hash_algorithm" value="HMACSHA256"/>
<input type="hidden" name="hashExtended" value="<?php echo createExtendedHash("13.00","978") ?>"/>
<input type="hidden" name="storename" value="10123456789"/>
<input type="hidden" name="checkoutoption" value="combinedpage"/>
<input type="hidden" name="paymentMethod" value="M"/>
<input type="text" name="chargetotal" value="13.00"/>
<input type="hidden" name="currency" value="978"/>
<input type="hidden" name="responseFailURL" value="<?php echo base_url('index/lloyds_failure') ?>"/>
<input type="hidden" name="responseSuccessURL" value="<?php echo base_url('index/lloyds_success',$total) ?>"/>

<input type="submit" value="Submit">
</form>
</body>
</html>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script>

setTimeout(function(){ 
   
    $("#submit").click();
    }, 
    2000);
</script>
