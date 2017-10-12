<?php

function countRappeurs() {

	$path = "/var/music";

	$folders = scandir($path);

	$totalRappeurs = 0;

	foreach ($folders as $f) {

		$folder = $path.'/'.$f;

		if(is_dir($folder) && $folder !== "." && $folder != "..") {

			$files = scandir($folder);

			foreach ($files as $file) {

				if($file === "rap") {
					$totalRappeurs++;
				}
			}
		}
	}

	return $totalRappeurs;
}

?>

<div>Vous avez $<?php countRappeurs(); ?> sur votre plateforme</div>
