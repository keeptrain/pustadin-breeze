<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (str_starts_with($path, "/build/assets/")) {
	if(str_ends_with($path, ".js")){
	    header('Content-Type: application/javascript; charset: UTF-8');
	    echo require __DIR__ . '/../public/' . $path;
	    return;
	}

	if(str_ends_with($path, ".css")){
		header("Content-type: text/css; charset: UTF-8");
		echo require __DIR__ . '/../public/' . $path;
		return;
	}
}

require __DIR__ . "/../public/index.php";