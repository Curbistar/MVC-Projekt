<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="login-container">
        <h1>Registrierung</h1>
        <form action="/register" method="POST">
            <label for="username">Benutzername:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Passwort:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Registrieren</button>
        </form>
    </div>    
</body>
</html>