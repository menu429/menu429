<?php
require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class TestOfPageNavigation extends WebTestCase
{
	//Create page testing
	function testHomePageToCreatePage()	//Test clicking create button from home page
	{
		$this->get('http://localhost/menu429/');
		$this->assertLink('Create', 'http://localhost/menu429/index.php/site/create', 'Create URI is found');
		$this->click('Create');
		$this->assertTitle('Create Your Recipe');
	}
	
	function testCreatePageRedirectionToHomePage() //Redirection to homepage after filling create form
	{
		$this->get('http://localhost/menu429/index.php/site/create');
		$this->setField('recipe_name', 'hamburger');
		$this->setField('recipe_description', 'American hamburger');
		//$this->click('.75');
		$this->setField('ingredients', 'a lot of stuff');
		$this->setField('steps', 'alot of steps');
		$this->setField('creator_name', 'jimmy');
		//$this->click('main');
		//$this->click('Hard');
		$this->clickSubmit("Create Recipe");
		$this->assertTitle('Home Page');
	}
	
	//Home page testing
	function testHomePageElements()
	{
		$this->get('http://localhost/menu429/index.php/site');
		$this->assertTitle('Home Page');
		$this->assertClickable('Create');
		$this->assertClickable('Browse');
	}
}
?>