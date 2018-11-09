<?php

session_start();

if (!$_SESSION['session']) {
    header('location:login');
    exit();
}

include 'views/modules/header.php'

?>

    <div class="container div-title">
        <h1 class="title">Administradores</h1>
    </div>

    <div class="container">
        <!-----------ADMIN SEARCH------------>
        <div class="container">
            <div class="search-container">
                <button class="add-button" data-toggle="modal" data-target="#addAdminModal">
                    Agregar
                    <img src="views/images/products/add.svg" class="add-button" alt="">
                </button>

                    <a href="employees_report_PDF" target="_blank" >Print Report</a>

                <div class="d-flex">
                    <input class="search-field" placeholder="Buscar">
                    <img src="views/images/search-tool.svg" class="search-icon" alt="">
                </div>
            </div>
        </div>

        <?php
            $register = new AdminController();
            $register -> createNewEmployee();
         ?>

        <!-----------ADMIN ADMINS TABLE------------>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col" class="pr-5"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $employees = new AdminController();
                        $employees -> loadEmployeesTable();
                       ?>
                </tbody>
            </table>
        </div>

    </div>


    <!------ADD ADMIN MODAL------->
    <div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Agregar Administrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex flex-column">
                    <input type="file" id="openFile" style="display: none">
                    <div>
                        <div class="container d-flex justify-content-around flex-wrap">
                            <input type="text" class="--modal-prod-name-field --w-field"  name="ci" placeholder="Cedula" >
                            <input type="text" class="--modal-prod-name-field --w-field" name="name" placeholder="Nombre" >
                            <select class="form-field --form-field-modal --w-field" name="position" title="Cargo">
                                <option value="Gerente">Gerente</option>
                                <option value="Encargado">Encargado</option>
                                <option value="Tecnico">Tecnico</option>
                            </select>
                            <input type="date" class="--modal-prod-name-field --w-field" name="birthday" placeholder="Fecha Nacimiento" >
                            <input type="text" class="--modal-prod-name-field --w-field" name="phone_number" placeholder="Num. Telefono" >
                            <input type="email" class="--modal-prod-name-field --w-field" name="email" placeholder="Correo" >
                        </div>
                        <div class="flex-column justify-content-center m-5 p-2 border border-secondary">
                            <input type="text" class="form-field --form-field-modal" name="username" placeholder="Nombre Usuario">
                            <input type="password" class="form-field --form-field-modal" name="password" placeholder="Contraseña">
                            <input type="password" class="form-field --form-field-modal" name="confirm_password" placeholder="Confirmar Contraseña">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>


    <!------ EDIT ADMIN MODAL------->
    <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Editar Administrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex flex-column">
                    <input type="file" id="openFile" style="display: none">
                    <div>
                        <div class="container d-flex justify-content-around flex-wrap">
                            <input type="text" class="--modal-prod-name-field --w-field" placeholder="Cedula" >
                            <input type="text" class="--modal-prod-name-field --w-field" placeholder="Nombre" >
                            <input type="text" class="--modal-prod-name-field --w-field" placeholder="Cargo" >
                            <input type="date" class="--modal-prod-name-field --w-field" placeholder="Fecha Nacimiento" >
                            <input type="text" class="--modal-prod-name-field --w-field" placeholder="Num. Telefono" >
                            <input type="email" class="--modal-prod-name-field --w-field" placeholder="Correo" >
                        </div>
                        <div class="flex-column justify-content-center m-5 p-2 border border-secondary">
                            <input type="text" class="form-field --form-field-modal" placeholder="Nombre Usuario">
                            <input type="password" class="form-field --form-field-modal" placeholder="Contraseña">
                            <input type="password" class="form-field --form-field-modal" placeholder="Confirmar Contraseña">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>


    <!-- DELETE ADMIN MODAL -->
    <div class="modal fade" id="deleteProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Eliminar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Esta seguro que desea eliminar este producto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

