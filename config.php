<?php
	// This file overrules the defaults set in config_defaults.php
	// Use this file change your settings.

	if(file_exists('config_defaults.php')) {
		require_once('config_defaults.php');
	}
	else {
		die('ERROR: Unable to open required file (config_defaults.php)');
	}

	// Configure the path of the BrewPi script for this instance of the
	// web interface.  Do not include the trailing / on the path.
	$scriptPath = 'C:\Users\Elco\Dropbox\BrewPi\git\brewpi-script';

	// no php closing tag, because it might cause newlines to be returned that are after the closing tag
