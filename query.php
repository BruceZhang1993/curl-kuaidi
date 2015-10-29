<?php

	header("content-type: text/html; charset=utf-8");
	include 'kuaidi.class.php';

	if(@$_REQUEST['com']) {
		$com = @$_REQUEST['com']?$_REQUEST['com']:0;
		$num = @$_REQUEST['num']?$_REQUEST['num']:0;
		$query = new Kuaidi($num);
		echo $query -> query_num($com);
	}else {
		$num = @$_REQUEST['num']?$_REQUEST['num']:0;
		if($num) {
			$query = new Kuaidi($num);
			echo $query -> quick_query();
		}else {
			echo "No input.";
		}
	}
	

 ?>