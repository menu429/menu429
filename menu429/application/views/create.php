<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Create Your Recipe</title>
		
	</head>
	<body>
		<div id="container">
			<form action="" method="get" accept-charset="utf-8">
				<p>Title: <input type="text" name="Title" value="" id="title"></p>
				<p>Description: <textarea name="Desciption" rows="8" cols="40"></textarea></p>
				<p>Time Estimated: <select name="Time Estimated" id="time_est" multiple onchange="" size="1">
					<option value=".5">30 mins</option>
					<option value=".75">45 mins</option>
					<option value="1">1 Hour</option>
					<option value="1.5">1.5 Hours</option>
					<option value="2">2 Hours</option>
					<option value="2.5">2.5 Hours</option>
				</select></p>
				<p>Ingredients: <textarea name="Ingredients" rows="8" cols="40"></textarea></p>
				<p>Steps: <textarea name="Steps" rows="8" cols="40"></textarea></p>
				<p>Created by: <input type="text" name="creator" value="" id="creator">
				<p>Category: <select name="Category" id="category" multiple onchange="" size="1">
					<option value="main">Main</option>
					<option value="side">Side</option>
					<option value="drinks">Drinks</option>
				</select>
				<p>Difficulty: <select name="Difficulty" id="difficulty" multiple onchange="" size="1">
					<option value="Easy">Easy</option>
					<option value="Medium">Medium</option>
					<option value="Hard">Hard</option>
				</select>
				
				<p><input type="submit" value="Submit &rarr;"></p>
			</form>
		</div>
	</body>
</html>