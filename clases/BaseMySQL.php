<?php
/**
 *
 */
class BaseDatos
{

  static public function conectarDB($host,$db_nombre,$usuario,$password,$puerto){
      try {
          $dsn = "mysql:host=".$host.";"."dbname=".$db_nombre.";"."port=".$puerto.";";
          $baseDatos = new PDO($dsn,$usuario,$password);
          $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          return $baseDatos;
      } catch (PDOException $errores) {
          echo "No me pude conectar a la BD ". $errores->getmessage();
          exit;
      }
  }
  static public function buscarPorEmail($email,$pdo,$tabla){

        $sql = "select * from $tabla where email = :email";
        
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }
  static public function guardarUsuario($pdo, $usuario){
      $sql = "INSERT INTO user VALUES(default, :nombre, :apellido, :email, :contrasena, :sexo, :pais, :avatar,:usuario)";

      $guardarUsu = $pdo->prepare($sql);
      $guardarUsu->bindValue(':nombre', $usuario->getNombre());
      $guardarUsu->bindValue(':apellido', $usuario->getApellido());
      $guardarUsu->bindValue(':email', $usuario->getEmail());
      $guardarUsu->bindValue(':contrasena', $usuario->getPassword());
      $guardarUsu->bindValue(':sexo', $usuario->getSexo());
      $guardarUsu->bindValue(':pais', $usuario->getPais());
      $guardarUsu->bindValue(':avatar', $usuario->getAvatar());
      $guardarUsu->bindValue(':usuario', $usuario->getUser());

      $guardarUsu->execute();
  }
  public function leer($DB){
    $query="SELECT * FROM user";
    $insert=$DB->prepare($query);
    $insert->execute();
    $array=$insert->fetchALL(PDO::FETCH_ASSOC);
    return $array;
  }

}


 ?>