<?php
    include 'conn.php';
    $instanciaDB = new DataBase;
  
    if(isset($_POST['submit']) && !empty($_POST['submit'])){
      $newCropName = $instanciaDB->sanitize($_POST['cropName']);
      $execute = $instanciaDB->createNewCrops($newCropName);
          
      if($execute){
          $message= "Datos insertados con éxito";
          $class="alert alert-success";
        }else{
          $message="No se pudieron insertar los datos";
          $class="alert alert-danger";
        }

        $contenedor = "<div class='$class'>$message</div>";
      }  
?>