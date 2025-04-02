<?php

// Autoloader laden
require_once __DIR__ . '/../src/core/Autoloader.php';

// Namespace verwenden
use Core\Router;
use Controllers\LoginController;

// Router initialisieren
$router = new Router();

// LoginController instanziieren
$loginController = new LoginController();

// Routen definieren
// Route für die Startseite (Login-Seite)
$router->add('/', [$loginController, 'showLoginForm']);

// Route für die Login-Verarbeitung
$router->add('/login', [$loginController, 'processLogin']);

// Route für die Registrierung anzeigen
$router->add('/register', [$loginController, 'showRegisterForm']);

// Route für die Registrierung verarbeiten
$router->add('/register/post', [$loginController, 'processRegister']);

// URL aus der Anfrage extrahieren
$url = $_SERVER['REQUEST_URI'];

// Anfrage an den Router weiterleiten
$router->dispatch($url);