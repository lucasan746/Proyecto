<?php

class Usuario_mascota{
  private $nombre;
  private $mascota;
  private $cumpleanos;
  private $sexo;
  private $color;

  public function __construct($nombre, $mascota, $cumpleanos, $sexo, $color){
    $this->nombre = $nombre;
    $this->mascota = $mascota;
    $this->cumpleanos = $cumpleanos;
    $this->sexo = $sexo;
    $this->color = $color;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
    return $this;
  }
  public function getMascota(){
    return $this->mascota;
  }
  public function setMascota($mascota){
    $this->mascota = $mascota;
    return $this;
  }
  public function getCumpleanos(){
    return $this->cumpleanos;
  }
  public function setCumpleanos($cumpleanos){
    $this->cumpleanos = $cumpleanos;
    return $this;
  }
  public function getSexo(){
    return $this->sexo;
  }
  public function setSexo($sexo){
    $this->sexo = $sexo;
    return $this;
  }
  public function getColor(){
    return $this->color;
  }
  public function setColor($color){
    $this->color = $color;
    return $this;
  }
}
 ?>
