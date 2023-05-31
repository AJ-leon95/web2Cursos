<center> <h1>Esta es la lista de Estudiantes</h1></center>

<?php foreach ($estudiantes as $filaTemporal){
    echo $filaTemporal->id_est; 
} ?>
<div class="container">
    

    <table class="table table-hover table-dark border-primary">
        <thead class="table-primary">
            <tr>
                <th>id</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>nombres</th>
                <th>Ciclo</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>

            </tr>
            </thead>
        <tbody>
            <?php foreach ($estudiantes as $registroEstdiante){ ?>
            <tr>
                <td> <?php echo $registroEstdiante->id_est ?></td>
                <td> <?php echo $registroEstdiante->pimer_apellido_est ?></td>
                <td> <?php echo $registroEstdiante->segundo_apellido_est ?></td>
                <td> <?php echo $registroEstdiante->nombres_est ?></td>
                <td> <?php echo $registroEstdiante->ciclo_est ?></td>
                <td> <?php echo $registroEstdiante->edad_est ?></td>
                <td> <?php echo $registroEstdiante->correo_est ?></td>
                <td> <?php echo $registroEstdiante->telefono_est ?></td>
                <td> Ediar / Eliminar<td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>