<?php  include ('../Modelo/conexion.php') ?>
<?php  
 
 if ($_POST){
     $nombre = $_POST['nombre'];
     $categoria = $_POST['categoria'];
     $autor = $_POST['autor'];

 }
 if(isset($_POST["submit"])){
    $sql="INSERT INTO `lista` (`id_libro`, `nom_libro`, `categoria`, `Autor`) VALUES (NULL, ' $nombre ', ' $categoria ', '$autor');";
    if (mysqli_query($conn, $sql)) {
      header("location: ../Vista/index.php");
}
 else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  mysqli_close($conn);

 }
 
 
//print_r ($result);
?>
