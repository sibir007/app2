<?php
/*header('X-My-Header: hi');

// ПРобаж
echo "SERVER \n";
array_map(function ($item) {
	print_r($item);
	echo "\n";
}, $_SERVER);


//print_r($GENERAL) . "\n";
echo "GET \n";
echo date('Y');

header("Status: 404 Not Found");
//http_response_code(404);
echo "Hello world";
if ($_SERVER['REQUEST_URI'] != '/'){
	echo 'Page not found. <a href="/">main</a>';
	//header("Status: 404 Not Found");
	http_response_code(404);
};	

 */
//<?php

// BEGIN (write your solution here)
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        echo '<a href="/welcome">welcome</a>
        <br><a href="/not-found">not-found</a>
        break';
    case '/welcome':
        echo '<a href="/">main</a>';
        break;        
    default:
        http_response_code(404);
        echo 'Page not found. <a href="/">main</a>';
}
// END
