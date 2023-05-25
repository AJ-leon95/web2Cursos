<div class="container">

    <center>

        <h1>NUEVO ESTUDIANTE</h1>
    </center><br><br>
    <form class="" action="<?php echo site_url("/Estudiantes/guardar_est") ?>" method="post">

        <div class="row">
            <div class="col-4">
                <label for="">Primer apellido</label>
                <br>
                <input type="text" placeholder="Ingrese primer apellido " class="form-control" name="pimer_apellido_est" value="" id="pimer_apellido_est">
            </div>
            <div class="col-4">
                <label for="">Segundo Apellido:</label>
                <br>
                <input type="text" placeholder="Ingrese el segundo apellido" class="form-control" name="segundo_apellido_est" value="" id="segundo_apellido_est">
            </div>
            <div class="col-4">
                <label for="">Nombres:</label>
                <br>
                <input type="text" placeholder="Ingrese sus nombres" class="form-control" name="nombres_est" value="" id="nombres_est">
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-4">
                <label for="">Ciclo</label>
                <br>
                <input type="number" placeholder="Ingrese el titulo" class="form-control" name="ciclo_est" value="" id="ciclo_est">
            </div>
            <div class="col-4">
                <label for="">Edad</label>
                <br>
                <input type="text" placeholder="Ingrese el telefono" class="form-control" name="edad_est" value="" id="edad_est">
            </div>
            <div class="col-4">
                <label for="">Coreo</label>
                <br>
                <input type="email" placeholder="Ingrese el telefono" class="form-control" name="correo_est" value="" id="correo_est">
            </div> <br>


        </div> <br>

        <div class="row">
            <div class="col-12">
                <label for="">Telefono</label>
                <br>
                <input type="text" placeholder="Ingrese el telefono" class="form-control" name="telefono_est" value="" id="telefono_est">
            </div>
        </div>


        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" name="button" class="btn btn-primary">Guardar</button>
                &nbsp;
                <a href="<?php echo site_url(); ?>/estudiantes/index" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>