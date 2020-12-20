<?php
error_reporting(0);
require __DIR__.'/enc.php5';
	switch (true) {
    	case !empty($_GET['url']): $code = random(5); $url = $_GET['url'];
        switch (true) {
        	case filter_var($url, FILTER_VALIDATE_URL) !== false:
			$data = json(__DIR__.'/vendor/database/'.db); 
			$last = end($data);
			$id = ++$last['id'];
		switch (true) {
			case empty($data): $data[] = ['id' => '1', 'code' => $code, 'url' => $url, 'views' => 0]; break;
			default: $data[] = ['id' => ''.$id.'', 'code' => $code, 'url' => $url, 'views' => 0];
			} save(__DIR__.'/vendor/database/'.db, $data);
			$show = ['error' => false, 'url' => url."/".$code];
			print_r(stripslashes(json_encode($show, JSON_PRETTY_PRINT)));
		break; default: $data = ['error' => true, 'url' => 'URL is invalid!']; print_r(json_encode($data, JSON_PRETTY_PRINT));
	} break; default: $data = ['error' => true, 'url' => 'URL is empty!']; print_r(json_encode($data, JSON_PRETTY_PRINT));
} 