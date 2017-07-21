
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ICAMTM CONFERENCE</title>
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


function enable_accompanying()
{
	var registerform=document.registerform;
	if(get_radio_value(document.registerform.accompanying)=='Yes')
	{
		
		document.registerform.acctitle.disabled = false;	
		document.registerform.accfname.disabled = false;	
		document.registerform.acclname.disabled = false;		
	}
	else
	{
		document.registerform.acctitle.value = "";
		document.registerform.accfname.value = "";
		document.registerform.acclname.value = "";
		document.registerform.acctitle.disabled = true;	
		document.registerform.accfname.disabled = true;	
		document.registerform.acclname.disabled = true;			
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

function enable_presentation()
{
	var registerform=document.registerform;
	if(get_radio_value(document.registerform.abstract)=='Yes')
	{
		document.registerform.presentation [0].disabled=false;
		document.registerform.presentation [1].disabled=false;
		document.registerform.award [0].disabled=false;
		document.registerform.award [1].disabled=false;
	}
	else
	{
		document.registerform.presentation [0].checked=false;
		document.registerform.presentation [1].checked=false;
		document.registerform.presentation [0].disabled=true;
		document.registerform.presentation [1].disabled=true;
		document.registerform.award [0].checked=false;
		document.registerform.award [1].checked=false;
		document.registerform.award [0].disabled=true;
		document.registerform.award [1].disabled=true;
	}
}

/*function disable_accommodation() {
	if(document.getElementById('category').value==""){
		document.registerform.accommodation [0].disabled=true;
		document.registerform.accommodation [1].disabled=true;
	} else if((document.getElementById('category').value=="Student") || (document.getElementById('category').value=="Research Fellows &Post Doctoral Fellows")) {
		document.registerform.accommodation [0].disabled=false;
		document.registerform.accommodation [1].disabled=false;
		} else {
			document.registerform.accommodation [0].checked=false;
			document.registerform.accommodation [1].checked=false;
			document.registerform.accommodation [0].disabled=true;
			document.registerform.accommodation [1].disabled=true;
		}
	
}*/

function validate() {
	enable_accompanying();
	enable_wiretransfer();
	enable_presentation();
	//disable_accommodation();
	calculateFee();
}

function calculateFee() {
	
	var category = document.getElementById('category').value;
	//var accommodation = get_radio_value(document.registerform.accommodation);
	//var accompanying = get_radio_value(document.registerform.accompanying);
	var fee = "";
	if(category !=""){
		if(category == "Student") {
			 	fee = "Rs. 4500";
		}
		if(category == "Practitioners") {
		 	fee = "Rs. 7000";
		}
		if(category == "Foreign delegates") {
		 	fee = "300 USD";
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
                	<div class="email pull-left"><a href="mailto:webmaster@rgcb.res.in"><span class="f-icon flaticon-email145"></span> webmaster@rgcb.res.in</a></div>
                    <div class="phone pull-left"><a href="#"><span class="f-icon flaticon-phone325"></span> 0471-2529588</a></div>
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
  color: #ec6e6e;
  line-height: 30px;
  font-size: 30px;
  padding: 15px 30px 10px 15px;
  text-transform: uppercase;
  font-weight: 800;"> ICAMTM Conference </h2>
                </a></div>
                
                <!--Right Container-->
                <div class="right-cont clearfix">
                	<div class="search-btn">
                    	<div class="f-icon flaticon-magnifying47"></div>
                        <span class="curve"></span>
                    </div>
                    
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
                        
                        <div class="navbar-collapse collapse clearfix">                                                                                              
                            <ul class="nav navbar-nav navbar-right">
                                <li class="current dropdown"><a href="index.php">Home</a>
                                   
                                </li>
                                <li class="dropdown"><a href="register.php">Register</a>
                                    
                                </li>
                                <li class="dropdown"><a href="schedule.php">Schedule</a>
                                    
                                </li>
                                 <li class="dropdown"><a href="committee.php">Committee</a>
                                    
                                </li>
                                
                            </ul>
                            <div class="clearfix"></div>
        
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
$presentationErr = $awardErr = $accompanyingErr = $accommodationErr= $accompanyingYesErr= 
$acctitleErr = $accfnameErr = $acclnameErr = $paymentmethodErr = $fee = $genderErr = $preconferenceErr = 
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
	   
		// check for Title
		if ( $_POST['title'] != "") {
			$title = ( $_POST['title'] );
			
			 if ($title == 'Mr.') {
				        $first = 'selected="selected"';
				        $second = '';
				        $third = '';
				        $fourth = '';
				    } elseif ($title == 'Mrs.') {
				        $first = '';
				        $second = 'selected="selected"';
				        $third = '';
				        $fourth = '';
				    } elseif ($title == 'Miss.') {
				        $first = '';
				        $second = '';
				        $third = 'selected="selected"';
				        $forth = '';
				    } elseif ($title == 'Dr.') {
				        $first = '';
				        $second = '';
				        $third = '';
				        $forth = 'selected="selected"';
				    }
	  	}
		else {
			$title = FALSE;
			$titleErr = "missing!";
		}
		
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
		
		
		
		// check for gender
		if ( $_POST['gender'] != "") {
			$gender =  ( $_POST['gender'] );
			if ($gender == 'male') {
					        $gefir = 'checked="checked"';
					        $gesec = '';
					        
					    } elseif ($gender == 'female') {
					        $gefir = '';
					        $gesec = 'checked="checked""';
	       
					    } 
			}
		else {
			$gender = FALSE;
			$genderErr = "missing!";
			
		}
		
		// check for IACR Mem no
		if ( preg_match ("/^[0-9]+$/", stripslashes( trim ( $_POST['memno'] ) ) ) ) {
			$memno = escape_value ( $_POST['memno'] );
		}
		else {
			$memno = FALSE;
			$memno = escape_value ($_POST['memno'] );
			$memnoErr = "missing!";
			
		}
		
		//check for affiliation

		if ( trim($_POST['affiliation']) != "" )  {
			$affiliation = escape_value ( $_POST['affiliation'] );
		}
		else {
			$affiliation = FALSE;
			$affErr = "missing!";
			
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
		
		// check for phone
		if (trim( $_POST['phone'] != "" ))  {
			$phone = escape_value ( $_POST['phone'] );
		}
		else {
			$phone = FALSE;
			$phone = escape_value ($_POST['phone'] );
			$phoneErr = "missing!";
			
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
		
	// check for abstract submission
		if ( $_POST['abstract'] != "") {
			$abstract =  ( $_POST['abstract'] );
			if ($abstract == 'Yes') {
					        $abfir = 'checked="checked"';
					        $absec = '';

					        // check for presentation 
						if ( $_POST['presentation'] != "") {
							$presentation = escape_value ( $_POST['presentation'] );
							if ($presentation == 'Oral') {
									        $prfir = 'checked="checked"';
									        $prsec = '';
									        
									    } elseif ($presentation == 'Poster') {
									        $prfir = '';
									        $prsec = 'checked="checked""';
					       
									    } 
							}else {
							$presentation = FALSE;
							$presentationErr = "missing!";
						}
						
						// check for award
						if ( $_POST['award'] != "") {
							$award =  ( $_POST['award'] );
							if ($award == 'Yes') {
									        $awfir = 'checked="checked"';
									        $awsec = '';
									        
									    } elseif ($award == 'No') {
									        $awfir = '';
									        $awsec = 'checked="checked""';
					       
									    } 
							}
						else {
							$award = FALSE;
							$awardErr = "missing!";
							
						}
			} elseif ($abstract == 'No') {
					        $abfir = '';
					        $absec = 'checked="checked""';
	       
			 } 
			}
		else {
			$abstract = FALSE;
			$abstractErr = "missing!";
			
		}
		
		// check for pre conference 
		if ( $_POST['preconference'] != "") {
			$preconference =  ( $_POST['preconference'] );
			if ($preconference == 'Yes') {
					        $prefir = 'checked="checked"';
					        $presec = '';
					        
					    } elseif ($preconference == 'No') {
					        $prefir = '';
					        $presec = 'checked="checked""';
	       
					    } 
			}
		else {
			$preconference = FALSE;
			$preconferenceErr = "missing!";
			
		}
		
				
		// check for accompanying
		if ( $_POST['accompanying'] != "") {
			$accompanying =  ( $_POST['accompanying'] );
			if ($accompanying == 'Yes') {
					        $acfir = 'checked="checked"';
					        $acsec = '';
						if (trim( $_POST['acctitle'] != "" ))  {
							$acctitle = escape_value ( $_POST['acctitle'] );
						}
						else {
							$acctitle = FALSE;
							$acctitle = escape_value ($_POST['acctitle'] );
							$acctitleErr = "missing!";
						}
		                 
	    
						if (trim( $_POST['accfname'] != "" ))  {
							$accfname = escape_value ( $_POST['accfname'] );
						}
						else {
							$accfname = FALSE;
							$accfname = escape_value ($_POST['accfname'] );
							$accfnameErr = "missing!";
						}
		
		
						if (trim( $_POST['acclname'] != "" ))  {
							$acclname = escape_value ( $_POST['acclname'] );
						}
						else {
							$acclname = FALSE;
							$acclfname = escape_value ($_POST['acclname'] );
							$acclnameErr = "missing!";
						}
		       
		                if(($acctitleErr == "")&& ($accfnameErr == "") && ($acclnameErr == "")) {
		                	$accompanyingYesErr = "";
		                } else {
		                	$accompanyingYesErr = "missing";
		                }
					        
					    } elseif ($accompanying == 'No') {
					        $acfir = '';
					        $acsec = 'checked="checked"';
	       
					    } 
			}
		else {
			$accompanying = FALSE;
			$accompanyingErr = "missing!";
			
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
			
			 if ($category == 'Student') {
				        $cfir = 'selected="selected"';
				        $csec = '';
				        $cthi = '';
				        
				    } elseif ($category == 'Practitioners') {
				        $cfir = '';
				        $csec = 'selected="selected"';
				        $cthi = '';
				        
				    } elseif ($category == 'Foreign delegates') {
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
		
					if ( $_POST['accommodation'] != "") {
						$accommodation  = escape_value ( $_POST['accommodation'] );
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

	if (($fnameErr == "") && ($lnameErr == "") && ($titleErr == "") && ($addrErr == "") 
	&& ($emailErr == "") && ($emailconErr == "") && ($affErr == "") && ($cityErr == "")
	&& ($zipErr == "") && ($phoneErr == "") && ($emailcomErr == "") && ($stateErr == "")
	&& ($countryErr == "") && ($categoryErr == "") && ($presentationErr == "")&& ($abstractErr == "")
	&& ($awardErr  == "") && ($accompanyingErr  == "") && ($paymentmethodErr == "") && ($accompanyingYesErr == "")
	&& ($accommodationErr == "") && ($genderErr == "") && ($preconferenceErr == "") && ($wiretransferErr == "")) {
				
	if($category !=""){
		if($category == "Student") {
				$fee = "Rs.4500";
		}
		if($category == "Practitioners") {
				$fee = "Rs.7000";
		}
		if($category == "Foreign delegates") {
				$fee = "300 USD";
		}
				
	}
	
	// Register the user in the database... 
         
    	//include 'dbconnect.php'; // Connect to the db. 
        
            include 'dbconnect.php'; // Connect to the db. 
	        $date = date("d-m-Y-H:i:s");
	        $stamp = date("dHi");
			$ip = $_SERVER['REMOTE_ADDR'];
			$password = "$stamp$ip";
			$password = str_replace(".", "", "$password");
			
	        // Make the query: 
	        $sql = "INSERT INTO users (title,fname,lname,gender,email,emailcon,phone,affiliation,address,city,state,country,
	        pincode,date,category,abstract_submit,preconference,presentation_type,award_consider,is_accompanying,accommodation,acctitle,accfname,acclname,paymentmethod,fees,neft_no,neft_date,neft_bank,registrationid) values 
	        ('$title', '$fname', '$lname','$gender', '$email', '$emailcon','$phone','$affiliation', '$address',  '$city','$state','$country',
	         '$zip','$date','$category','$abstract','$preconference','$presentation','$award','$accompanying','$accommodation','$acctitle','$accfname','$acclname','$paymentmethod','$fee','$neftno','$neftdate','$neftbank','$password') ";         
	        
	       
			if (!mysqli_query($con,$sql)){
				if (mysqli_error($con) == 1062) {
					redirect("error.php");
					//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=error.php">';    
 					//header("location:error.php");
					//exit();
	        		
	    		} else {
	       		 die(mysqli_error($con));
	    		}
	 		} else {
	 			redirect("iacrconferencemail.php?name=$fname&lname=$lname&email=$email&password=$password");
	 			//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=success.php">'; 
	 			//header("location:success.php");
	 			//exit();
	 			//header("location:http://www.tarmir.rgcb.res.in/iacrconferencemail.php?name=$fname&email=$email&password=$password");
			
	 		}
	}
	 		
			mysqli_close($con);

	 // End of the main Submit conditional. 
}
?>
    
 <table border="0" align="center" cellpadding="10">
      <tr>
        <td align="" valign="top" style="background-color:f0f0f0;">
        <div style="margin-left:120px;margin-top:10px;margin-right:10px;margin-bottom:10px;">
        <form action="registerhere.php" method="post" class="register" id="registerform" name="registerform">
        <h3 class="registerh1">Registration</h3>
        <br/>
        <table width="" class="list_table"  cellspacing="3" cellpadding="3" id="form_table" style="float:center">
<tbody>
<tr id="r2">
<td style=""><font color='red'>* </font>Title
</td>
<td style="">
<select name="title" id="title" tabindex="1">

  <option value="" >Select</option>
  <option value="Mr." <?php echo $first; ?>> Mr.</option>
  <option value="Mrs."<?php echo $second; ?>> Mrs.</option>
   <option value="Miss."<?php echo $third; ?>>Miss.</option>
  <option value="Dr."<?php echo $forth; ?>> Dr.</option>
  </select>
</td>
<td>
<span style="color:red;"><?php echo $titleErr;?></span>
</td>
</tr>
<tr id="sep"><td colspan="4"></td></tr>

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

<tr id="r2">
<td><font color='red'>* </font>Gender: </td>
<td>
<input type="radio" name="gender" value="male"  <?php echo $gefir; ?>>Male
<input type="radio" name="gender" value="female"<?php echo $gesec; ?>>Female
</td>
<td>
<span style="color:red;"><?php echo $genderErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r2">
<td colspan="1"><font color='red'>* </font>Affiliation</td>
<td colspan="1">
<input class="text"  tabindex="5" type="text" name="affiliation" maxlength="45" autocomplete="on"
value="<?php if ( isset($_POST['affiliation']) ) echo output( $_POST['affiliation'] ); ?>" >
</textarea>
</td>
<td>
<span style="color:red;"><?php echo $affErr;?></span>
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

<tr id="r2">
<td>
<font color='red'>* </font>Phone
</td>
<td>
<input class="text"  tabindex="11" type="text" name="phone" id="phone" maxlength="17" autocomplete="on"
value="<?php if ( isset($_POST['phone']) ) echo output( $_POST['phone'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $phoneErr;?></span>
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
<select class="select" name="category" id="category" onchange="calculateFee();" tabindex="14">
  <option value="">Select</option>
  <option value="Student" <?php echo $cfir; ?> >Student</option>
  <option value="Practitioners"<?php echo $csec; ?>> Practitioners</option>
  <option value="Foreign delegates" <?php echo $cthi; ?>> Foreign delegates</option>
  
  </select>&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
<span style="color:red;"><?php echo $categoryErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r2">
<td><font color='red'>* </font>Are you planning to attend pre-conference workshop? </td>
<td>
<input type="radio" name="preconference" value="Yes" <?php echo $prefir; ?>>Yes
<input type="radio" name="preconference" value="No"<?php echo $presec; ?>>No
</td>
<td>
<span style="color:red;"><?php echo $preconferenceErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r2">
<td><font color='red'>* </font>Are you submitting an abstract? </td>
<td>
<input type="radio" name="abstract" id="abstract" value="Yes" <?php echo $abfir; ?> onclick="enable_presentation();">Yes
<input type="radio" name="abstract" id="abstract" value="No" <?php echo $absec; ?> onclick="enable_presentation();">No
</td>
<td>
<span style="color:red;"><?php echo $abstractErr;?></span>
</td>
</tr>
 
<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td><font color='red'>* </font>Choice of presentation: </td>
<td>
<input type="radio" name="presentation" id="presentation" value="Oral" <?php echo $prfir; ?> disabled="disabled">Oral
<input type="radio" name="presentation" id="presentation" value="Poster" <?php echo $prsec; ?> disabled="disabled">Poster
</td>
<td>
<span style="color:red;"><?php echo $presentationErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r2">
<td><font color='red'>* </font>Would you like to consider your abstract <br/>for award? </td>
<td>
<input type="radio" name="award" value="Yes" <?php echo $awfir; ?> disabled="disabled">Yes
<input type="radio" name="award" value="No" <?php echo $awsec; ?> disabled="disabled">No
</td>
<td>
<span style="color:red;"><?php echo $awardErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="r1">
<td><font color='red'>* </font>Accompanying person: </td>
<td>
<input type="radio" id="accompanying" name="accompanying" value="Yes" <?php echo $acfir; ?>  onclick="enable_accompanying();calculateFee();">Yes
<input type="radio" id="accompanying" name="accompanying" value="No" <?php echo $acsec; ?> onclick="enable_accompanying();calculateFee();">No
</td>
<td>
<span style="color:red;"><?php echo $accompanyingErr;?></span>
</td>
</tr>

<tr id="acctitlerow1"><td colspan="4">&nbsp;&nbsp;&nbsp;<font color="#16b5f7">Enter the details of accompanying person</font></td></tr>

<tr id="acctitlerow2">
<td><font color='red'>* </font>Title</td>
<td>
<input class="text" tabindex="8" type="text" name="acctitle" id="acctitle" maxlength="10" autocomplete="off" disabled="disabled"
value="<?php if ( isset($_POST['acctitle']) ) echo output( $_POST['acctitle'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $acctitleErr;?></span>
</td>
</tr>


<tr id="accfnamerow">
<td><font color='red'>* </font>First Name</td>
<td>
<input class="text" tabindex="" type="text" name="accfname" id="accfname" maxlength="30" autocomplete="off" disabled="disabled"
value="<?php if ( isset($_POST['accfname']) ) echo output( $_POST['accfname'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $accfnameErr;?></span>
</td>
</tr>

<tr id="acclnamerow">
<td><font color='red'>* </font>Last Name</td>
<td>
<input class="text" tabindex="" type="text" name="acclname" id="acclname" maxlength="30" autocomplete="off" disabled="disabled"
value="<?php if ( isset($_POST['acclname']) ) echo output( $_POST['acclname'] ); ?>" >
</td>
<td>
<span style="color:red;"><?php echo $acclnameErr;?></span>
</td>
</tr>

<tr id="sep"><td colspan="4"></td></tr>

<tr id="accommodationrow">
<td><font color='red'>* </font>Need accommodation   </td>
<td>
<input type="radio" name="accommodation"  value="Yes" <?php echo $acomfir; ?>>Yes
<input type="radio" name="accommodation"   value="No" <?php echo $acomsec; ?>>No
</td>
<td>
<span style="color:red;"><?php echo $accommodationErr;?></span>
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
