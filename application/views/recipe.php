<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Recipe Page - WIP</title>
		
	</head>
<body>

	<div id="container" style="width:948px">

		<div id="header" style="">
			<h1 style="margin-bottom:0;margin-left:331px;">Menu429</h1>
			<hr />
		</div>

		<div id="menu" style="width:331px;float:left;text-align: center;">
			<?php
				echo anchor('site/create', 'Create', 'title="Create"');
				echo anchor('../index.php', '<br />Home', 'title="Home"');
			?><br />
		</div>

		<div id="content" style="width:617px;float:left;">
			<?php
				foreach ($rows->result() as $r)
				{
					echo '<div id="recipe_name">' . $r->recipe_name . '</div>';
					echo '<div id="recipe_description">' . $r->recipe_description . '</div>';
					echo '<div id="time_estimate">' . $r->time_estimate . '</div>';
					echo '<div id="ingredients">' . $r->ingredients . '</div>';
					echo '<div id="steps">' . $r->steps . '</div>';
					// echo '<div id="picture">' . $r->picture . '</div>';
					echo '<div id="creator_name">' . $r->creator_name . '</div>';
					echo '<div id="category_eth">' . $r->category_eth . '</div>';
					echo '<div id="category_type">' . $r->category_type . '</div>';
					echo '<div id="difficulty">' . $r->difficulty . '</div>';
				}
			?>
		</div>
	</div>
</body>
</html>