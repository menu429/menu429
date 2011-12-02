<?php

$this->load->view('header');
$this->load->view('sidebar');

if ($details) {
	?>
	
	<h2><?php echo $details['title']; ?> <cite><?php echo 'by: '.$details['creator']; ?></cite></h2>
		<img src='<?php echo $details['image_url']; ?>' /></br>
		<strong>Description:</strong> <?php echo $details['description']; ?>
	</p>
	
	<div class="maininfo">
		<h2>Ingredients:</h2>
		<p><?php echo nl2br($details['ingredients']); ?></p>
		<h2>Directions: </h2>
		<p><?php echo nl2br($details['directions']); ?></p>
		<p>&nbsp;</p>
	</div>	
	
	<?php
}

else {
	
	echo '<p>Recipe not found.</p>';
	
}

$this->load->view('footer');
?>