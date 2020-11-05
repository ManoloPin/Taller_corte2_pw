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

 


