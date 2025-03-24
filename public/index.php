<?php
//error_reporting(E_ALL & ~E_DEPRECATED&E_WARNING);
error_reporting(0);
// Composer autoload betöltése
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Controller;

session_start();

// Kérések URL-jének feldolgozása
$requestUri = $_SERVER['REQUEST_URI']; // Az URL lekérése
$requestUri = trim($requestUri, '/'); // Az URL kivehető szegmensek eltávolítása

// Debug: kiíratjuk a requestUri-t
//echo "Request URI: " . $requestUri . "<br>";

$uriParts = explode('/', $requestUri);

// Debug: kiíratjuk az URL részeket
//echo "URI Parts: ";
//print_r($uriParts);
//echo "<br>";

// Alapértelmezett controller és action
$controllerName = ucfirst($uriParts[0] ?: 'home') . 'Controller'; // Ha üres, alapértelmezett: HomeController
$actionName = $uriParts[1] ?? 'index'; // Ha üres, alapértelmezett: index action

// Debug: kiíratjuk a controller és action nevét
//echo "Controller Name: " . $controllerName . "<br>";
//echo "Action Name: " . $actionName . "<br>";

// Paraméterek kezelése (pl. /post/1, ahol '1' id paraméter)
$params = array_slice($uriParts, 2);

// A controller osztály neve, teljes névvel a namespace-szel
$controllerClass = 'App\\Controllers\\' . $controllerName;

// Ellenőrizzük, hogy létezik-e a controller osztály
if (class_exists($controllerClass)) {
    $controller = new $controllerClass(); // A megfelelő controller példányosítása

    // Ellenőrizzük, hogy létezik-e az action metódus
    if (method_exists($controller, $actionName)) {
        // Paraméterek átadása és az action meghívása
        call_user_func_array([$controller, $actionName], $params);
    } else {
        echo "Action '{$actionName}' not found.";
    }
} else {
    echo "Controller '{$controllerName}' not found.";
}
