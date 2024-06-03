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
  <h1 class="display-4 text-center text-light">ESTADO</h1>
  <p class="lead text-center text-light ">Bienvenido al area de estado en este apartado podras interactucar con todos los estados disponibles tanto para las ofertas como para las noticias de la escuela gastronomica</p>
    </div>
<table class="mt-4 table table-bordered table-sm table-hover" id="tabla">

<thead class="thead "style="background-color: #59ab6e;">
        <tr>
            <th class="text-center w-5">Id</th>
            <th class="text-center w-15">Descripción</th>
            <th class="text-center">Interacciones</th>

        </tr>
    </thead>
    <tbody>
    <button class="btn btn-dark" id="InsertEstado" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Estado","Estado","getInsertModal",false,"ajax"); ?>">Insertar</button>
        <br><br>
        <?php
        foreach ($estados as $estd) {
  
            echo "<tr>";

                    echo "<td class='text-center'>".$estd['id_estado']."</td>";
                    echo "<td class='text-center'>".$estd['desc_estado']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm' id='EditEstado' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Estado","Estado","getUpdateModal",false,"ajax")."' data-esta='".$estd['id_estado']."'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm' id='DeleteEstado' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Estado","Estado","getDeleteModal",false,"ajax")."' data-estaD='".$estd['id_estado']."'>
                    <i class='fa fa-trash'></i>                   
                    </button>
                    </td>";
                echo "</tr>";
        }

        ?>
    </tbody>
</table>