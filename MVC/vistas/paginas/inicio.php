<?php

    if (!(isset($_SESSION["validarIngreso"]))) {
        # code...
        echo '<script>
            
            window.location="index.php?pagina=registro";
            </script>';

            return;
        
    } else {
        # code...
        if ($_SESSION["validarIngreso"] != "ok") {
            # code...
            echo '<script>
            
            window.location="index.php?pagina=registro";
                </script>';

                return;
        }
        
    }
    
    $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
    //echo "<pre>";print_r($usuarios);"</pre>";

    
?>

<!-- contenido -->

            <h2>Tabla de usuarios</h2>
            <p>Aquí puede visualizar los usuarios del sistema</p>
            <table class="table table-dark table-hover text-uppercase">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>NOMBRE</th>
                        <th>EMAIL</th>
                        <th>FECHA</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($usuarios as $key => $value) {
                        # code...
 
                        echo '<tr>
                        <td>'.($key+1).'</td>
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["email"].'</td>
                        <td>'.$value["fecha"].'</td>
                        <td>
                            <div class="btn-group">
                                <div class="px-2">
                                    <a href="index.php?pagina=editar&id='.$value["id"].'"><button class="btn-warning btn-lg"><i class="fas fa-pencil-alt"></i></button></a>
                                </div>
                                <form method="post">
                                    <input type="hidden" value="'.$value["id"].'" name="eliminarRegistro">
                                    <button type="submit" class="btn-danger btn-lg"><i class="fas fa-trash-alt"></i></button>';
                                    $eliminar = new ControladorFormularios();
                                    $eliminar -> ctrEliminarRegistro();
                                '</form>
                            </div>
                        </td>
                    </tr>';
                    }
                    
                    


                    ?>
                    
                    
                </tbody>
            </table>
