<?php
require_once "./model/LoginModel.php";
require_once "./view/LoginView.php";

class LoginController {

  private $loginModel;
  private $loginView;

  function __construct(){
    $this->loginModel = new LoginModel();
    $this->loginView = new LoginView();
  }

  function login($params = [])
  {
    $this->loginView->mostrarLogin();
  }

  function logout($params = [])
  {
    session_start();
    session_destroy();
    PageHelpers::homePage();
  }

  function validarLogin($params = [])
  {
    $usuario = $this->loginModel->obtenerUsuario($_POST['usuario']);
    //verifica que el hashing de la pass coincida con lo ingresado
    if(password_verify($_POST['pass'], $usuario['password'])){
      session_start();
      //se guarda en la variable del server para almacenar los datos del usuario
      $_SESSION['usuario'] = $usuario['usuario'];
      $_SESSION['admin'] = $usuario['admin'];
      //$_SESSION['ultima_conexion'] = time();
      PageHelpers::homePage();
    }
    else {
      PageHelpers::homePage();
    }
  }

  function crearUsuario($params = [])
  {
    $this->loginView->mostrarCrearUsuario();
  }

  function guardarusuario($params = []){
    $usuario = [
      'nombre' => $_POST['nombre'],
      'apellido' => $_POST['apellido'],
      'usuario' => $_POST['usuario'],
      'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
      'admin' => 0,
    ];
    $this->loginModel->insertarUsuario($usuario);
    PageHelpers::homePage();
  }
}
?>
