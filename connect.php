<?php 
	//if (@_SERVER['HTTP_HOST']=='localhost') {
		// $DB_SERVER = 'localhost';
		// $DB_USER_READER = 'root';
		// $DB_PASS_READER = '';
		// $DB_NAME = 'db002_exchangerate';

		//echo "localhost";
	// } else {
		// บน server imsu.co
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'u13580200';
		$DB_PASS_READER = 'R6H9LUcZT7';
		$DB_NAME = 'db13580200';
	// }

	// คำสั่งที่ใช้ต่อกับฐานข้อมูล
	$conn = new mysqli($DB_SERVER,$DB_USER_READER,$DB_PASS_READER,$DB_NAME);

	//ตรวจสอบว่าต่อสำเร็จหรือไม่
	if (!$conn) {
		die("connection failed".mysqli_connect_error());
	}

	mysqli_set_charset($conn, "utf8");
	
	// date_default_timezone_set ( "Asia / Bangkok" ); 
	// echo date_default_timezone_get (); 
?>