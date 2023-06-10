

<div class="container">
<center>

<div class="row">
    <div class="col-8"><h1>
        <b>Listado de Estudiante</b></h1></div>
    <div class="col-4">
        <a name="" id="" class="btn btn-primary" href="<?php echo site_url("Instructores/nuevo") ?>" role="button"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
            </svg>Agregar Instructor</a>
    </div>

</div>
</center>
<br>


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
                <td class="text-center">
                        <a href="" title="Ediatar instructores"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg></a> &nbsp;&nbsp;&nbsp;;
                        <a href="<?php echo site_url("Estudiantes/Eliminar/$registroEstdiante->id_est ") ?>" title="Eliminar Estudiante"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" style="color: red;" onclick="return confirm('Estas seguro')" >
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                            </svg></a>
                    </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>