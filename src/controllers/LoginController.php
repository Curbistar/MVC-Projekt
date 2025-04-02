<?php

namespace Controllers;

class LoginController
{
    public function showLoginForm()
    {
        require_once __DIR__ . '/../views/loginView.php';
    }

    public function processLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            // Beispiel: Benutzername und Passwort prüfen
            if ($username === 'admin' && $password === 'password') {
                echo "Login erfolgreich! Willkommen, {$username}.";
            } else {
                echo "Ungültige Anmeldedaten.";
            }
        } else {
            echo "Ungültige Anfrage.";
        }
    }

    public function showRegisterForm()
    {
        require_once __DIR__ . '/../views/registerView.php';
    }

    public function processRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            // Beispiel: Benutzer in einer Datenbank speichern (Dummy-Logik)
            if (!empty($username) && !empty($password)) {
                // Passwort hashen (sicherer Umgang mit Passwörtern)
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Hier würdest du den Benutzer in der Datenbank speichern
                // Beispiel: INSERT INTO users (username, password) VALUES ($username, $hashedPassword);

                echo "Registrierung erfolgreich! Benutzer {$username} wurde angelegt.";
            } else {
                echo "Bitte füllen Sie alle Felder aus.";
            }
        } else {
            echo "Ungültige Anfrage.";
        }
    }
}