<html>
<head>
<title> Custom Form Kit </title>
</head>
<body>
<center>
{{-- 
	@include('crypto') --}}

	<?php include('crypto')?>
	<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='	FB39DAA6A1AC1A97A28A19208F42C4DB';//Shared by CCAVENUES
	$access_code='	AVWI28KC18AT80IWTA';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.urlencode($value).'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

