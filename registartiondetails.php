<?php 
error_reporting(0);
include 'top.php';

  	session_start();
	require_once("user.cookies.php");
	$firstname_user = $_SESSION["SESS_USER_NAME"];
	$userid =  $_SESSION['SESS_MEMBER_ID'];
	include 'dbconnect.php'; // Connect to the db. 
	$sql="SELECT * FROM users WHERE id='$userid'";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result)){
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
                                   <li class="dropdown"><a href="#">Committee</a>
                                    
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
    <div class="auto-container" style="padding-top:50px;">
        	
            <div class="sec-title wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                <h2 style="font-size:22px;">Registration <span>Details</span></h2>
 </div>
 <div align="center">
  <input type="button" onclick="window.print();return false" value="print" class="action">
  </div>
  <div  align="right"><a href="logout.php" ><b>Logout</b></a></div>
     <h3 class="payment" style="line-height:28px;">
    
    <div class="table-responsive">          
 
    <table width="50%" border="0" align="center" class="table">
        <tbody>
        	 <tr>
                <td valign="middle" align="" class="tablecontent1">Name</td>
                <td valign="middle" align="left" class="tablecontent1"> 
                <?php echo $row['title'].'&nbsp;'.$row['fname'].'&nbsp;'.$row['lname']?>
                </td>
              </tr> 
              
              <tr>
                <td valign="middle" align="" class="tablecontent1">Registration Id</td>
                <td valign="middle" align="left" class="tablecontent1"> 
                <?php echo $row['registrationid'] ;?>
                </td>
              </tr> 
              
              <tr>
                <td valign="middle" align="" class="tablecontent1">Gender</td>
                <td valign="middle" align="left" class="tablecontent1"> 
                <?php echo $row['gender'] ;?>
                </td>
              </tr> 
              

			  <tr>
				<td valign="middle" align="" class="tablecontent1">IACR Member </td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['member'];?>
				</td>
			  </tr>
			  
			  <tr>
				<td valign="middle" align="" class="tablecontent1">Affiliation</td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['affiliation'];?>
				</td>
			  </tr>
			  
			  <tr>
				<td valign="middle" align="" class="tablecontent1">Address </td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['address'].'<br/>'.$row['pincode']?>
				</td>
			  </tr>

               <tr>
				<td valign="middle" align="" class="tablecontent1">State </td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['state'];?>
				</td>
			  </tr>
			  
			   <tr>
				<td valign="middle" align="" class="tablecontent1">country </td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['country'];?>
				</td>
			  </tr>
			  
			   <tr>
				<td valign="middle" align="" class="tablecontent1">Phone </td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['phone'];?>
				</td>
			  </tr>
			  
			   <tr>
				<td valign="middle" align="" class="tablecontent1">Email </td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['email'];?>
				</td>
			  </tr>
			  
			   <tr>
				<td valign="middle" align="" class="tablecontent1">Category </td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['category'];?>
				</td>
			  </tr>
			  
			   <tr>
				<td valign="middle" align="" class="tablecontent1">Are you submitting an abstract? </td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['abstract_submit'];?>
				</td>
			  </tr>
			  
			    <tr>
				<td valign="middle" align="" class="tablecontent1"> Need accommodation</td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['accommodation'];?>
				</td>
			  </tr>
			  
			   <tr>
				<td valign="middle" align="" class="tablecontent1">Payment method </td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['paymentmethod'];?>
				</td>
			  </tr>
			   <tr>
				<td valign="middle" align="" class="tablecontent1">NEFT number </td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['neft_no'];?>
				</td>
			  </tr>
			   <tr>
				<td valign="middle" align="" class="tablecontent1">NEFT Date</td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['neft_date'];?>
				</td>
			  </tr>
			   <tr>
				<td valign="middle" align="" class="tablecontent1">NEFT Bank</td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['neft_bank'];?>
				</td>
			  </tr>
			  
			    <tr>
				<td valign="middle" align="" class="tablecontent1">Registration Fee</td>
				<td valign="middle" align="left" class="tablecontent1">
				<?php echo $row['fees'];?>
				</td>
			  </tr>
			  
			               
            </tbody>
            </table>
  </div>
  </h3>
   
   <?php 
     }
mysql_close($con);   			 
?> 
  
  
    
</div>
</div>
<!--End pagewrapper-->
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>
