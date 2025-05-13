<?php
class CreateUser
{
    private ?string $contrasena;
    private ?int $edad;
    private ?string $email;
    private ?string $nombre;
    private ?string $surname;
    private ?string $telefono;
    private ?string $username;
    private ?string $id_usuario;

    public function __construct(
        ?string $contrasena = null,
        ?int $edad = null,
        ?string $email = null,
        ?string $nombre = null,
        ?string $surname = null,
        ?string $telefono = null,
        ?string $username = null
    ) {
        $this->contrasena = $contrasena;
        $this->edad = $edad;
        $this->email = $email;
        $this->nombre = $nombre;
        $this->surname = $surname;
        $this->telefono = $telefono;
        $this->username = $username;
        $this->id_usuario = null;
    }

    public function setUser($query)
    {
        echo $query;
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['name'];
            $this->username = $currentUser['usuario'];
            $this->id_usuario = $currentUser['id'];
        }
    }

    // Getters
    public function getContrasena(): ?string
    {
        return $this->contrasena;
    }

    public function getEdad(): ?int
    {
        return $this->edad;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getId(): ?string
    {
        return $this->id_usuario;
    }

    // Setters
    public function setContrasena(?string $contrasena): void
    {
        $this->contrasena = $contrasena;
    }

    public function setEdad(?int $edad): void
    {
        $this->edad = $edad;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function setNombre(?string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    public function setTelefono(?string $telefono): void
    {
        $this->telefono = $telefono;
    }

    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    public function setId(?string $id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }
}
?>
