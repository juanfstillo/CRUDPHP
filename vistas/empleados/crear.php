<div class="card">
    <div class="card-header">
    Agregar Empleado     
    </div>
    <div class="card-body">
       <form action="" method="post">

       <div class="mb-3">
         <label for="nombre" class="form-label">Nombre</label>
         <input type="text"
           class="form-control" required name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del Empleado">
       </div>

<div class="mb-3">
  <label for="correo" class="form-label">Correo</label>
  <input type="email" required class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del empleado">
</div>

<input name="" id="" class="btn btn-success" type="submit" value="Agregar empleado">

<a href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancelar</a>

       </form>

    </div>

</div>