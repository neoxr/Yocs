<?php
function load($n, $show = []) {
	return require $n;
}

function go($n) {
	header('Location: '.$n);
}

function json($n) {
	return json_decode(file_get_contents($n.'.json'), true);
}

function save($n, $o) {
	return file_put_contents($n.'.json', json_encode($o));
}

function random($n) {  
  	$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';  
  	$strs = ''; for($i = 0; $i < $n; $i++) {  
      $pos = rand(0, strlen($str)-1);  
      $strs .= $str{$pos};  
	} return $strs; 
}  

function check($k, $n, $m) {
   foreach ($m as $key => $val) {
       if ($val[$k] === $n) {
           return $key;
       }
   } return null;
}