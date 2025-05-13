<?php
include_once __DIR__ . '/../db.php';
require_once __DIR__ . '/../../model/user.php';
require_once __DIR__ . '/../../model/dto/createUser.php';

class RepositoryUser extends DB
{
    private ?PDO $pdo;

    public function __construct() {
        parent::__construct();
        $this->pdo = $this->connect();
    }

    public function validateUsername( ?string $user){
        
        $query = $this->pdo->prepare(
            'SELECT 1 FROM persona WHERE usuario = :user limit 1'
        );

        $query->execute(['user' => $user]);

        if ($query->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function validateEmail( ?string $email){
        
        $query = $this->pdo->prepare(
            'SELECT 1 FROM persona WHERE email = :email LIMIT 1'
        );
        
        $query->execute(['email' => $email]);

        if ($query->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function userExists($user, $pass)
    {
        $md5pass = ($pass);

        $query = $this->pdo->prepare('SELECT * FROM persona WHERE usuario = :user AND contrasena = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if ($query->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function findByUserName($user)
    {
        echo 'user : ' . $user;
        $query = $this->pdo->prepare('SELECT * FROM persona WHERE usuario = :user');
        $query->execute(['user' => $user]);

        $result = $query->fetch(PDO::FETCH_ASSOC);//cambié esta línea
        print_r($result);
        return $result;
    }

    public function registerUser(CreateUser $user)
    {
        if($this->validateUsername($user->getUsername())){
            throw new RuntimeException('Usuario ya existe');
        }

        if($this->validateEmail($user->getEmail())){
            throw new RuntimeException('Email ya existe');
        }

        try {

            $query = "INSERT INTO persona (contrasena, edad, email, name, surname, telefono, usuario) " .
                "VALUES (:contrasena, :edad, :email, :name, :surname, :telefono, :usuario)";

        

            $this->pdo->beginTransaction();
            
            $stmt = $this->pdo->prepare($query);

            print_r($user);
            
            $stmt->execute([
                ':contrasena' => $user->getContrasena(),
                ':edad'       => $user->getEdad(),
                ':email'      => $user->getEmail(),
                ':name'       => $user->getNombre(),
                ':surname'    => $user->getSurname(),
                ':telefono'   => $user->getTelefono(),
                ':usuario'    => $user->getUsername()
            ]);

            $this->pdo->commit();


        } catch (Exception $e) {
            $this->pdo->rollBack();
            throw $e;
        } 
    }
}
