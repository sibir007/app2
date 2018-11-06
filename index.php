<?php
header('X-My-Header: hi');

// ПРобаж
echo "SERVER \n";
/*array_map(function ($item) {
	print_r($item);
	echo "\n";
}, $_SERVER);
 */
print_r($_POST) . "\n";
echo "GET \n";
echo date('Y');

echo "Hello world";
