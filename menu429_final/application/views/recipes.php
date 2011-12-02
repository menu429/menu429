<?php
	$this->load->view('header');
	$this->load->view('sidebar');
		
	if($recipes){
		if($category){
			echo '<h2>'.$category['name'].' Recipes <cite>'.count($recipes).'</cite></h2>';
		}else{
			echo '<h2> Recently Submitted <cite>'.count($recipes).'</cite></h2>';
		}
		echo '<ul id="recipes">';
		$counter = 0;
		
		foreach($recipes as $row){
			$counter++;
			?>
			<li<?php if($counter == 2) {echo ' class="alt"'; $counter = 0;}?>>
			<?php $segments = array('main','details', $row['id'] ); ?>
			
			<a href="<?php echo site_url($segments); ?>" class="dish">
				<img src="<?php echo $row['image_url']; ?>" />
				<div>
				<p><span class="title"><?php echo $row['title']; ?></span></p>
				<!--<p><span class="meta"><strong><?php echo $row['difficulty']; ?></strong></span></p>
				<?php
					$posted = $row['posted'];
					$current = time();
				?>
				<p><span class="posted"><cite><?php echo $this->timeword->convert($posted, $current); ?> ago</cite></span></p>-->
				</div>
			</a>
			</li>
			<?php
		}
		
		echo '</ul>';
	}
	else{
		echo '<h2>No Recipes Avaiable</h2>';
	}
	
	$this->load->view('footer');
?>