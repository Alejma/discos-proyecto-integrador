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
  <h1 class="display-4 text-center text-light">TIPO PQRSF</h1>
  <p class="lead text-center text-light ">Bienvenido al area de tipo pqrsf en este apartado podras interactucar con todos los tipos de pqrsf disponibles  de la escuela gastronomica</p>
    </div>
<table class="mt-4 table table-bordered table-sm table-hover" id="tabla">

<thead class="thead "style="background-color: #59ab6e;">
        <tr>
            <th class="text-center w-5">Id</th>
            <th class="text-center w-15">Descripción</th>
            <th class="text-center">Acciones</th>
    
        </tr>
    </thead>
    <tbody>
    <button class="btn btn-dark " id="InsertTpqrs" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Tpqrs","Tpqrs","getInsert",false,"ajax"); ?>">Insertar</button>
    <br><br>
        <?php
        foreach ($Tipo_pqrs as $Tpq) {
            

            echo "<tr>";

                    echo "<td class='text-center'>".$Tpq['cod_pqrsf_tipo']."</td>";
                    echo "<td class='text-center'>".$Tpq['desc_pqrsf_tipo']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn 'style='background-color: #59ab6e;' id='EditTpqrs' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Tpqrs","Tpqrs","getUpdate",false,"ajax")."' data-TpqrsE='".$Tpq['cod_pqrsf_tipo']."'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn 'style='background-color: #59ab6e;' id='DeleteTpqrs' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Tpqrs","Tpqrs","getDelete",false,"ajax")."' data-TpqrsD='".$Tpq['cod_pqrsf_tipo']."'>
                    <i class='fa fa-trash'></i>                   
                    </button>
                    </td>";
                echo "</tr>";
        }

        ?>
    </tbody>
</table>

