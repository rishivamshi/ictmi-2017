<?php

//redirect function
function returnheader($location){
	$returnheader = header("location: $location");
	return $returnheader;
}

if(!strlen($_SESSION["SESS_MEMBER_ID"]) > 0){

	//redirect
	returnheader("login.php");
}

?>