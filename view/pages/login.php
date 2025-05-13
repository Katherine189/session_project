<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./view/styles/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1 id="titulo">LOGIN SESION</h1>
    </header>
    <main class="main-grid">
        <form method="POST" name="login">

            <div class="field">
                <label for="username" id="label">usuario</label>
                <input type="text" id="username" , name="username"  class="field-in"/>
            </div><br>

            <div class="field">
                <label for="password" id="label">contraseña</label>
                <input type="password" id="password" , name="password" class="field-in"/>
            </div><br>

            <div class="submit">
                <button type="submit" id="button_submit">Iniciar sesión</button>
            </div><br>
        </form>
        <a href="./view/pages/registro.php" target="_blank" rel="noopener noreferrer" id="button_submit">Registrarse</a>
    </main>
</body>

</html>