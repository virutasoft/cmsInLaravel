<?php
    $usuarios = ControladorFormularios::ctrSeleccionarRegistros();
    //echo "<pre>";print_r($usuarios);"</pre>";
?>

<!-- contenido -->

            <h2>Tabla de usuarios</h2>
            <p>Aquí puede visualizar los usuarios del sistema</p>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
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
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["email"].'</td>
                        <td>'.$value["fecha"].'</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </td>
                    </tr>';
                    }
                    
                    ?>
                    
                    
                </tbody>
            </table>
