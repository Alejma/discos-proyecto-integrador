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
  <h1 class="display-4 text-center text-light">PQRSF</h1>
  <p class="lead text-center text-light ">Bienvenido al area de pqrsf en este apartado podras interactucar con toda la informacion de dichos pqrsf sobre la escuela gastronomica</p>
    </div>
<table class="mt-4 table table-bordered table-sm table-hover  " id="tabla">

<thead class="thead "style="background-color: #59ab6e;">
            <tr>
                <th class="text-center w-5">Id</th>
                <th class="text-center w-15">Tipo pqrs</th>
                <th class="text-center">Id usuario</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Correo</th>
				<th class="text-center">Estado</th>
                <th class="text-center">Interacciones</th>

            </tr>
        </thead>
        <tbody>
        
            <?php
            foreach ($pqrsf as $pq) {
                echo "<tr>";

                    echo "<td class='text-center'>".$pq['cod_pqrsf']."</td>";
                    echo "<td class='text-center'>".$pq['desc_pqrsf_tipo']."</td>";
                    if (isset($pq['usu_id'])){
                        echo "<td class='text-center'>" . $pq['usu_id'] . "</td>";
                     }else{
                         echo "<td class='text-center'>Sin registrar</td>";
                     }
                     echo "<td class='text-center'>".$pq['nombre']."</td>";
                     echo "<td class='text-center'>".$pq['correo']."</td>";
                    echo "<td class='text-center'>".$pq['desc_estado']."</td>";
                    echo "<td class='text-center'>
                    <button class='btn 'style='background-color: #59ab6e;' btn-sm' id='Detalles' data-toggle='modal' data-target='#exampleModal' data-url='".getUrl("Pqrs","Pqrs","getMore",false,"ajax")."' data-Pqm='".$pq['cod_pqrsf']."'>
                    <i class='fa fa-eye'></i>                   
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
  <a class="btn "style="background-color: #59ab6e; btn-lg "href="<?php echo getUrl("Tpqrs", "Tpqrs", "consult") ?>"><span data-feather="list"></span>Tipo pqrsf</a>
 </div>
