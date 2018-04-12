<?php

	require("export.php");
	require("import.php");

	$export = new exportBD(host, user, password, database_name);
	$import = new importBD(host, user, password, database_name);
	$delais = 100; // Délais d"exécution des traitements, 100 ms

	// Timer d'exécution des traitements
	// Attention, faudra augmenter le délais d'exécution maximum des requêtes php
	setInterval(function(){
	    $export = $GLOBALS['export']; $import = $GLOBALS['import'];

		$backup_file_name = $export->start();
		echo "########## Exportation terminée ##########";
		
		// $backup_file_name = nom du fichier de sauvegarde, obtenu comme ci-dessus
		$result = $import->start($backup_file_name);
		echo "<br/><br/>".$result;


	}, $delais);


	// Fonction du timing
	function setInterval($f, $milliseconds)
	{
	    $seconds=(int)$milliseconds/1000;
	    while(true)
	    {
	        $f();
	        sleep($seconds);
	    }
	}

?>