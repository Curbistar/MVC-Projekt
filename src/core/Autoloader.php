<?php

spl_autoload_register(function ($class) {
    // Namespace in den Pfad umwandeln
    $file = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';

    // Prüfen, ob die Datei existiert
    if (file_exists($file)) {
        require_once $file;
    } else {
        // Optional: Fehlerbehandlung, wenn die Datei nicht gefunden wird
        throw new Exception("Die Klasse {$class} konnte nicht geladen werden. Datei {$file} fehlt.");
    }
});