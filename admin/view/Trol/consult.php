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
  <h1 class="display-4 text-center text-light">ROL</h1>
  <p class="lead text-center text-light ">Bienvenido al area de roles en este apartado podras interactucar con todos los roles del sistema</p>
    </div>
    <table class="mt-4 table table-bordered table-sm table-hover " id="tabla">
       
    <thead class="thead "style="background-color:#59ab6e;">
            <tr>
                <th class="text-center w-5">Código</th>
                <th class="text-center w-15">Descripción</th>
                <th class="text-center">Interaccion</th>
            </tr>
        </thead>
        <tbody>
        <button class="btn btn-dark " id="InsertRol" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Trol","Trol","getInsert",false,"ajax"); ?>">Insertar</button>
           <br><br>
           <?php
            foreach ($rol as $rol) {
                echo "<tr>";
                    echo "<td class='text-center'>".$rol['cod_rol']."</td>";
                    echo "<td class='text-center'>".$rol['desc_rol']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm' id='EditRol' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Trol","Trol","getUpdate",false,"ajax")."' data-rol='".$rol['cod_rol']."'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm' id='DeleteRol' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Trol","Trol","getDelete",false,"ajax")."' data-rolD='".$rol['cod_rol']."'>
                    <i class='fa fa-trash'></i>                   
                    </button>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>



