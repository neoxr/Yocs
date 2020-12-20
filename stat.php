<?php
error_reporting(0);
require __DIR__.'/enc.php5';
	switch (true) {
		case $_GET['code']: $show = json(__DIR__.'/vendor/database/'.setup); $db = json(__DIR__.'/vendor/database/'.db); $code = check('code', $_GET['code'], $db); 
	switch (true) {
		case $code !== NULL:
		foreach ($db as $key => $data) {
			switch ($data['code']) {
				case $_GET['code']: $show['code'] = $data['code']; $show['views'] = $data['views'];
				load(__DIR__.'/vendor/page/stat.php', $show);
			}
		} break; default: require __DIR__.'/vendor/page/404.php';
	} break; default: require __DIR__.'/vendor/page/404.php';
}