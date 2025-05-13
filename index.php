<?php
include_once './infraestrcture/db.php';
include_once './model/user.php';
include_once './services/container.php';
include_once './infraestrcture/adapter/repositoryUser.php';

$user = new User();
$userRepository = new RepositoryUser();

if(isset($_SESSION['user'])){
    //echo "Hay sesión";
    $responseUser = $userRepository->findByUserName($service_session->getCurrentUser());
    $user->setUser($responseUser);

    include_once __DIR__ . '/view/pages/bienvenido.php';
}


else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "Validación de login";

    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if($userRepository->userExists($userForm, $passForm)){
        echo "usuario validado";
        $service_session->setCurrentUser(user: $userForm);
        $user->setUsername($userForm);

        include_once __DIR__ . '/view/pages/bienvenido.php';
    }else{
        //echo "nombre de usuario y/o password incorrecto";
        $errorLogin = "Nombre de usuario y/o password es incorrecto";
        include_once __DIR__ . '/view/pages/login.php';  // este es para que cambies por tu login 
    }

}
else{
    //echo "Login";
    include_once __DIR__ . '/view/pages/login.php';  //Este es para que cambies por tu login 
}


?>