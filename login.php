
<?php ob_start(); 
include 'top.php';
?>
        
        
<!-- Header Lower -->
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
  font-weight: 800;"> ICTMI Conference </h2>
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
                        
                        <div class="navbar-collapse collapse clearfix">                                                                                              
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown"><a href="index.php">Home</a>
                                   
                                </li>
                                <li class="current dropdown"><a href="register.php">Register</a>
                                    
                                </li>
                                <li class="dropdown"><a href="schedule.php">Schedule</a>
                                    
                                </li>
                                   <li class="dropdown"><a href="committee.php">Committee</a>
                                    
                                </li>
                                <li class="dropdown"><a href="guidelines.php">Full Paper Submission</a>
                                    
                                </li>
                                <li class="dropdown"><a href="sponsorship.php">Sponsorship</a>
                                    
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
  $userErr = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	 $username = ($_POST['username']);
	 $password = ($_POST['password']);
	
	//Input Validations
	if(($username == '') || ($password == '')){
		$userErr = 'Invalid login details.';
		
	}
	
	
	//If there are input validations, redirect back to the login form
	if(($userErr == "") && ($passwordErr == "")) {
		include 'dbconnect.php'; // Connect to the db. 
		$sql="SELECT * FROM users WHERE email='$username' and registrationid='$password'";
		$result=mysql_query($sql);
		if($result) {
	        if(mysql_num_rows($result) == 1) {
	            //Login Successful
	            //session_regenerate_id();
	            $user = mysql_fetch_assoc($result);
                session_start();
	            $username = stripslashes($user["name"]);
	            //$lname = stripslashes($user["lname"]);
	            $userid = stripslashes($user["id"]);
	            $affiliation = stripslashes($user["affiliation"]);
	            $email = stripslashes($user["email"]);
	            $_SESSION['SESS_MEMBER_ID'] =  stripslashes($user["id"]);
	            $_SESSION['SESS_USER_NAME'] = $username;
	            $_SESSION['affiliation'] = $affiliation;
	            $_SESSION['email'] = $email;
	            setcookie("userloggedin", $username);
        		setcookie("userloggedin", $username,   time()+43200); // expires in 1 hour
        		header("location: registartiondetails.php");
	            
	        }else {
	            //Login failed
				$userErr="Wrong username/Password combination";
	        	
	           
	        }
		}else {
		    die("Query failed");
		}
	}
	
}
?>
 <div class="auto-container" style="padding-top:50px;">
        	
            <div class="sec-title wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                <h2 style="font-size:22px;">Registration <span>Details</span></h2>
 </div>
 
  
     <h3 class="payment" style="line-height:28px;">
    
    <div class="table-responsive">          
         <table align="center">
         	<tr>
         		<td>
         	  		<div class="<?php if($userErr!=""){echo 'error_box';}?>" id="error">
						<span style="color:red;"><?php echo $userErr;?></span>
					</div>
				</td>
         	</tr>
         </table>
      <br/>


			<form id="login_frm" name="login_frm" method="post" action="">
				<table align="center" width="43%" class="list_table">
					<tbody>
						<tr>
							<td class="tablecontent1" align="left" width="300">Email:</td>
							<td class="tablecontent1" align="left"><input class="text"
								maxlength="30" name="username" id="username">
							</td>
						</tr>
						<tr id="sep">
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td class="tablecontent1" align="left">Registration ID</td>
							<td class="tablecontent1" align="left"><input class="text"
								maxlength="40" name="password" id="password" type="password">
							</td>
						</tr>
						<tr id="sep">
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="2" class="tablecontent2" valign="top"><input
								type="submit" class="action" tabindex="" value="Submit">
							</td>
						</tr>

					</tbody>
				</table>
			</form></div>
     </div>
   </h3>
    <br/>
    <br/>
  
  <?php 
  include 'bottom.php';
  ?>