
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>EMBO CONFERENCE</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/hover.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/jquery.fancybox.css" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">



<script type="text/javascript">

function get_radio_value(obj)
{	
 if(obj){
	var rad_val='';
	for (var i=0; i < obj.length; i++)
  	{
	   if (obj[i].checked)
	   {
		  var rad_val = obj[i].value;
	   }
   	}
	//alert(obj.length+"~"+rad_val);
 return  rad_val;
 }
}




function enable_wiretransfer()
{
	var registerform=document.registerform;
	if(get_radio_value(document.registerform.paymentmethod)=='wiretransfer')
	{
		
		document.registerform.neftno.disabled = false;	
		document.registerform.neftdate.disabled = false;	
		document.registerform.neftbank.disabled = false;		
	}
	else
	{
		document.registerform.neftno.value= "";
		document.registerform.neftdate.value = "";
		document.registerform.neftbank.value = "";
		document.registerform.neftno.disabled = true;	
		document.registerform.neftdate.disabled = true;	
		document.registerform.neftbank.disabled = true;	
	}
}



function enable_room()
{
	var registerform=document.registerform;
	if(get_radio_value(document.registerform.accommodation)=='Yes')
	{
		document.registerform.room [0].disabled=false;
		document.registerform.room [1].disabled=false;
		
	}
	else
	{
		document.registerform.room [0].checked=false;
		document.registerform.room [1].checked=false;
		document.registerform.room [0].disabled=true;
		document.registerform.room [1].disabled=true;
		
	}
}

function disable_accommodation() {
	if(document.getElementById('category').value==""){
		document.registerform.accommodation [0].disabled=true;
		document.registerform.accommodation [1].disabled=true;
	} else{
		document.registerform.accommodation [0].disabled=false;
		document.registerform.accommodation [1].disabled=false;
		} 
	
}


function validate() {
	//enable_accompanying();
	enable_wiretransfer();
	//enable_presentation();
	enable_room();
	calculateFee();
        disable_accommodation();
}

function calculateFee() {
	
	var category = document.getElementById('category').value;
	var accommodation = get_radio_value(document.registerform.accommodation);
        var room = get_radio_value(document.registerform.room);
	var fee = "";
	if(category !=""){
		if(category == "Student/Postdoc") {
			if((accommodation == "") || (accommodation == "No")) {
				fee = "EUR 250";
			} 
			if((accommodation == "Yes")) {
                            if(room == 'Twin')
				fee = "EUR 450";
                            if(room == 'Single')
				fee = "EUR 550";
			}   
		}
		
		if(category == "Academicians") {
                    if((accommodation == "") || (accommodation == "No")) {
				fee = "EUR 400";
			} 
			if((accommodation == "Yes")) {
                            if(room == 'Twin')
				fee = "EUR 500";
                            if(room == 'Single')
				fee = "EUR 600";
			}   
		}
	
		
		if(category == "Industry Delegates") {
			fee = "EUR 800";
			
		}
		document.registerform.fee.value = fee;
		
	}
		
}

</script>


</head>
<body onload="validate();" bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="bgcolor">
<!-- Save for Web Slices (inner pages.psd) -->
<div class="page-wrapper">
 	
   
 	
    <!-- Main Header -->
    <header class="main-header style-one">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container clearfix">
            	
                <!-- Top Left -->
                <div class="top-left pull-left clearfix">
                	<div class="email pull-left"><a href="mailto:embotvm2017@rgcb.res.in"><span class="f-icon flaticon-email145"></span> embotvm2017@rgcb.res.in</a></div>
                    <div class="phone pull-left"><a href="#"><span class="f-icon flaticon-phone325"></span> 0471-2529400</a></div>
                </div>
                
                <!-- Top Right
                <nav class="top-right pull-right">
                	<ul>
                    	<li><a href="#">SITE MAP</a></li>
                        <li><a href="#">SHORTCODES</a></li>
                        <li><a href="#">SUPPORT</a></li>
                    </ul>
                </nav>
                 -->
            </div>
        </div>
        
        <!-- Search Box -->
        <div class="search-box toggle-box">
        	<div class="auto-container clearfix">
                
                <!-- Search Form -->
               
            
            </div>
        </div>
        
        
             <div class="header-lower">
        	<div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo"><a href="index.php">
               <h2 style="position: relative;
  display: inline-block;
  color:#0099dd;
  line-height: 30px;
  font-size: 30px;
  
  text-transform: uppercase;
  font-weight: 800;"> EMBO Conference: </h2> <font size='4' style="color:#0099dd;"> The micro and metabolic regulators in plants (February 1-4, 2017) </font>
                </a></div>
                
                <!--Right Container-->
                <div class="right-cont clearfix">
                	
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                       
                    </nav>
                    <!-- Main Menu End-->
                </div>
                
            </div>
            
        </div>
        
        
    </header>
        


 

<?php
error_reporting(0);
$fnameErr = $lnameErr = $titleErr = $addrErr = $emailErr =$emailconErr = $affErr = $memErr = $cityErr = $zipErr = $memnoErr = $phoneErr = $emailcomErr = 
$lmErr= $amErr= $olmErr = $smErr = $stateErr = $countryErr = $categoryErr = $abstractErr=
$accommodationErr=  $acctitleErr = $accfnameErr = $acclnameErr = $paymentmethodErr = $fee = $genderErr = 
$neftnoErr = $neftdateErr = $neftbankErr = $wiretransferErr = "";





function output ( $data ) {
	return stripslashes(htmlentities($data, ENT_QUOTES) );
}

function escape_value($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// check if form is submitted
if($_SERVER['REQUEST_METHOD'] == "POST") {
	   
		
		
		// check for first name;
		if ( preg_match ("/^[a-zA-Z\.\'\-_\s]{2,30}$/", stripslashes( trim ( $_POST['first_name'] ) ) ) ) {
			$fname = escape_value ( $_POST['first_name'] );
		}
		else {
			$fname = FALSE;
			$fname = escape_value ( $_POST['first_name'] );
			$fnameErr = "missing!";
			
		}
		
		// check for last name;
		if ( preg_match ("/^[a-zA-Z\.\'\-_\s]{1,30}$/", stripslashes( trim ( $_POST['last_name'] ) ) ) ) {
			$lname = escape_value ( $_POST['last_name'] );
		}
		else {
			$lname = FALSE;
			$lname = escape_value ( $_POST['last_name'] );
			$lnameErr = "missing!";
		}
		
		
		
		// check for address
		if (  trim($_POST['address']) != "" )  {
			$address =  trim($_POST['address']);
			
		}
		else {
			$address = FALSE;
			$addrErr = "missing!";
			
		}
		
		// check for city
		if (  preg_match ("/^[a-zA-Z\.\'\-_\s]{2,30}$/", stripslashes( trim ( $_POST['city'] ) ) ) ) {
			$city = escape_value ( $_POST['city'] );
		}
		else {
			$city = FALSE;
			$city = escape_value ( $_POST['city'] );
			$cityErr = "missing!";
			
		}
		
		// check for state
		if (  preg_match ("/^[a-zA-Z\.\'\-_\s]{2,30}$/", stripslashes( trim ( $_POST['state'] ) ) ) ) {
			$state = escape_value ( $_POST['state'] );
		}
		else {
			$state = FALSE;
			$state = escape_value ($_POST['state'] );
			$stateErr = "missing!";
			
		}
		
		// check for country
		if (  preg_match ("/^[a-zA-Z\.\'\-_\s]{2,30}$/", stripslashes( trim ( $_POST['country'] ) ) ) ) {
			$country = escape_value ( $_POST['country'] );
		}
		else {
			$country = FALSE;
			$country = escape_value ($_POST['country'] );
			$countryErr = "missing!";
			
		}
		
		// check for zip
		if (trim( $_POST['zip'] != "" ))  {
			$zip = escape_value ( $_POST['zip'] );
		}
		else {
			$zip = FALSE;
			$zip = escape_value ($_POST['zip'] );
			$zipErr = "missing!";
			
		}
		
		
		
		// check for email
		if ( preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i", stripslashes( trim ( $_POST['email'] ) ) ) ) {
			$email = escape_value ( $_POST['email'] );
		}
		else {
			$email = FALSE;
			$email = escape_value ($_POST['email'] );
			$emailErr = "email format error!";
			
		}
		
		// check for email
		if ( preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i", stripslashes( trim ( $_POST['emailcon'] ) ) ) ) {
			$emailcon = escape_value ( $_POST['emailcon'] );
		}
		else {
			$emailcon = FALSE;
			$emailcon = escape_value ($_POST['emailcon'] );
			$emailconErr = "email format error!";
			
		}
		if($emailErr == "" && $emailconErr == "") {
			if($email != $emailcon) {
				$emailcomErr = "Your email did not match the confirmed email.";
				
			}
		}
		
			
		// check for wiretransfer
		if ( $_POST['paymentmethod'] != "") {
			$paymentmethod =  ( $_POST['paymentmethod'] );
			if ($paymentmethod == 'wiretransfer') {
					       $paymentmethodsec = 'checked="checked"';
					       $paymentmethodfir = '';
						if (trim( $_POST['neftno'] != "" ))  {
							$neftno = escape_value ( $_POST['neftno'] );
						}
						else {
							$neftno = FALSE;
							$neftno = escape_value ($_POST['neftno'] );
							$neftnoErr = "missing!";
						}
		                 
	    
						if ( preg_match ("/^[0-9]{2}-[0-9]{2}-[0-9]{2}$/", stripslashes( trim ( $_POST['neftdate'] ) ) ) ) {
							$neftdate = escape_value ( $_POST['neftdate'] );
						}
						else {
							$neftdate = FALSE;
							$neftdate = escape_value ($_POST['neftdate'] );
							$neftdateErr = "missing!(dd-mm-yy)";
						}
		
		
						if (  preg_match ("/^[a-zA-Z\.\'\-_\s]{2,40}$/", stripslashes( trim ( $_POST['neftbank'] ) ) ) ) {
							$neftbank = escape_value ( $_POST['neftbank'] );
						}
						else {
							$neftbank = FALSE;
							$neftbank = escape_value ($_POST['neftbank'] );
							$neftbankErr = "missing!";
						}
		       
		                if(($neftnoErr == "")&& ($neftdateErr == "") && ($neftbankErr == "")) {
		                	$wiretransferErr = "";
		                } else {
		                	$wiretransferErr = "missing";
		                }
					        
					    } elseif ($paymentmethod == 'DD') {
					        $paymentmethodsec = '';
					        $paymentmethodfir = 'checked="checked""';
	       
					    } 
			}
		else {
			$paymentmethod = FALSE;
			$paymentmethodErr = "missing!";
			
		}
		
		
        
//	// check for payment method 
//		if ( $_POST['paymentmethod'] != "") {
//			$paymentmethod = escape_value ( $_POST['paymentmethod'] );
//			if ($paymentmethod == 'DD') {
//					        $paymentmethodfir = 'checked="checked"';
//					        $paymentmethodsec = '';
//					        
//					    } elseif ($paymentmethod == 'wiretransfer') {
//					        $paymentmethodfir = '';
//					        $paymentmethodsec = 'checked="checked""';
//	       
//					    } 
//			}
//		else {
//			$paymentmethod = FALSE;
//			$paymentmethodErr = "missing!";
//			
//		}
		
		//check for category
		if ( $_POST['category'] != "") {
			$category =  ( $_POST['category'] );
			
			 if ($category == 'Student/Postdoc') {
				        $cfir = 'selected="selected"';
				        $csec = '';
				        $cthi = '';				        
				    } elseif ($category == 'Academicians') {
				        $cfir = '';
				        $csec = 'selected="selected"';
				        $cthi = '';
				    } elseif ($category == 'Industry Delegates') {
				        $cfir = '';
				        $csec = '';
				        $cthi = 'selected="selected"';				       
				    } 
				    
	  	}
		else {
			$category = FALSE;
			$categoryErr = "missing!";
		}
		
		
		            
                
		// check for accommodation 
		if ( $_POST['category'] != "") {
			$category = escape_value ( $_POST['category'] );
			 if (($category == 'Student/Postdoc') or ($category == 'Academicians')) {
					if ( $_POST['accommodation'] != "") {
						$accommodation  = escape_value ($_POST['accommodation'] );
						if ($accommodation == 'Yes') {
								        $acomfir = 'checked="checked"';
								        $acomsec = '';
								        
								        // check for accommodation 
						} elseif ($accommodation == 'No') {
								        $acomfir = '';
								        $acomsec = 'checked="checked""';
				       
					        } 
						} else {
							
						    $accommodation = FALSE;
                                                    $accommodationErr = "missing!";
						}
			      }
		}
                
                // check for room 
		if ( $_POST['category'] != "") {
			$category = escape_value ( $_POST['category'] );
			 if (($category == 'Student/Postdoc') or ($category == 'Academicians')) {
					if ( $_POST['accommodation'] != "") {
						$accommodation  = escape_value ($_POST['accommodation'] );
                                                if($accommodation == 'Yes') {
                                                    if ( $_POST['room'] != "") {
                                                        $room  = escape_value ($_POST['room'] );
                                                        if ($room == 'Twin') {
								        $roomfir = 'checked="checked"';
								        $roomsec = '';
								        
								        // check for accommodation 
                                                        } elseif ($room == 'Single') {
								        $roomfir = '';
								        $roomsec = 'checked="checked""';				       
                                                        } 
                                                    } else {
							
                                                        $room = FALSE;
                                                        $roomErr = "missing!";
                                                    }
                                                }
                                        }
						
			    }
		}
			 				

			      
		
		function redirect($url){
		    if (!headers_sent()){    //If headers not sent yet... then do php redirect
		        header('Location: '.$url); exit;
		    }else{                    //If headers are sent... do java redirect... if java disabled, do html redirect.
		        echo '<script type="text/javascript">';
		        echo 'window.location.href="'.$url.'";';
		        echo '</script>';
		        echo '<noscript>';
		        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
		        echo '</noscript>'; exit;
		    }
		}
		
	// if all fields are fine

	if (($fnameErr == "") && ($lnameErr == "") &&  ($addrErr == "") 
	&& ($emailErr == "") && ($emailconErr == "") &&  ($cityErr == "")
	&& ($zipErr == "") &&  ($stateErr == "")
	&& ($countryErr == "") && ($categoryErr == "") &&  ($paymentmethodErr == "") 
	&& ($accommodationErr == "") &&  ($wiretransferErr == "")) {
				
	
	if($category !=""){
		if($category == "Student/Postdoc") {
			if(($accommodation == "") || ($accommodation == "No")) {
				$fee = "EUR 250";
			} 
			if(($accommodation == "Yes")) {
                            if(($room == "Twin")) 
                                    $fee = "EUR 450";
                            if(($room == "Single")) 
                                    $fee = "EUR 550";
			}   
		}
		
		if($category == "Academicians") {
			if(($accommodation == "") || ($accommodation == "No")) {
				$fee = "EUR 400";
			} 
			if(($accommodation == "Yes")) {
				if(($room == "Twin")) 
                                    $fee = "EUR 500";
                                if(($room == "Single")) 
                                    $fee = "EUR 600";
			}   
		}	
		
		if($category == "Industry Delegates") {
			$fee = "EUR 800";
			
		}
		
	}
	
	
	// Register the user in the database... 
         
    	//include 'dbconnect.php'; // Connect to the db. 
        
            include 'dbconnect.php'; // Connect to the db. 
	        $date = date("d-m-Y-H:i:s");
	        $stamp = date("dmyis");
			$ip = $_SERVER['REMOTE_ADDR'];
			$password = "$stamp$ip";
			$password = str_replace(".", "", "$password");
			
	        // Make the query: 
	        $sql = "INSERT INTO users (fname,lname,email,emailcon,address,city,state,country,
	        pincode,date,category,room,accommodation,paymentmethod,fees,neft_no,neft_date,neft_bank,registrationid) values 
	        ( '$fname', '$lname', '$email', '$emailcon','$address', '$city','$state','$country',
	         '$zip','$date','$category','$room','$accommodation','$paymentmethod','$fee','$neftno','$neftdate','$neftbank','$password') ";         
	        
	       
			if (!mysql_query($sql,$con)){
				if (mysql_error() == 1062) {
					redirect("error.php");
					//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=error.php">';    
 					//header("location:error.php");
					//exit();
	        		
	    		} else {
	       		 die(mysql_error());
	    		}
	 		} else {
	 			redirect("icamtmconferencemail.php?name=$fname&lname=$lname&email=$email&password=$password");
	 			//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=success.php">'; 
	 			//header("location:success.php");
	 			//exit();
	 			//header("location:http://www.tarmir.rgcb.res.in/iacrconferencemail.php?name=$fname&email=$email&password=$password");
			
	 		}
	}
	 		
			mysql_close($con);

	 // End of the main Submit conditional. 
}
?>
    
 <table border="0" align="center" cellpadding="10">
      <tr>
        <td align="" valign="top" style="background-color:f0f0f0;">
        <div style="margin-left:120px;margin-top:10px;margin-right:10px;margin-bottom:10px;">
        <form action="register1.php" method="post" class="register" id="registerform" name="registerform">
        <h3 class="registerh1">Registration</h3>
        <br/>
        
        <table width="" class="list_table"  cellspacing="3" cellpadding="3" id="form_table" style="float:center">
<tbody>

<tr id="r1">
<td style="padding-right:18px">
<font color='red'>* </font>First Name
</td>
<td>
<input class="text" tabindex="2" type="text" autocomplete="on" name="first_name" maxlength="30"
value="<?php if ( isset($_POST['first_name']) ) echo output( $_POST['first_name'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $fnameErr;?></span>
</td>
</tr>
<tr id="sep"><td colspan="4"></td></tr>

<tr id="r2">
<td style="padding-right:18px">
<font color='red'>* </font>Last Name
</td>
<td>
<input class="text" tabindex="3" type="text" autocomplete="on" name="last_name" maxlength="30"
value="<?php if ( isset($_POST['last_name']) ) echo output( $_POST['last_name'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $lnameErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td colspan="1"><font color='red'>* </font>Address</td>
<td colspan="1">
<textarea class="textarea" tabindex="6" rows="6" cols="25" name="address">
<?php if ( isset($_POST['address']) ) echo output( $_POST['address'] ); ?> 
</textarea>
</td>
<td>
<span style="color:red;"><?php echo $addrErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r2">
<td>
<span style="float:right;font-size:10px;color:red;font-family:tahoma;padding-right:20px" id="erre">
</span>
<font color='red'>* </font>City
</td>
<td>
<input class="text"  tabindex="7" type="text" autocomplete="on" name="city" maxlength="35"
value="<?php if ( isset($_POST['city']) ) echo output( $_POST['city'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $cityErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td>
<span style="float:right;font-size:10px;color:red;font-family:tahoma;padding-right:20px" id="erre">
</span>
<font color='red'>* </font>State
</td>
<td>
<input class="text"  tabindex="8" type="text" autocomplete="on" name="state" maxlength="35"
value="<?php if ( isset($_POST['state']) ) echo output( $_POST['state'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $stateErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r2">
<td>
<span style="float:right;font-size:10px;color:red;font-family:tahoma;padding-right:20px" id="erre">
</span>
<font color='red'>* </font>Country
</td>
<td>
<input class="text"  tabindex="9" type="text" autocomplete="on" name="country" maxlength="35"
value="<?php if ( isset($_POST['country']) ) echo output( $_POST['country'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $countryErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td>
<span style="float:right;font-size:10px;color:red;font-family:tahoma;padding-right:5px" id="errd">
</span>
<font color='red'>* </font>Pincode 
</td>
<td>
<input class="text"  tabindex="10" type="text" autocomplete="on" name="zip" id="zip" maxlength="20"
value="<?php if ( isset($_POST['zip']) ) echo output( $_POST['zip'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $zipErr;?></span>
</td>
</tr>


<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td><font color='red'>* </font>Email</td>
<td>
<input class="text" tabindex="12" type="text" name="email" maxlength="50" autocomplete="on"
value="<?php if ( isset($_POST['email']) ) echo output( $_POST['email'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $emailErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r2">
<td><font color='red'>* </font>Confirm Email</td>
<td>
<input tabindex="13" class="text" type="text" name="emailcon" maxlength="50" autocomplete="on"
value="<?php if ( isset($_POST['emailcon']) ) echo output( $_POST['emailcon'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $emailconErr; echo $emailcomErr?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td><font color='red'>* </font>Select category</td>
<td>
<select class="select" name="category" id="category" onchange="calculateFee();disable_accommodation();" tabindex="14">
  <option value="">Select</option>
  <option value="Student/Postdoc" <?php echo $cfir; ?> >Student/Postdoc</option>
  <option value="Academicians" <?php echo $csec; ?>> Academicians</option>
  <option value="Industry Delegates" <?php echo $cthi; ?>> Industry Delegates</option>
  
  </select>&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
<span style="color:red;"><?php echo $categoryErr;?></span>
</td>
</tr>


<tr id="sep"><td colspan="4"></td></tr>
<tr id="accommodationrow">
<td><font color='red'>* </font>Need accommodation <br/> </td>
<td>
<input type="radio" name="accommodation"  onclick="calculateFee(); enable_room();" value="Yes" <?php echo $acomfir; ?>>Yes
<input type="radio" name="accommodation" onclick="calculateFee();enable_room();" value="No" <?php echo $acomsec; ?>>No
</td>
<td>
<span style="color:red;"><?php echo $accommodationErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>
<tr id="accommodationrow">
<td><font color='red'>* </font>Room Type <br/> </td>
<td>
    <input type="radio" name="room" disabled="disabled"  onclick="calculateFee();" value="Twin" <?php echo $roomfir; ?>>Twin Room
    <input type="radio" name="room" disabled="disabled" onclick="calculateFee();" value="Single" <?php echo $roomsec; ?>>Single Room</td>
<td>
<span style="color:red;"><?php echo $roomErr;?></span>
</td>
</tr>


<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td><font color='red'>* </font>Payment method </td>
<td>
<input type="radio" name="paymentmethod" value="DD" <?php echo $paymentmethodfir; ?>  onclick="enable_wiretransfer();">Demand Draft
<input type="radio" name="paymentmethod" value="wiretransfer" <?php echo $paymentmethodsec; ?> onclick="enable_wiretransfer();">Wire Transfer
</td>
<td>
<span style="color:red;"><?php echo $paymentmethodErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td><font color='red'>* </font>NEFT number </td>
<td>
<input class="text" tabindex="" type="text" name="neftno" id="neftno" maxlength="30" autocomplete="off" disabled="disabled"
value="<?php if ( isset($_POST['neftno']) ) echo output( $_POST['neftno'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $neftnoErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td><font color='red'>* </font>NEFT Date: (dd-mm-yy)</td>
<td>
<input class="text" tabindex="" type="text" name="neftdate" id="neftdate" maxlength="8" autocomplete="off" disabled="disabled"
value="<?php if ( isset($_POST['neftdate']) ) echo output( $_POST['neftdate'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $neftdateErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td><font color='red'>* </font>NEFT Bank name: </td>
<td>
<input class="text" tabindex="" type="text" name="neftbank" id="neftbank" maxlength="40" autocomplete="off" disabled="disabled"
value="<?php if ( isset($_POST['neftbank']) ) echo output( $_POST['neftbank'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $neftbankErr;?></span>
</td>
</tr>


<tr id="sep"><td colspan="4"></td></tr>

<tr  id="categoryfee2">
<td><font color='red'>* </font>Registration Fee</td>
<td>
<input class="text" tabindex="" type="text" name="fee" id="fee" maxlength="10" autocomplete="off"
value="Rs.0.0" readonly="readonly">
</td>
<td>
<span style="color:red;"></span>
</td>
</tr>



<tr>
<td>
&nbsp;
</td>
</tr>

<tr>
<td colspan="4" style="padding:0px">
<div class="form_actions" id="continvites1" align="center"><span>
<input type="submit" class="action" tabindex="" value="Register">
</span>
</div>

</td>
</tr>
</tbody>
</table>
</form>
        
        </div>     
        </td>
      </tr>
    </table>
