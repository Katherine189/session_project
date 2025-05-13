<?php
require_once __DIR__ . '/../../model/dto/createUser.php';
include_once __DIR__ . '/../../infraestrcture/adapter/repositoryUser.php';
include_once __DIR__ . '/../../services/container.php';

$showValidatationMessage = false;
$messageValidationMessage = '';


if (
    isset($_POST['password']) && isset($_POST['age'])
    && isset($_POST['email']) && isset($_POST['name'])
    && isset($_POST['surname']) && isset($_POST['phone'])
    && isset($_POST['username'])
) {
    $userRepository = new RepositoryUser();

    $userCreate = new CreateUser(
        $_POST['password'],
        $_POST['age'],
        $_POST['email'],
        $_POST['name'],
        $_POST['surname'],
        $_POST['phone'],
        $_POST['username']
    );


    try {

        $userRepository->registerUser($userCreate);
        $service_session->setCurrentUser($userCreate->getUsername());

        header("Location:/login/index.php");
        exit();
    } catch (Exception $e) {
        $showValidatationMessage = true;
        $messageValidationMessage = $e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../styles/style.css" rel="stylesheet">

</head>

<body>
    <header>
        <h1 id="titulo">REGISTRO SESION</h1>
    </header>
    <main class="main-grid">
        <span>
            <?php
            if ($showValidatationMessage) {
                echo '' . $messageValidationMessage . '';
            }
            ?>
        </span>
        <form method="POST" name="registro">


            <div>
                <label for="name" id="label">nombre</label>
                <input type="text" id="name" , name="name" class="field-in" />
            </div><br>
            <div>
                <label for="surname" id="label">apellido</label>
                <input type="text" id="surname" , name="surname" class="field-in" />
            </div><br>
            <div>
                <label for="age" id="label">edad</label>
                <input type="number" id="age" , name="age" class="field-in" />
            </div><br>
            <div>
                <label for="email" id="label">email</label>
                <input type="email" id="email" , name="email" class="field-in" />
            </div><br>
            <div>
                <label for="phone" id="label">telefono</label>
                <input type="text" id="phone" , name="phone" class="field-in" />
            </div><br>
            <div class="field">
                <label for="username" id="label">usuario</label>
                <input type="text" id="username" , name="username" class="field-in" />
            </div><br>
            <div class="field">
                <label for="password" id="label">contraseña</label>
                <input type="password" id="password" , name="password" class="field-in" />
            </div><br>

            <div class="submit">
                <button type="submit" id="button_submit">Registrar usuario</button>
            </div>
        </form>
    </main>
</body>

</html>