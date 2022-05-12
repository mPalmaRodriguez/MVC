<?php  include ('../Modelo/conexion.php') ?>
<?php 
 if ($_POST){

     $nombre = $_POST['nombre'];
     $autor = $_POST['autor'];
 }
$sql = "UPDATE lista SET nombre = '$nombre' WHERE autor = '$autor'" ;
if(mysqli_query($conn, $sql)){
    echo "<p>Registro actualizado</p>";
}
else{
    echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}
  mysqli_close($conn);
    
  ?>