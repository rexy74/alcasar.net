<?php
	
	function loadLanguage($param,$basePath)
	{
		switch($basePath)
		{
			case "root":
	  			$path = "content/".$param ;
	  			break;
			case "prst":
	  			$path = "../content/".$param;
	  			break;
		}
	  	  if (!file_exists($path))
	  	  {
			 exit("Fichier $path non présent");
	  	  }
	  	$file_lang = fopen($path, 'r');
	  	if (!$file_lang) {
	  	  //exit('Error opening the file '.CONF_FILE);
	  	}
	  	while (!feof($file_lang)) {
	  	  $buffer = fgets($file_lang, 10096);
	  	  if ((strpos($buffer, '=') !== false) && (substr($buffer, 0, 1) !== '#')) {
	  	    $tmp = explode('=', $buffer, 2);
	  	    $language[trim($tmp[0])] = trim($tmp[1]);
	  	  }
	  	} 
	  	fclose($file_lang);	
	  	return $language;
	}

?>
