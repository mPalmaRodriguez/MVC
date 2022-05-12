<?php  include ('../Controlador/visualizar.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prueba Fergon</title>
</head>
<body>
<h1>Apartado para insertar registro</h1>    
  
    <a href="actualizar_registro.php">Actualizar registro</a>
    <a href="eliminar_registro.php">Eliminar registro</a>

    <form action="../Controlador/insertar.php" method="post">
        <label for=""> Nombre del libro</label>
        <input type="text" name="nombre" id="">
    <br>
    <label for=""> Nombre del autor</label>
        <input type="text" name="autor" id="">
        <br>
    <select name="categoria" id="">
        <option value="comedia">comedia</option>
        <option value="accion">accion</option>
        <option value="terror">terror</option>
        <option value="aventura">aventura</option>
        <option value="drama">drama</option>
    </select>
    <br>
    <input class="btn" type="submit" value="Enviar" name="submit">
    </form>
    <h1>DATOS REGISTRADOS</h1>

       <table>
           <tr>
               <td>ID</td>
               <td>libro</td>
               <td>autor</td>
               <td>categoria</td>

           </tr>

            <?php foreach ($result as $row) {  ?>

           <tr>
               <td><?php echo $row['id_libro']; ?></td>
               <td><?php echo $row['nom_libro']; ?></td>
               <td><?php echo $row['Autor']; ?></td>
               <td><?php echo $row['categoria']; ?></td>

           </tr>
                <?php }  ?>
       </table> 

</body>
</html>