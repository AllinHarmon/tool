<?php
	require_once('../inc/config.php');
	
	$tmp = $_GET['p'];
	if($tmp === 'home' || $tmp === 'studioAlbums' || $tmp === 'tourDates')
	{
		$page = $tmp;	
	}
	else
	{
		$page = 'home';	
	}
	

	//get all content related to this page (home)
	$sql = "SELECT * 
	FROM site_content 
	WHERE page_name='$page' 
	AND section_name='$page'";
	$myData = $db->query($sql);
	
	//create container for each piece of data
	while($row = $myData->fetch_assoc())
	{
		if($row['section_name'] === $page)
		{
			$introTitle = $row['page_title'];
			$introContent = $row['content'];
		}
	}
	
	if(isset($_POST['submitted']))
	{
		$user_content1 = mysqli_real_escape_string($db, $_POST['title']);
		$user_content2 = mysqli_real_escape_string($db, $_POST['body']);
		$page = mysqli_real_escape_string($db, $_POST['tmp']);
		
		
		$sql = "UPDATE site_content
		SET content='$user_content2', page_title='$user_content1'
		WHERE page_name='$page' 
		AND section_name='$page'";
		
		$myData = $db->query($sql);

		header('Location: ../');
	}
?>

<html>
<head>
<meta charset="UTF-8">
<title>Update Page</title>
<link href="../css/main.css" rel="stylesheet" type="text/css">

</head>

<body>

  <div class="container">
	
    <div id="main_content" class="update">
      <h1>Update <?php echo $page; ?> page</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <fieldset>
              <legend>Update Page Info</legend>
      			  <input type="hidden" id="tmp" name="tmp" value="<?php echo $page ?>"	/>
                  <select id="page" onChange="set_page(this)">
                  	  <option value="selectValue" >Select a page...</option>
                      <option id="home" value="home" selected="home">Home</option>
                      <option id="studioAlbums" value="studioAlbums">Albums</option>
                      <option id="tourDates" value="tourDates">Tour Dates</option>
                  </select>   
                  
                  <label for="title">Title</label>         
                  
                  <textarea name="title" cols="30" rows="2"><?php echo $introTitle; ?></textarea>
                  
                  <label for="body">Body</label>         
                  
                  <textarea name="body" cols="80" rows="20"><?php echo $introContent; ?></textarea>
                  
                  <input type="submit" name="submitted" id="submit" value="Update Now">
                  
          </fieldset>
      </form>
    </div><!--Closes main_content-->

  </div><!--Closes container-->

<script>
	window.onload = function(){
		document.getElementById("<?php echo $page; ?>").selected = 'selected';
	};

	function set_page(obj)
	{
		var page = obj.value;
		window.location = './update.php?p='+ obj.value;
	}
</script>

</body>
</html>
