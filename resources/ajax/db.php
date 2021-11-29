<?php 
	session_start();
	error_reporting(0);
	$user = 'stellarpreporg_admin';
	$host = 'localhost';
	$pass = '8]g*qIZk;q$R';
	$dbname = 'stellarpreporg_site';

// 	$user = 'root';
// 	$host = 'localhost';
// 	$pass = '';
// 	$dbname = 'tutor_hiring';

	$con = mysqli_connect($host, $user, $pass, $dbname);

	function dateConvert($date){
        $Month = date("F", strtotime($date));
        $Date = date("d", strtotime($date));
        $Year = date("y", strtotime($date));
        return $Month.' '.$Date.', 20'.$Year;
    }
?>