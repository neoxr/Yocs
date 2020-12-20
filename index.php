<?php
error_reporting(0);
require __DIR__.'/enc.php5';
	switch (true) {
		case $_GET['code']: $db = json(__DIR__.'/vendor/database/'.db); $code = check('code', $_GET['code'], $db); 
	switch (true) {
		case $code !== NULL:
		foreach ($db as $key => $data) {
			switch ($data['code']) {
				case $_GET['code']: $data['views']++; $db[$key]['views'] = $data['views'];
				save(__DIR__.'/vendor/database/'.db, $db);
				go($data['url']);
			}
		} break; default: require __DIR__.'/vendor/page/404.php';
	}
		break;
    	case !empty($_POST['url']): $code = random(5); $url = $_POST['url'];
        switch (true) {
        	case filter_var($url, FILTER_VALIDATE_URL) !== false:
			print "<script> tod.success({ status: 'Success', message: 'Your url was shorted!', align: 'topright' }); </script>";
			print "<div class='layer'>".url."/".$code."</div><span onclick='cp()' class='copy'>Copy</span>";
			$data = json(__DIR__.'/vendor/database/'.db); 
			$last = end($data);
			$id = ++$last['id'];
		switch (true) {
			case empty($data): $data[] = ['id' => '1', 'code' => $code, 'url' => $url, 'views' => 0]; break;
			default: $data[] = ['id' => ''.$id.'', 'code' => $code, 'url' => $url, 'views' => 0];
			} save(__DIR__.'/vendor/database/'.db, $data);
		break; default: print "<script> tod.danger({ status: 'Error', message: 'URL is invalid!', align: 'topright' }); </script>";
	} break; default: $data = json(__DIR__.'/vendor/database/'.db); define('total', count($data));  $show = json(__DIR__.'/vendor/database/'.setup); load(__DIR__.'/vendor/page/form.php', $show);
 } 