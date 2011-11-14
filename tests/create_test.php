<?php
require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class TestOfCreating extends WebTestCase
{
	function testCreatingNewRecipeToDatabase()
	{
		$this->get('http://localhost/menu429/index.php/site/create');
		$this->setField('recipe_name', 'hamburger');
		$this->setField('recipe_description', 'American hamburger');
		$this->setField('time_est', '.75');
		$this->setField('ingredients', 'a lot of stuff');
		$this->setField('steps', 'alot of steps');
		$this->setField('creator_name', 'jimmy');
		$this->setField('category', 'main');
		//$this->setFieldById('difficulty', 'Hard');
		$this->click("Create Recipe");
		$this->assertTitle('Home Page');
	}
}
?>