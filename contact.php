<?php
	
	// * IMPORTANT * Set email information here
	define('DESTINATION_EMAIL','4design@allinharmon.com');
	define('MESSAGE_SUBJECT','Tool Contact Page');
	define('REPLY_TO', '4design@allinharmon.com');
	define('FROM_ADDRESS', '4design@allinharmon.com');
	define('REDIRECT_URL', 'http://allinharmon.com/courses/imd410/tool/index.php');
	
	require_once('inc/validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>myToolSite</title>
<link href="css/main.css" rel="stylesheet" type="text/css">

</head>

<body id="contact_page">

  <div class="container">
   
    <header>
      <?php include_once('inc/header.php'); ?>
    </header>
    
    <div id="navbar" class="nav">
      <?php require_once('inc/nav.php'); ?>
    </div> <!--Closes navbar-->
        
    <div id="main_content">
          
	   <form id="contact_form" class="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
              <legend>Contact Us</legend>
                <p>
                    <label for="name">Name:</label><?php echo @$name_error; ?>
                    <input type="text" id="name" name="name" placeholder="Write your name here." value="<?php echo @$name ?>" class="required" />
                </p>
                <p>
                    <label for="email">Email:</label><?php echo @$email_error; ?>
                    <input type="text" id="email" name="email" placeholder="Write your email address" value="<?php echo @$email ?>" class="email required" />
                </p>
                <p>
                <label>Would you like us to send you more info?</label>
                  
                    <input type="radio" name="radio" id="info" value="info">
                    Yes
                    <input type="radio" name="radio" id="info2" value="info">
                    No
                </p>
                <p>
                <label>How many times have you attended an Tool Concert?</label>
                  <select name="visit" id="visit">
                    <option value="3 times or less">3 times or less</option>
                    <option value="6 times or less">6 times or less</option>
                    <option value="9 times or less">9 times or less</option>
                    <option value="never" selected>Never</option>
                  </select>
                </p>
                <p><label>How did you hear about us?</label>
                  <input type="checkbox" name="internet" id="internet">
                Internet
                  <input type="checkbox" name="mtv" id="mtv">
                MTV
                  <input type="checkbox" name="vh1" id="vh1">
                VH1
                  <input type="checkbox" name="radio" id="radio">
                Radio
                  <input type="checkbox" name="friend" id="friend">
                Friend</p>
                <p>
                    <label for="message">Message:</label><?php echo @$message_error; ?>
                    <textarea cols="45" rows="7" id="message" name="message" placeholder="Write your message here." class="required"><?php echo @$message ?></textarea>
                </p>
                <p>
                <input name="submitted" type="submit" value="Send" />
                </p>
            </fieldset>
      </form>

    </div> <!--Closes main_content-->
    <footer>
     <?php include_once('inc/footer.php'); ?>
    </footer>
  
  </div><!--Closes container-->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="jquery.validate.min.js" type="text/javascript"></script>

<script>
	$(document).ready(function(){
		
	// validate the comment form when it is submitted
	$('#demo').validate();
		
	});
</script>
  
</body>
</html>