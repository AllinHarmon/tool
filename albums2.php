<?php
	require_once('inc/config.php');

	//get all content related to this page (studioAlbums content)
	$sql = "SELECT * FROM site_content WHERE page_name='studioAlbums'";
	$myData = $db->query($sql);
	
	$items = array();
	
	//create container for each piece of data
	while($row = $myData->fetch_assoc())
	{
		if($row['section_name'] === 'studioAlbums')
		{
			$studioAlbumsContent = $row['content'];
		}
		elseif($row['section_name'] === 'albumCovers')
		{
			$items[] = $row['page_title'];
			$items[] = $row['content'];
		}
		
	}
	
	//get all content related to this page (studioAlbums page_title)
	$sql = "SELECT * FROM site_content WHERE page_name='studioAlbums'";
	$myData = $db->query($sql);
	
	//create container for each piece of data
	while($row = $myData->fetch_assoc())
	{
		if($row['section_name'] === 'studioAlbums')
		{
			$studioAlbumsTitle = $row['page_title'];
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

<body id="albums_page">

  <div class="container">
   
    <header>
      <?php include_once('inc/header.php'); ?>
    </header>
    
    <div id="navbar" class="nav">
      <?php require_once('inc/nav.php'); ?>
    </div> <!--Closes navbar-->
        
    <div id="main_content">
      
      <?php echo $studioAlbumsTitle; ?>    
      <?php echo $studioAlbumsContent; ?>
      <div id="carousel">
        <div id="myLinks">
        <?php
		  //loop thorugh $items and build div for each
		  for($i = 0; $i < count($items); $i++)
		  {
			  echo '<div class="albumCovers">';
			  echo $items[$i];
			  echo '</div>';
		  }      
	    ?>
        </div> <!--Closes myLinks-->
      
        <img src="images/undertow.jpg" id="placeholder" alt="gallery pic" />
        <p id="caption">Undertow</p>
        
      </div> <!--Closes carousel-->
      
      <div>
        <?php
		  //loop thorugh $items and build div for each
		  for($i = 0; $i < count($items); $i++)
		  {
			  echo '<div class="albumCovers">';
			  echo $items[$i];
			  echo '</div>';
		  }      
	    ?>
      </div>
  
<script src="js/main.js"></script>
  
    </div> <!--Closes main_content-->
    <footer>
     <?php include_once('inc/footer.php'); ?>
    </footer>
  
  </div><!--Closes container-->
  
</body>
</html>