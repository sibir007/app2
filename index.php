<?php
header('X-My-Header: hi');

// ПРобаж
echo "SERVER \n";
/*array_map(function ($item) {
	print_r($item);
	echo "\n";
}, $_SERVER);
 */
print_r($_REQUEST) . "\n";
echo "GET \n";
echo date('Y');

echo "Hello world";
if ($_SERVER['REQUEST_URI'] != '/'){
	echo 'Page not found. <a href="/">main</a>';
};
