<?php
	# Database Configuration
	$db_ip='127.0.0.1';
	$db_port='3306';
	$db_user='root';
	$db_pass='db@dm1n';
	$db_name='cotton';
	$db_suffix='_akamai_ehq';

	$meter_read_interval='0';

	$report_file = 'service/report/Report.csv';
	$start_day_of_week='0'; //Start day is Monday. if Sunday then value -1 else if tuesday value +1
	$start_day_of_month='01'; //Start day is 06.
	$start_month_of_year='01'; //Start Month is January. If January then value 01.
	# Software Configuration
	$location_level1_name='Regions';
	$location_level2_name='Countries';
	$location_level3_name='Cities';
	$location_level4_name='Zones';
	# E-mail Configuration
	$sender_email='bugzilla@cilantrotech.com';
	$sender_password='MGgxXyvQ6lVwgV1c79wljQ==';

	$safe_time =15;	# minutes
	$expired_time =15; 	# minutes
?>
