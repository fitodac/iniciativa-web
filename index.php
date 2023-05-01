<?php
// PHP router
$url = $_SERVER['REQUEST_URI'];

$routes = [
	'/' => 'home',
	// '/nosotros' => 'about',
	'/servicios' => 'services',
	'/contacto' => 'contact'
];


if (array_key_exists($url, $routes)) {
	// Si la ruta existe, obtener el controlador correspondiente
	$page = $routes[$url];
	// Incluye el archivo de la página
	require_once($page . '.php');
} else {
	// Si la ruta no existe, mostrar un error 404
	header('HTTP/1.1 404 Not Found');
	require_once('404.php');
}