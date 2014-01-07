<?php
//directory separator depending on operating system
defined("DS")
	|| define("DS", DIRECTORY_SEPARATOR);
	
//root path
defined("ROOT_PATH")
	|| define("ROOT_PATH", realpath(dirname(__FILE__) . DS ."..". DS));

//modules folder
defined("MOD_DIR")
	|| define("MOD_DIR", "mod");

//includes folder
defined("INC_DIR")
	|| define("INC_DIR", "inc");
	
//template folder
defined("TEMPLATE_DIR")
	|| define("TEMPLATE_DIR", "template");
	
// add all above directories to the include_path
set_include_path(	implode(PATH_SEPARATOR, array(
					realpath(ROOT_PATH.DS.MOD_DIR),
					realpath(ROOT_PATH.DS.INC_DIR),
					realpath(ROOT_PATH.DS.TEMPLATE_DIR),
					get_include_path(),)));
					
$required = array(
	'first_name'		=> 'Please provide your first name',
	'last_name'		    => 'Please provide your last name',
	'age'		        => 'Please select your age',
	'gender'		    => 'Please select your gender',
	'country'		    => 'Please select your country',
	'interest'		    => 'Please select at least one interest',
	'colour'		    => 'Please select your favorite colour',
	'search_engine'		=> 'Please select your favorite search engine'
);