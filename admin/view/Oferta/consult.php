<?php
include_once '../view/partials/modal.php';
?>
<div class="container">
    <?php
    if (isset($_SESSION['mensaje'])) {
    ?>

        <div class="alert alert-success mt-4 alert-dismissible fade show" id="alerta" role="alert">
            <?= $_SESSION['mensaje'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
        unset($_SESSION['mensaje']);
    }
    ?>
    <div class="jumbotron "style="background-color: #B2BABB;">
  <h1 class="display-4 text-center text-light">OFERTAS</h1>
  <p class="lead text-center text-light ">Bienvenido al area de ofertas en este apartado podras interactucar con toda la informacion de dichas ofertas que se ofertaron y se encuentran a la vista de los campesinos</p>
    </div>
    <table class="mt-4 table table-bordered table-sm table-hover "id="tabla">

    <thead class="thead "style="background-color: #59ab6e;">
            <tr>
                <th class="text-center w-5">Id</th>
                <th class="text-center w-15">Usuario</th>
                <th class="text-center">Nombre oferta</th>
                <th class="text-center">Cantidad del producto</th>
                <th class="text-center">Fecha inicial</th>
                <th class="text-center">Fecha final</th>
                <th class="text-center">Imagen</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Interaccion</th>

            </tr>
        </thead>
        <tbody>
        <button class="btn btn-dark" id="insertOferta" data-toggle="modal" data-target='#exampleModal' data-url=" <?php echo getUrl("Oferta","Oferta","getInsert",false,"ajax"); ?>">Insertar</button>
            <br><br>
            <?php
            foreach ($oferta as $ofer) {

                echo "<tr>";

                echo "<td class='text-center'>" . $ofer['id_oferta'] . "</td>";
                echo "<td class='text-center'>" . $ofer['usu_nombre'] . "</td>";
                echo "<td class='text-center'>" . $ofer['nom_oferta'] . "</td>";
                echo "<td class='text-center'>" . $ofer['cupos_oferta'] . "</td>";
                echo "<td class='text-center'>" . $ofer['fech_ini_oferta'] . "</td>";
                echo "<td class='text-center'>" . $ofer['fech_fin_oferta'] . "</td>";
                echo "<td><img src='" . $ofer['imag_oferta'] . "' width='100px'></td>";
                echo "<td class='text-center'>" . $ofer['desc_estado'] . "</td>";
                echo "<td class='text-center'>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm' id='MoreOfer' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Oferta","Oferta","More",false,"ajax")."' data-moreOfer='".$ofer['id_oferta']."'>
                    <i class='fa fa-eye'></i>                   
                    </button>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm' id='editOferta' data-toggle='modal' data-target='#exampleModal' data-url='" . getUrl("Oferta", "Oferta", "getUpdate", false, "ajax") . "' data-oferE='" . $ofer['id_oferta'] . "'>
                    <i class='fa fa-edit'></i>                   
                    </button>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm' id='DeleteOferta' data-toggle='modal' data-target='#exampleModal' data-url='" . getUrl("Oferta", "Oferta", "getDelete", false, "ajax") . "' data-oferD='" . $ofer['id_oferta'] . "'>
                    <i class='fa fa-ban'></i>                   
                    </button>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm'  id='modalViewOfer' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Oferta","Oferta","getView",false,"ajax")."' data-oferV='".$ofer['id_oferta']."'>
                    <i class='fa fa-check'></i>                   
                    </button>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>