<?php
require("controller/exe.php");

if(isset($_GET['req'])){
	$resp=httpGet($_GET['req']);
	echo $resp;
}
 


