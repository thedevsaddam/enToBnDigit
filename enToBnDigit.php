<?php 
/*
* Author: Md. Saddam H
* E-mail: thedevsaddam@gmail.com
* Web: https://www.linkedin.com/in/thedevsaddam
*/
if (!function_exists('enToBn')) {
	function enToBn($digit = null){
		if(null === $digit){ return;}
		$bengali = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
		return str_replace(range(0, 9), $bengali, $digit);
	}
}
/*
//usages:
echo "<meta charset='UTF-8'>";
echo "<p style='font-size:40px;'>";
echo enToBn('2015-12-14 15:46:09');
*/
