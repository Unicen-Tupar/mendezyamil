<?php

class PageHelpers{

  public static function homePageAutos(){
    header("Location: ".BASEURL."verautos");
    die();
  }

  public static function homePageMarcas(){
    header("Location: ".BASEURL."vermarcas");
    die();
  }

  public static function homePageLogin(){
    header("Location: ".BASEURL."login");
    die();
  }

  public static function homePageLogout(){
    header("Location: ".BASEURL."logout");
    die();
  }

  public static function homePage(){
    header("Location: ".BASEURL."");
    die();
  }

  public static function homePageUsuarios(){
    header("Location: ".BASEURL."verusuarios");
    die();
  }
}

?>
