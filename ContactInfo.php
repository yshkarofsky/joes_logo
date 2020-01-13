
<?php  require_once("header.php"); ?>

    <div class="w3-container w3-text-theme pgsection">
	<h2>My Contact Information</h2>
	<h5>Yocheved Shkarofsky</h5>
	<h6>Phone Number: (470) 381-8329</h6>
	<h6>Email Address: <a href="mailto:yshkarofsky@gmail.com">yshkarofsky@gmail.com</a></h6> 
	<h6>College: <a href="http://www.mga.edu">Middle Georgia State University</a></h6>
	
	</div>
	
	<div class="w3-text-theme pgsection">
	<h5>Email</h5>
	<form action = "https://postmail.invotes.com/send" method="post" id="email_form">
	<input type="text" name="subject" placeholder="Subject" class= "emailItem w3-textbox w3-padding"><br></input>
	<textarea name="text" placeholder="Message" rows="4" cols="50" id="myEmail" class= "w3-textbox w3-padding emailItem"  ></textarea><br>
	    <input type="hidden" name="access_token" value="ypvgu2qgz4rxzqhifkulvkfl" />
      <!-- return urls can be fully qualified -OR-
         start with / for root relative -OR-
         start with . for url relative --> 
    <input type="hidden" name="success_url" value=".?message=Email+Successfully+Sent%21&isError=0" />
    <input type="hidden" name="error_url" value=".?message=Email+could+not+be+sent.&isError=1" />
   

    <!-- set the reply-to address -->
    <!--<input type="text" name="reply_to"
                placeholder="Your Email" />-->

    <!-- to append extra fields, use the extra_ prefix.
        Entries will be appended to your message body. -->
    <!-- <input type="text" name="extra_phone_number"
                placeholder="Phone Number" /> -->

    <!-- to split your message into 160 chars
         for an sms gateway -->
    <!-- <input type="hidden"
                name="sms_format" value="true" /> -->
   
    <input id="submit_form" class="w3-button w3-theme-l4 w3-margin" type="submit" value="Send" />
	<p>Powered by <a href="https://postmail.invotes.com" target="_blank">PostMail</a><br></p>
	</form>
	</div>
	
<?php  require_once("footer.php"); ?>
