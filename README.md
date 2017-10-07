# sonerezh-plugins

## Installation
	add <?php require_once('/var/www/sonerezh-plugins/stream/view/index.php'); ?> between form and ul
	cp /var/www/sonerezh-plugins/stream/model/index.php /var/www/music/app/Model/Stream.php
	cp /var/www/sonerezh-plugins/stream/controller/index.php /var/www/music/app/Controller/StreamsController.php
	cp /var/www/sonerezh-plugins/stream/js/index.js /var/www/music/app/webroot/js/stream.js
	move stream/route/index.php content to sonerezh/Config/routes.php
	add "stream" to js files launched array in sonerezh/app/View/Layouts/default.ctp at the end

## Create Stream table
	CREATE TABLE IF NOT EXISTS `streams` (
	`id` int(11) NOT NULL,
	  `song_id` int(11) NOT NULL,
	  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	ALTER TABLE `streams`
	 ADD PRIMARY KEY (`id`);
	ALTER TABLE `streams`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
