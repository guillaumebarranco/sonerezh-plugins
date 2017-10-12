<?php

$path = "/var/music";

$folders = scandir($path);

$totalRappeurs = 0;

foreach ($folders as $folder) {

	if(is_dir($folder)) {

		$files = scandir($path.'/'.$folder);

		foreach ($files as $file) {

			if($file === "rap") {
				$totalRappeurs++;
			}
		}
	}	
}

echo "You have ".$totalRappeurs." rappeur";
