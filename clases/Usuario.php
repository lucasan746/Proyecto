<?php
class Usuario{
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $sexo;
    private $pais;
    private $avatar;
    private $user;
    private $fecha;

    public function __construct($usuario,$contra,$fecha,$avatar){
        $this->nombre = $usuario["nombre"];
        $this->apellido = $usuario["apellido"];
        $this->email = $usuario["email"];
        $this->password = $contra;
        $this->sexo = $usuario["sexo"];
        $this->pais = $usuario["pais"];
        $this->avatar = $avatar;
        $this->user=$usuario["usuario"];
        $this->fecha=$fecha;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }
    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
    public function getFecha()
    {
        return $this->user;
    }

    public function setFecha($user)
    {
        $this->user = $user;

        return $this;
    }

}
?>
