<!-- contenido -->

<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-warning" method="POST">
       
        <div class="form-group">
            <label for="email">Email:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
            <input type="email" class="form-control" name="ingresoEmail" id="email">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <input type="password" class="form-control" name="ingresoPassword" id="pwd">
            </div>
            
        </div>
        <?php
        // método público
            // $registro = new ControladorFormularios();
            // $registro->ctrRegistro();
        // método estático -< se instancia para poderlo reutilizar en la vista
        // método no estatico -> para q se ejecuten directamente en el controlador -< se instancia para poderlo reutilizar en la vista

        $ingreso = new ControladorFormularios();
        $ingreso->ctrIngreso();
        
        


        ?>
        <button type="submit" class="btn btn-dark">Ingresar</button>
    </form>

</div>          
