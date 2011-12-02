			
			<div id="sidebar">
				<p class="sidebar_bttn"><a href="<?php echo site_url('main/create'); ?>">Share Your Recipe</a></p>
				<p class="sidebar_bttn"><a href="<?php echo site_url('main/browse'); ?>">Browse Recipes</a></p>
				<!--<h2>Categories</h2>
				<ul>
					<li><a href="<?php echo site_url('main/recipes')?>"><span>&raquo;</span> All</a></li>
					<?php
						if($categories){
							foreach($categories as $row){
								$segments = array('main', 'recipes', $row['id']);?>
								<li><a href="<?php echo site_url($segments); ?>"><span>&raquo;</span><?php echo $row['name']; ?></a></li>
								<?php
							}
						}
					?>
				</ul>-->
			</div>
			
			<div id="content">