<?php

$path = "/var/music";

$folders = scandir($path);

$totalRappeurs = 0;

foreach ($folders as $folder) {

	$files = scandir($folder);

	foreach ($files as $file) {
		if($file === ".info") {
			$info = json_decode(file_get_contents($file));
			if($info['artist'] && $info['artist']['type'] && $info['artist']['type'] === 'rap') {
				$totalRappeurs++;
			}
		}
	}
}

echo "You have ".$totalRappeurs." rappeur";
