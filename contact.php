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
          
	  <form id="contact_form" class="contact"  method="get" action="">
          <p>
          <label>Name:</label>
            <input type="text" name="name" id="name" placeholder="Full Name" tabindex="1">           
          </p>
          <p>
          <label>Email:</label>
              <input type="text" name="email" id="email" placeholder="jdoe@yourmail.com" tabindex="2">
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
            <label>Comments:</label>
          </p>
          <p>
            <textarea name="comments" placeholder="What do you want to know..." cols="30" rows="10"></textarea>
          </p>
          <p>
      		<input type="submit" name="submitted" id="submit" value="Send">
          </p>
      </form>

    </div> <!--Closes main_content-->
    <footer>
     <?php include_once('inc/footer.php'); ?>
    </footer>
  
  </div><!--Closes container-->
  
</body>
</html>