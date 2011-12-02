<?php
	$this->load->view('header');
	$this->load->view('sidebar');
	
	echo '<h2>Submit a Recipe</h2>';
	
	$category_options = array();
	foreach($categories as $row){
		$category_options[$row['id']]  = $row['name'];
	}
	
	$difficulty_options = array(
		'Easy' => 'Easy',
		'Medium' => 'Medium',
		'Challenging' => 'Challenging'
	);
	
	$time_options = array();
	foreach($times as $row){
		$time_options[$row['id']] = $row['time'];
	}
	
	echo validation_errors();

 	echo form_open_multipart('main/submit');
?>
    <p>Title: <input type="text" name="title" size="75" value="<?php echo set_value('title'); ?>" /></p>
    <p> Description: <textarea name="description" rows="5" cols="75"><?php echo set_value('description'); ?></textarea></p>
	<p> Created by: <textarea name="creator" rows="2" cols="75"><?php echo set_value('creator'); ?></textarea></p>
    <p>Category: <?php echo form_dropdown('category', $category_options); ?></p>
	<p>Time Estimated: <?php echo form_dropdown('estimated_time', $time_options); ?></p>
	<p>Difficulty: <?php echo form_dropdown('difficulty', $difficulty_options); ?></p>
	<p>Ingredients: <textarea name="ingredients" rows="15" cols="75"><?php echo set_value('ingredients'); ?></textarea></p>
	<p>Directions: <textarea name="directions" rows="15" cols="75"><?php echo set_value('directions'); ?></textarea></p>
	<p>Image: <?php echo form_upload('userfile'); ?></p>
	
<input type="submit" value="Submit Recipe" />

</form>

<?php
	$this->load->view('footer');
?>