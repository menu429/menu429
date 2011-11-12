<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Home Page</title>
		
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
				//echo anchor('site/recipe', '<br />Recipe', 'title="Recipe"');
			?><br />
			<b>Browse</b><br />
		</div>

		<div id="content" style="width:617px;float:left;">
			<?php
				foreach ($records as $row) {
					echo anchor('site/' . $row->recipe_id, '<h2>'.$row->recipe_name.'</h2>');
					echo '<h4><i>Created By: '.$row->creator_name.'</i></h4>';
					echo $row->steps.'<hr />';
				}
			?>
		</div>
	</div>
</body>
</html>