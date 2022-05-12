<?php  include ('../Modelo/conexion.php') ?>
<?php 
if ($_POST){
    $nombre = $_POST['nombre'];

}
if(isset($_POST["submit"])){
        $sql = "DELETE FROM `lista` WHERE `lista`.`id_libro` = $nombre";
        if (mysqli_query($conn, $sql)){

            echo "<p> Registro Eliminado</p>";


        }
        else{
            echo "Error: " .$sql . "<br>" . mysqli_error($conn);
        }
      mysqli_close($conn);
}
  ?>