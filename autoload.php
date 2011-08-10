<?php

function auto_load($class)
{
	try
	{
		// Transform the class name into a path
		$file = str_replace('_', '/', strtolower($class));
        $path = realpath(dirname(__FILE__)).'/'.$file.'.php';
		if (is_file($path))
		{
			// Load the class file
			require $path;

			// Class has been found
			return true;
		}

		return false;
	}
	catch (Exception $e)
	{
        
	}
}

spl_autoload_register('auto_load');