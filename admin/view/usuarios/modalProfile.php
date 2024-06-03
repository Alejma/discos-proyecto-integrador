<?php
foreach ($usuario as $usu) {
  ?>
<div class="modal-body">
    <form action="<?php echo getUrl("Usuarios","Usuarios","postUpdateProfile")?>" method="post" enctype="multipart/form-data">
        <div class="alert alert-dark" role="alert">
            <h4 class="text-center">Bienvenido usuario <?php echo $_SESSION['nombre']; ?>!</h4>
            <h4 class="text-center">Rol: <?php echo $usu['desc_rol']; ?></h4>

        </div>
            <div class="row">
                <div class="col-md-3 form-group">
                    <label>Primer nombre</label>
                    <input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION['user_id'];?>">
                    <input type="text"  name="usu_nombre" id="fname" class="form-control text-center" value="<?php echo $usu['usu_nombre'];?>"disabled>
                </div>
                <div class="col-md-4 form-group">
                    <label>Segundo nombre</label>
                    <input type="text" id="sname"  name="usu_nombre2" class="form-control text-center" value="<?php echo $usu['usu_nombre2'];?>"disabled>
                </div>
                <div class="col-md-5 form-group">
                    <label>Apellidos</label>
                    <input type="text"  name="usu_apellido" id="ltname" class="form-control text-center" value="<?php echo $usu['usu_apellido'];?>"disabled>
                </div>
            </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                </div>
    </form>
</div>
<?php
}
?>