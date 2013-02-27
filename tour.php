<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	require_once('inc/config.php');

	//get all content related to this page (tourDates content)
	$sql = "SELECT * FROM site_content WHERE page_name='tourDates'";
	$myData = $db->query($sql);
	
	//create container for each piece of data
	while($row = $myData->fetch_assoc())
	{
		if($row['section_name'] === 'tourDates')
		{
			$tourDatesContent = $row['content'];
		}
	}
	
	//get all content related to this page (tourDates title_page)
	$sql = "SELECT * FROM site_content WHERE page_name='tourDates'";
	$myData = $db->query($sql);
	
	//create container for each piece of data
	while($row = $myData->fetch_assoc())
	{
		if($row['section_name'] === 'tourDates')
		{
			$tourDatesTitle = $row['page_title'];
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

<body id="tour_page">

  <div class="container">
   
    <header>
      <?php include_once('inc/header.php'); ?>
    </header>
    
    <div id="navbar" class="nav">
      <?php require_once('inc/nav.php'); ?>
    </div> <!--Closes navbar-->
        
    <div id="main_content">
          
	  <?php echo $tourDatesTitle; ?>
      <?php echo $tourDatesContent; ?>
  
    </div> <!--Closes main_content-->
    <footer>
     <?php include_once('inc/footer.php'); ?>
    </footer>
  
  </div><!--Closes container-->
  
</body>
</html>


</body>
</html>
