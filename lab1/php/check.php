<?php
    session_start();
    
    $history = [];
    if (isset($_SESSION['history']) && is_array($_SESSION['history'])) {
        $history = $_SESSION['history'];
    }

    $start_time = microtime(TRUE);
    $start_zone = date_default_timezone_get();
	$start_date = date('H:i:s');
	
	
    $x = (float) $_GET['x'];
    $y = (int) $_GET['y[]'];
    $r = (int) $_GET['r'];

    $hit = "";

    if (in_array($y, [-5,-4, -3, -2, -1, 0, 1, 2, 3]) && ($x <= 3.0 && $x >= -5.0)
		&& in_array($r, [1, 2, 3, 4, 5])) {
    	if ((($x < 0 && $y > 0) && (($x >= $r / 2) && ($y <= $r))) || 
    	(($x > 0 && $y < 0) && (($x * $x + $y * $y) <= ($r * $r))) || 
    	(($x < 0 && $y < 0) && ($y >= ($r / 2 - $x)))) {
    		$hit = "Попал";
    	} else {
    		$hit = "Не попал";
    	}
    }

    $scriptexec_time = round((microtime(TRUE) - $start_time) * 10e3, 3);

    if ($hit != "") {
		while (count($history) >= 3) {
   			array_shift($history);
		}

		array_push($history, [$x, $y, $r, $hit, $start_date, $start_zone, $scriptexec_time]);
    	$_SESSION['history'] = $history;
    }

    include_once 'table.php';
    ?>