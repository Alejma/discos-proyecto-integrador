<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
    <?php
        if(isset($_SESSION['mensaje'])){
    ?>
            <div class="alert alert-success mt-4 alert-dismissible fade show" id="alerta" role="alert">
                <?=$_SESSION['mensaje']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <?php
        unset($_SESSION['mensaje']);
        }
    ?>
    <div class="jumbotron "style="background-color: #B2BABB;">
  <h1 class="display-4 text-center text-light">USUARIOS</h1>
  <p class="lead text-center text-light ">Bienvenido al area de usuarios en este apartado podras interactucar con toda la informacion de dichos usuarios</p>
    </div>
    <table class="mt-4 table table-bordered table-sm table-hover  " id="tabla">
        <thead class="thead "style="background-color: #59ab6e;">
            <tr>
                <th class="text-center w-5">P Nombre</th>
                <th class="text-center w-15">S Nombre</th>
                <th class="text-center">Apellidos</th>
                <th class="text-center">telefono</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Interaccion</th>
            </tr>
        </thead> 
        <tbody>
            <?php
                foreach ($usuarios as $user) {
                echo "<tr>";
                    echo "<td class='text-center'>".$user['usu_nombre']."</td>";
                    echo "<td class='text-center'>".$user['usu_nombre2']."</td>";
                    echo "<td class='text-center'>".$user['usu_apellido']."</td>";
                    echo "<td class='text-center'>".$user['usu_ntelefono']."</td>";
                    echo "<td class='text-center'>".$user['usu_correo']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm' id='modalUpdate' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Usuarios","Usuarios","getUpdateModal",false,"ajax")."' data-usu_id='".$user['usu_id']."'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm' id='modalDelete' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Usuarios","Usuarios","getDeleteModal",false,"ajax")."' data-usu_id='".$user['usu_id']."'>
                    <i class='fa fa-trash'></i>                   
                    </button>
                    </td>";
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>

            <div class="jumbotron "style="background-color: #B2BABB;">
  <hr class="my-5 "style="background-color: #59ab6e;">
  <a class="btn "style="background-color: #59ab6e; btn-lg "href="<?php echo getUrl("Trol", "Trol", "consult") ?>"><span data-feather="users"></span>Rol</a>
   </div>


