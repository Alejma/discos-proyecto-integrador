<?php
include_once '../view/partials/modal.php';
?>
    <!-- pageContent -->
    <section class="full-width pageContent">
        <!-- navBar -->
        <div class="full-width navBar">
            <div class="full-width navBar-options">
                <i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>   
                <div class="mdl-tooltip" for="btn-menu">ABRIR/CERRAR MENU</div>
                <nav class="navBar-options-list">
                    <ul class="list-unstyle">
                        
                        <li class="btn-exit" id="btn-exit">
                            <i class="zmdi zmdi-power"></i>
                            <div class="mdl-tooltip" for="btn-exit">Cerrar sesion</div>
                        </li>
                        <li class="text-condensedLight noLink" ><small>Diana isabel</small></li>
                        <li class="noLink">
                            <figure>
                                <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                            </figure>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <section class="full-width" style="margin: 30px 0;">
            <h3 class="text-center tittles">PEDIDOS</h3>


            <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    Bienvenido al area de pedidos en este apartado podras interactucar con toda la informacion de dichos usuarios que solicitan postular todos sus productos
                </p>
            </div>
        </section>


        <div class="full-width divider-menu-h"></div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                <div class="table-responsive">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">Nº</th>
                                <th>Campesino</th>
                                <th>estado</th>
                                <th>producto</th>
                                <th>opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">1</td>
                                <td>Juan Jose</td>
                                <td>aprovado</td>
                                <td>manzanas</td>
                                <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>