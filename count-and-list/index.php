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
	    left: -30px;
	    color: white;
	    background-color: black;
	    padding: 5px 11px;
	    border-radius: 50%;
	    box-sizing: border-box;
	}
</style>

<div class="countRappeurs"><?php echo countRappeurs(); ?></div>
