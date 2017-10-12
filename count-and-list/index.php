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

<style>
	.countRappeurs {
		display: inline-block;
		position: relative;
	    top: 10px;
	    left: 70px;
	}
</style>

<div class="countRappeurs"><?php echo countRappeurs(); ?> rappeurs</div>
