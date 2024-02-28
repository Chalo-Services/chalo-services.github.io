<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Loading Stylesheets -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/tipTip.css" rel="stylesheet" type="text/css" />

<!-- Loading JavaScript Files -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_400-droid_700-droid_italic_400-droid_italic_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tipTip.minified.js"></script>

<!-- Custom JS functions -->
    <!-- Cufon for Font Replacement -->
    <script type="text/javascript">
                Cufon.replace('h1')('h2')('h3')('h4')('h5');
    </script>
	<!-- Tooltip for Small navigation on Top -->
	<script type="text/javascript">
    $(document).ready(function(){
        $(".tipClass").tipTip();
    });
    </script>

<title>Creative Solutions Contact</title>
</head>

<body>

<div id="wrapper"> <!-- Main Wrapper div starts here -->

	<div id="small-nav"> <!-- Top Small Nav starts here -->
    	<ul>
            <li><a href="#" class="tipClass" title="Home"><img src="images/home-small.gif" alt="home" /></a></li>
            <li><a href="#" class="tipClass" title="Mail"><img src="images/mail-small.gif" alt="mail" /></a></li>
            <li><a href="#" class="tipClass" title="SiteMap"><img src="images/sitemap-small.gif" alt="sitemap" /></a></li>
        </ul>
    </div> <!-- Top Small Nav ends here -->
    
    <div id="header"> <!-- Site Header starts here -->
    
    	<a href="index.html"><span id="logo"></span></a> <!-- Website Logo -->
        
        <div id="navigation"> <!-- Site Navigation starts here -->
            <ul id="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="work.html">Work</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li class="current"><a href="contact.php">Contact</a></li>
            </ul>
        </div> <!-- Site Navigation ends here -->
        
    </div> <!-- Site Header ends here -->
    
    <div class="clear-both"></div>
    <hr />
    
    <div id="intro-content" class="clear-both"> <!-- Page heading -->
    		<h1>get in touch</h1> <!-- Intro text -->
	</div>
    
    <div class="clear-both"></div>
    <hr />
    
    <!-- Main Page Left Content -->
    <div id="inner-left-block">
        <h3>Drop us a Message</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat.</p>
        
<div id="contact-form"> <!-- Contact Form Starts Here -->

<!-- PHP code for Spam Free Contact Form -->

<?php 
if (isset($_POST["op"]) && ($_POST["op"]=="send")) { 

/******** START OF CONFIG SECTION *******/
  $sendto  = "YOURMAILID@EXAMPLE.com";		/* PUT YOUR EMAIL ID HERE */
  $subject = "Website Contact Enquiry";
  
// Select if you want to check form for standard spam text

  $SpamCheck = "Y"; // Y or N
  $SpamReplaceText = "*content removed*";
  
// Error message prited if spam form attack found
$SpamErrorMessage = "<p align=\"center\"><font color=\"red\">Malicious code content detected.
</font><br><b>Your IP Number of <b>".getenv("REMOTE_ADDR")."</b> has been logged.</b></p>";
/******** END OF CONFIG SECTION *******/


  $name = $HTTP_POST_VARS['name']; 
  $email = $HTTP_POST_VARS['email']; 
  $message = $HTTP_POST_VARS['message']; 
  $headers = "From: $email\n";
  $headers . "MIME-Version: 1.0\n"
		   . "Content-Transfer-Encoding: 7bit\n"
		   . "Content-type: text/html;  charset = \"iso-8859-1\";\n\n";
if ($SpamCheck == "Y") {		   
// Check for Website URL's in the form input boxes as if we block website URLs from the form,
// then this will stop the spammers wastignt ime sending emails
if (preg_match("/http/i", "$name")) {echo "$SpamErrorMessage"; exit();} 
if (preg_match("/http/i", "$email")) {echo "$SpamErrorMessage"; exit();} 
if (preg_match("/http/i", "$message")) {echo "$SpamErrorMessage"; exit();} 

// Patterm match search to strip out the invalid charcaters, this prevents the mail injection spammer 
  $pattern = '/(;|\||`|>|<|&|^|"|'."\n|\r|'".'|{|}|[|]|\)|\()/i'; // build the pattern match string 
                            
  $name = preg_replace($pattern, "", $name); 
  $email = preg_replace($pattern, "", $email); 
  $message = preg_replace($pattern, "", $message); 

// Check for the injected headers from the spammer attempt 
// This will replace the injection attempt text with the string you have set in the above config section
  $find = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i"); 
  $email = preg_replace($find, "$SpamReplaceText", $email); 
  $name = preg_replace($find, "$SpamReplaceText", $name); 
  $message = preg_replace($find, "$SpamReplaceText", $message); 
  
// Check to see if the fields contain any content we want to ban
 if(stristr($name, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
 if(stristr($message, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
 
 // Do a check on the send email and subject text
 if(stristr($sendto, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
 if(stristr($subject, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
}
// Build the email body text
  $emailcontent = " 
----------------------------------------------------------------------------- 
   WEBSITE CONTACT ENQUIRY
----------------------------------------------------------------------------- 

Name: $name 
Email: $email 
Message: $message 

_______________________________________ 
End of Email 
"; 
// Check the email address enmtered matches the standard email address format
 if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$", $email)) { 
  echo "<p><b>It appears you entered an invalid email address</b></p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
} 

 elseif (!trim($name)) { 
  echo "<p><b>Please go back and enter a Name</b></p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
} 


 elseif (!trim($message)) { 
  echo "<p><b>Please go back and type a Message</b></p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
}  

 elseif (!trim($email)) { 
  echo "<p><b>Please go back and enter an Email</b></p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
}

// Sends out the email or will output the error message 
 elseif (mail($sendto, $subject, $emailcontent, $headers)) { 
  echo "<br><br><p><b>Thank You $name</b></p><p>We will be in touch as soon as possible.</p>"; 

} 
} 
else { 
?> 

<form method="post">
<input name="op" type="hidden" value="send" /> 

<label>Name:</label>
<input type="text" name="name" /><br />

<label>Email:</label>
<input type="text" name="email" /><br />

<label>Message:</label>
<textarea name="message" cols="" rows=""></textarea><br />

<input type="submit" name="submit" class="submitbutton" />

</form>

<?php } ?>

</div>

    </div> <!-- Main Left Block for content ends here -->
    
    <!-- Sidebar Navigation -->
    <div id="inner-right-block">
    	
        <!-- Sidebar Navigation -->
    	<h3>Sidebar Navigation</h3>
        <ul class="sidebar-navigation-list">
            <li><a href="#">Web Designing</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Print Material Designing</a></li>
            <li><a href="#">Search Engine Optimization</a></li>
            <li><a href="#">Rich Internet Applications</a></li>
        </ul>
        
        <!-- Block to show Contact Information -->
        <div style="margin-top: 30px;">
        	<h3>Get in Touch</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            <ul>
                <li class="phone-list"><b>+91 172 98765432</b></li>
                <li class="mail-list"><a href="#"><b>sayhello@creativesolutions.com</b></a></li>
                <li class="chat-list"><b>creative.solutions</b></li>
            </ul>
        </div>
        
        <!-- Socialize Information -->
         <div style="margin-top: 30px;">	
        	<h3>Elsewhere</h3>
            <ul class="social-links">
            	<li><a href="#"><img src="images/facebook.png" alt="" /></a></li>
                <li><a href="#"><img src="images/digg.png" alt="" /></a></li>
                <li><a href="#"><img src="images/twitter.png" alt="" /></a></li>
                <li><a href="#"><img src="images/technorati.png" alt="" /></a></li>
                <li><a href="#"><img src="images/myspace.png" alt="" /></a></li>
                <li><a href="#"><img src="images/stumble-upon.png" alt="" /></a></li>
            </ul>
        </div>
        
    </div>
   
   <div class="clear-both"></div> 
    <hr />
    
    <!-- Website Footer -->
    <div id="footer">
    	<p>Copyright Creative Solutions Pvt. Ltd., 2009. All Rights Reserved <a href="#">Terms &amp; Conditions</a>  |  <a href="#">Privacy Policy</a></p>
    </div>

</div> <!-- Main Wrapper div ends here -->

</body>
</html>