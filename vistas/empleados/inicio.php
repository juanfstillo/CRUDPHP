<div class="card">
    <div class="card-header">
Empleados
<a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Agregar Empleado</a>

    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($empleados as $empleado){?>

        <tr>
            <td><?= $empleado->id;?></td>
            <td><?= $empleado->nombre;?></td>
            <td><?= $empleado->correo;?></td>
            <td>
            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=empleados&accion=editar&id=<?= $empleado->id;?>" class="btn btn-secondary">Editar</a>
                <a href="?controlador=empleados&accion=borrar&id=<?= $empleado->id;?>" class="btn btn-danger">Borrar</a>
            </div>    
            
            </td>

        </tr>
<?php }?>
        
    </tbody>
</table>

        
    </div>
    
</div>

