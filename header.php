<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
    HEADER 
	         -->
<?php include 'connect_db.php'; ?>
<link rel="stylesheet" type="text/css" href="style.php">
			 
<div class="header" id="header" name="header">
	<center>
	<h1 class="header" id="header" name="header">
		<?php 
		if ($title==NULL) {
			echo ' ';
		}
		else {
			echo $title;
		}
		?>
	</h1>
	</center>
</div>