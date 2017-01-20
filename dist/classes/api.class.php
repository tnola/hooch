<?php
/**
* Api class will handle all the parsing and output
*/
class Api{
	
	function __construct(){
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->request = explode('/', trim($_SERVER['PATH_INFO'],'/'));

		parse_str(file_get_contents("php://input"), $input);
		// Cast it to an object
		$this->input = (object)$input;

		// retrieve the table and key from the path
		$this->table = preg_replace('/[^a-z0-9_]+/i','',array_shift($request));
		$this->id = array_shift($request)+0;

		# code...
	}

	function initAction(){
		// see what kind of method were dealing with
		// then were going to call the table function to that method
		switch ($method):
			case 'GET':
				break;
			case 'PUT':
				break;
			case 'POST':
				break;
			case 'DELETE':
				break;
		endswitch;
	}

	function testTable(){
		
	}
}