<?php
require("controller/exe.php");

if(isset($_GET['req'])){
	$resp=httpGet($_GET['req']);
	echo $resp;
}else
	if(isset($_GET['req2'])){
	$resp2=httpGet2($_GET['req2']);
	echo $resp2;
}
else
	if(isset($_GET['req3'])){
	$resp3=httpGet3($_GET['req3']);
	echo $resp3;
}
else
	if(isset($_GET['req4'])){
	$resp4=httpGet3($_GET['req4']);
	echo $resp4;
}
 


