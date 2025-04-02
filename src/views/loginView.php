<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="/login" method="POST">
            <label for="username">Benutzername:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Passwort:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Einloggen</button>
        </form>
        <a href="/register" class="register-link">Noch keinen Account? Jetzt registrieren</a>
    </div>
</body>
</html>