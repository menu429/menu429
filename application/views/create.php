<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Create Your Recipe</title>
		
	</head>
	<body>
		<div id="container">
			<?=form_open('site/insert');?>
			<p>Title: <input type="text" name="recipe_name"></p>
			<p>Description: <textarea name="recipe_description" rows="8" cols="40"></textarea></p>
               <p>Time Estimated: <select name="time_estimate" id="time_est" size="1">
                   <option value=".5">30 mins</option>
                   <option value=".75">45 mins</option>
                   <option value="1">1 Hour</option>
                   <option value="1.5">1.5 Hours</option>
                   <option value="2">2 Hours</option>
                   <option value="2.5">2.5 Hours</option>
               </select></p>
			<p>Ingredients: <textarea name="ingredients" rows="8" cols="40"></textarea></p>
			<p>Steps: <textarea name="steps" rows="8" cols="40"></textarea></p>
			<p>Created By: <input type="text" name="creator_name"></p>
               <p>Category: <select name="category_type" id="category" size="1">
                   <option value="main">Main</option>
                   <option value="side">Side</option>
                   <option value="drinks">Drinks</option>
               </select>
               <p>Difficulty: <select name="difficulty" id="difficulty" size="1">
                   <option value="Easy">Easy</option>
                   <option value="Medium">Medium</option>
                   <option value="Hard">Hard</option>
               </select>
			<input type="submit" value="Create Recipe">
		</div>
	</body>
</html>

               

                

