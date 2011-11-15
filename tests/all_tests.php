<?php
require_once('simpletest/autorun.php');

class AllTestsSuite extends TestSuite
{
	function __construct()
	{	
		parent::__construct();
		//Grab all test files ending with _test.php in the 
		// menu429/tests/ directory
		$this->collect(dirname(__FILE__),
						new SimplePatternCollector('/_test.php/'));
	}
}
?>
