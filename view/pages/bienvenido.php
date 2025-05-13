
<?php
require_once __DIR__ . '/../../services/container.php';

if(!$service_session->getCurrentUser()){
    header("Location:/login/index.php");
    exit;
}

$usuario = $service_session->getCurrentUser();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./view/styles/style.css" rel="stylesheet">
    <body >
        <div  class="main-grid">
        <h1  id="titulo">Bienvenido a la página, <?=htmlspecialchars($usuario)?> </h1>
        <form method="POST" action="/login/view/pages/logout.php">
            <button type="submit">Cerrar sesión</button>
        </form>
        </div>
       
    </body>
</html>