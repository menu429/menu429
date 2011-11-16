<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Menu429 - Browse Recipes</title>
		
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
				echo anchor('site/filter', '<br />Browse', 'title="Browse"');
			?><br />
		</div>

		<div id="content" style="width:617px;float:left;">
			Filter criteria:
			
			Dish Type:
			<select name="dish_type">
				<option value="dish_none">Any</option>
				<option value="dish_main">Main/Entrees</option>
				<option value="dish_side">Side</option>
				<option value="dish_drinks">Drinks</option>
			</select>
			
			Difficulty:
			<select name="difficulty">
				<option value="difficulty_none">Any</option>
				<option value="difficulty_easy">Easy</option>
				<option value="difficulty_medium">Medium</option>
				<option value="difficulty_hard">Hard</option>
			</select>
			
			Time Created:
			<select name="time_created">
				<option value="time_newest">Newest first</option>
				<option value="time_oldest">Oldest first</option>
			</select>
			
			<input type="submit" value="Filter recipes">
		</div>
	</div>
</body>
</html>