<?php
	require_once('inc/config.php');

	//get all content related to this page (home content)
	$sql = "SELECT * FROM site_content WHERE page_name='home'";
	$myData = $db->query($sql);
	
	//create container for each piece of data
	while($row = $myData->fetch_assoc())
	{
		if($row['section_name'] === 'intro')
		{
			$introContent = $row['content'];
		}
	}
	
	//get all content related to this page (home title_page)
	$sql = "SELECT * FROM site_content WHERE page_name='home'";
	$myData = $db->query($sql);
	
	//create container for each piece of data
	while($row = $myData->fetch_assoc())
	{
		if($row['section_name'] === 'intro')
		{
			$introTitle = $row['page_title'];
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>myToolSite</title>
<link href="css/main.css" rel="stylesheet" type="text/css">

</head>

<body id="home_page">

  <div class="container">
   
    <header>
      <?php include_once('inc/header.php'); ?>
    </header>
    
    <div id="navbar" class="nav">
      <?php require_once('inc/nav.php'); ?>
    </div> <!--Closes navbar-->
        
    <div id="main_content">
       
      <?php echo $introTitle; ?>   
      <img src="images/toolBand.jpg" class="fltRight" alt="Band Photo" />
      <?php echo $introContent; ?>
  
    </div> <!--Closes main_content-->
    <footer>
     <?php include_once('inc/footer.php'); ?>
    </footer>
  
  </div><!--Closes container-->
  
</body>
</html>
