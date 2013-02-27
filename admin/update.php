<?php
	require_once('../inc/config.php');

	//get all content related to this page (home)
	$sql = "SELECT * 
	FROM site_content 
	WHERE page_name='home' 
	AND section_name='intro'";
	$myData = $db->query($sql);
	
	//create container for each piece of data
	while($row = $myData->fetch_assoc())
	{
		if($row['section_name'] === 'intro')
		{
			$intro = $row['content'];
		}
	}
	
	if(isset($_POST['submitted']))
	{
		$user_content = mysqli_real_escape_string($db, $_POST['body']);
		
		$sql = "UPDATE site_content
		SET content='$user_content'
		WHERE page_name='home' 
		AND section_name='intro'";
		
		$myData = $db->query($sql);
		
		header('Location: ../');
	}
?>


<html>
<head>
<meta charset="UTF-8">
<title>Update Page</title>
<style>
legend, select, label, textarea, input {display:block}
</style>

</head>

<body>
<h1>Update Page</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<fieldset>
        <legend>Update Page Info</legend>

			<select>
            	<option value="home" selected"home">Home</option>
                <option value="studioAlbums">Albums</option>
                <option value="contact">Contact Us</option>
            </select>
                
            <label for="body">Body</label>         
            
            <textarea name="body" cols="30" rows="10">
				<?php echo $intro; ?>
            </textarea>

            <input type="submit" name="submitted" id="submit" value="Update Now">
            
    </fieldset>
</form>


</body>
</html>
