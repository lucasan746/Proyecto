<?php

class UsuarioMascota{
  private $nombre;
  private $tipo;
  private $fecha;
  private $sexo;
  private $pelaje;

  public function __construct($mascota,$fecha){
    $this->nombre=$mascota["nombre"];
    $this->tipo=$mascota["tipo"];
    $this->fecha=$fecha;
    $this->sexo=$mascota["sexo"];
    $this->pelaje=$mascota["pelaje"];
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
    return $this;
  }
  public function getTipo(){
    return $this->tipo;
  }
  public function setTipo($tipo){
    $this->tipo = $tipo;
    return $this;
  }
  public function getFecha(){
    return $this->fecha;
  }
  public function setFecha($fecha){
    $this->fecha = $fecha;
    return $this;
  }
  public function getSexo(){
    return $this->sexo;
  }
  public function setSexo($sexo){
    $this->sexo = $sexo;
    return $this;
  }
  public function getPelaje(){
    return $this->pelaje;
  }
  public function setPelaje($pelaje){
    $this->pelaje = $pelaje;
    return $this;
  }
}
 ?>
