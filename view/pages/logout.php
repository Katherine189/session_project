<?php
    require_once __DIR__ . '/../../services/container.php';

    $service_session->closeSession();

    header("Location: /login/index.php");
    exit(); 

?>