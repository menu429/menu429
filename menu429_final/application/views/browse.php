<?php
	$this->load->view('header');
	$this->load->view('sidebar');
	
	$category_options = array();
	foreach($categories as $row){
		$category_options[''] = 'None';
		$category_options[$row['id']]  = $row['name'];
	}
	
	$difficulty_options = array(
		'' => 'None',
		'Easy' => 'Easy',
		'Medium' => 'Medium',
		'Challenging' => 'Challenging'
	);
	
	$time_options = array();
	foreach($times as $row){
		$time_options[''] = 'None';
		$time_options[$row['id']] = $row['time'];
	}
	
	echo validation_errors();

 	echo form_open_multipart('main/browse');
?>
	<p>Category: <?php echo form_dropdown('category', $category_options); ?></p>
	<p>Time Estimated: <?php echo form_dropdown('estimated_time', $time_options); ?></p>
	<p>Difficulty: <?php echo form_dropdown('difficulty', $difficulty_options); ?></p>
	
	<input type="submit" value="Submit" />
	
	</form>
	
	<?php
		if ($filter_result) {
			echo "<ul>";
			foreach($filter_result as $row){
				$segments = array('main','details', $row['id'] );
			?>
			<li><h2><a href="<?php echo site_url($segments); ?>"><?php echo $row['title']; ?></a><cite><?php echo 'by: '.$row['creator']; ?></cite></h2></li>	
			<?php
		}
		echo "</ul>";
	}
	else {
		echo '<p>No Recipe Matched</p>';
	}

		$this->load->view('footer');
		?>