<?php
class User
{
    private ?string $nombre;
    private ?string $username;
    private ?string $id_usuario;

    public function __construct(?string $nombre = null,
                                 ?string $username = null,
                                 ?string $id_usuario = null)
    {
        $this->nombre = $nombre;
        $this->username = $username;
        $this->id_usuario = $id_usuario;
    }

    public function setUser($query)
    {
        
        //print_r($query); // aqui cambié

        if (is_array($query)) {

        $this->nombre = $query['name'] ?? null;

        $this->username = $query['usuario'] ?? null;

        $this->id_usuario = $query['id'] ?? null;

        } else {

            echo "Error: el valor proporcionado a setUser no es un array.";

        }
    }

    // Getters
    public function getNombre(): ?string
    {
        return $this->nombre;
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
    public function setNombre(?string $nombre): void
    {
        $this->nombre = $nombre;
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
