<?php 
ob_start();
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
                                <li class="dropdown"><a href="register.php">Register</a>
                                    
                                </li>
                                <li class="dropdown"><a href="schedule.php">Schedule</a>
                                    
                                </li>
                                   <li class="dropdown"><a href="#">Committee</a>
                                    
                                </li>
                                <li class="current dropdown"><a href="guidelines.php">Full Paper Submission</a>
                                    
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
                <h2 style="font-size:22px;">Full Paper <span>Submission</span></h2>
 </div>
 
  <div  align="right"><a  href="logout.php" ><b><font size="4">Logout</font></b></a></div>
  <p>Welcome <?php echo $firstname_user?>
     <h3 class="payment" style="line-height:28px;">
    
    <div class="table-responsive">          
 
   <form action='add.php' method='POST' enctype="multipart/form-data">
	 <table class="" width="40%" width="43%" class="list_table">
        <tbody>
        	
        	 <tr>
                <td>Title</td>
                <td >
                	<textarea  name='title' id="title"></textarea> 
                </td>
              </tr> 
              <tr id="sep"><td colspan="4">&nbsp;</td></tr>
              <tr>
                <td>Category</td>
                <td >
                	<textarea name='material' id="material"></textarea> 
              
                </td>
              </tr>
              
               <tr id="sep"><td colspan="4">&nbsp;</td></tr>
              
              <tr>
              <td valign="middle" align="" class="">Upload data</td>
              	
              <td>
              	<input  align="left" valign="middle" type="file" name="files[]" multiple />
              </td>
              </tr>
              <tr id="sep"><td colspan="4">&nbsp;</td></tr>
              <tr>
              <td>
              	<input class="action"  type='submit' name ='add' value='Upload' class="myButton" />
              </td>	
              	</tr>
                     	
               
         </tbody>
      </table>
 </form>	
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
