<?php
	require_once('../inc/config.php');

	//get all content related to this page (home)
	$sql = "SELECT * 
	FROM site_content 
	WHERE page_name='tourDates' 
	AND section_name='tourDates'";
	$myData = $db->query($sql);
	
	//create container for each piece of data
	while($row = $myData->fetch_assoc())
	{
		if($row['section_name'] === 'tourDates')
		{
			$tourDatesTitle = $row['page_title'];
			$tourDatesContent = $row['content'];
		}
	}
	
	if(isset($_POST['submitted']))
	{
		$user_content1 = mysqli_real_escape_string($db, $_POST['title']);
		$user_content2 = mysqli_real_escape_string($db, $_POST['body']);
		
		
		$sql = "UPDATE site_content
		SET content='$user_content2', page_title='$user_content1'
		WHERE page_name='tourDates' 
		AND section_name='tourDates'";
		
		$myData = $db->query($sql);
		
		header('Location: ../tour.php');
	}
?>


<html>
<head>
<meta charset="UTF-8">
<title>Update Tour Page</title>
<link href="../css/main.css" rel="stylesheet" type="text/css">

</head>

<body>

  <div class="container">
	
    <div id="main_content" class="update">
      <h1>Update Tour Page</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <fieldset>
              <legend>Update Page Info</legend>
      
      			  <select>
                      <option value="home">Home</option>
                      <option value="studioAlbums">Albums</option>
                      <option value="tour" selected"tour">Tour Dates</option>
                      <option value="contact">Contact Us</option>
                  </select>
                      
                  <label for="title">Title</label>         
                  
                  <textarea name="title" cols="30" rows="2"><?php echo $tourDatesTitle; ?></textarea>
                  
                  <label for="body">Body</label>         
                  
                  <textarea name="body" cols="80" rows="20"><?php echo $tourDatesContent; ?></textarea>
                  
                  <input type="submit" name="submitted" id="submit" value="Update Now">
                  
          </fieldset>
      </form>
    </div><!--Closes main_content-->

  </div><!--Closes container-->

</body>
</html>
