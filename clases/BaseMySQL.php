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
    static public function buscarPorUsuario($usuario,$pdo,$tabla){

          $sql = "select * from $tabla where usuario = :usuario";

          $query = $pdo->prepare($sql);
          $query->bindValue(':usuario',$usuario);
          $query->execute();
          $usuario = $query->fetch(PDO::FETCH_ASSOC);
          return $usuario;
      }
  static public function guardarUsuario($pdo, $usuario){
      $sql = "INSERT INTO usuarios VALUES(default, :usuario, :nombre, :apellido, :email, :sexo, :pais, :avatar,:contrasena,:fecha)";

      $guardarUsu = $pdo->prepare($sql);
      $guardarUsu->bindValue(':nombre', $usuario->getNombre());
      $guardarUsu->bindValue(':apellido', $usuario->getApellido());
      $guardarUsu->bindValue(':email', $usuario->getEmail());
      $guardarUsu->bindValue(':contrasena', $usuario->getPassword());
      $guardarUsu->bindValue(':sexo', $usuario->getSexo());
      $guardarUsu->bindValue(':pais', $usuario->getPais());
      $guardarUsu->bindValue(':avatar', $usuario->getAvatar());
      $guardarUsu->bindValue(':usuario', $usuario->getUser());
      $guardarUsu->bindValue(':fecha', $usuario->getFecha());

      $guardarUsu->execute();
  }
  static public function guardarUsuarioJson($usuario,$fecha,$imagen)
  {
    $contraHash = password_hash($usuario["contraseña"], PASSWORD_DEFAULT);
    $datos=[
      "nombre" => $usuario["nombre"],
      "apellido" => $usuario["apellido"],
      "usuario"=>$usuario["usuario"],
      "email" => $usuario["email"],
      "contraseña"=>$contraHash,
      "pais"=>$usuario["pais"],
      "sexo"=>$usuario["sexo"],
      "Nacimiento"=>$imagen,
      "FotoDePerfil"=>$fecha
    ];
    $json = json_encode($datos);
    file_put_contents("usuarios.json",$json.PHP_EOL, FILE_APPEND);
  }
  public function leer($DB){
    $query="SELECT * FROM usuarios";
    $insert=$DB->prepare($query);
    $insert->execute();
    $array=$insert->fetchALL(PDO::FETCH_ASSOC);
    return $array;
  }
static public function guardarMascota($pdo, $usuarioM){
  $sql = "INSERT INTO mascota VALUES(default, :nombre, :tipo, :sexo, :fecha, :pelaje)";

  $guardarUsuM = $pdo->prepare($sql);
  $guardarUsuM->bindValue(':nombre', $usuarioM->getNombre());
  $guardarUsuM->bindValue(':tipo', $usuarioM->getTipo());
  $guardarUsuM->bindValue(':fecha', $usuarioM->getFecha());
  $guardarUsuM->bindValue(':sexo', $usuarioM->getSexo());
  $guardarUsuM->bindValue(':pelaje', $usuarioM->getPelaje());

  $guardarUsuM->execute();
}
}
 ?>
