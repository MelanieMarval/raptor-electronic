<?php

session_start();

if (!$_SESSION['session']) {
    header('location:login');
    exit();
}

include 'views/modules/header.php'

?>


<div class="container div-title">
    <h1 class="title">Estado de Servcios</h1>
</div>

<div class="container">
    <!-----------ADMIN SEARCH------------>
    <div class="container">
        <div class="search-container">
            <button class="add-button" data-toggle="modal" data-target="#addStatusModal">
                Agregar
                <img src="views/images/products/add.svg" class="add-button" alt="">
            </button>
            <div class="d-flex">
                <input class="search-field" placeholder="Buscar">
                <img src="views/images/search-tool.svg" class="search-icon" alt="">
            </div>
        </div>
    </div>

    <?php
    $register = new StatusOfServicesController();
    $register -> createNewStatusOfService();
    ?>

    <!-----------ADMIN STATUS OF SERVICES TABLE------------>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">CI Cliente</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha Inicio</th>
                <th scope="col">Fecha prevista</th>
                <th scope="col">Num. Telefono</th>
                <th scope="col">CI Empleado</th>
                <th scope="col">Entrega</th>
                <th scope="col" class="pr-5"></th>
            </tr>
            </thead>
            <tbody>

            <?php
                $status = new StatusOfServicesController();
                $status ->loadStatusOfServicesTable();
            ?>

            </tbody>
        </table>
    </div>


    <!-----------ADMIN PRODUCTS PAGINATION------------>
    <nav aria-label="..." class="d-flex justify-content-center products-pagination">
        <ul class="pagination pagination-sm">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>
</div>

<!------ADD STATUS OF SERVICES MODAL------->
<div class="modal fade" id="addStatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form method="post" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Agregar Servicio de Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column">
                <input type="file" id="openFile" style="display: none">
                <div>
                    <div class="container d-flex justify-content-around flex-wrap">
                        <input type="text" class="--modal-prod-name-field --w-field" name="order_num" placeholder="Codigo">
                        <input type="text" class="--modal-prod-name-field --w-field" name="client_ci" placeholder="Cedula Cliente" >
                        <input type="text" class="--modal-prod-name-field --w-field" name="name" placeholder="Nombre" >
                        <input type="text" class="--modal-prod-name-field --w-field" name="phone_number" placeholder="Num. Telefono" >
                        <input type="email" class="--modal-prod-name-field --w-field" name="email" placeholder="Correo" >
                        <input type="number" class="--modal-prod-name-field --w-field" name="devices" placeholder="Cant. Dispositivos" >
                        <input type="text" class="--modal-prod-name-field --w-field" name="price" placeholder="Precio" >
                    </div>

                    <div class="d-flex justify-content-between">
                        <input type="date" class="--modal-prod-name-field --w-field" name="begin_at" placeholder="Fecha Inicio" >
                        <input type="date" class="--modal-prod-name-field --w-field" name="finish_at" placeholder="Fecha Prevista" >
                    </div>

                    <div class="d-flex justify-content-around">
                        <select class="form-field --form-field-modal --w-field" name="status" title="Estado">
                            <option value="en proceso">En Proceso</option>
                            <option value="finalizado">Finalizado</option>
                        </select>
                        <select class="form-field --form-field-modal --w-field" name="delivered" title="Entrega">
                            <option value="0">NO</option>
                            <option value="1">SI</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-around">
                        <select class="form-field --form-field-modal --w-field" name="employee_id" title="Empleado">
                            <?php
                                $technicals = new StatusOfServicesController();
                                $technicals -> loadTechnicals();
                            ?>
                        </select>
                    </div>
                </div>
                <textarea class="modal-textarea --modal-textarea-prod" name="description" placeholder="Descripción del Servicio"></textarea>
                <textarea class="modal-textarea --modal-textarea-prod" name="comment" placeholder="Comentarios sobre el Estado de Servicio"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>

<!------EDIT PRODUCT MODAL------->
<div class="modal fade" id="editStatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form method="post" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Agregar Servicio de Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column">
                <input type="file" id="openFile" style="display: none">
                <div>
                    <div class="container d-flex justify-content-around flex-wrap">
                        <input type="text" class="--modal-prod-name-field --w-field" name="order_num" placeholder="Codigo">
                        <input type="text" class="--modal-prod-name-field --w-field" name="client_ci" placeholder="Cedula Cliente" >
                        <input type="text" class="--modal-prod-name-field --w-field" name="name" placeholder="Nombre" >
                        <input type="text" class="--modal-prod-name-field --w-field" name="phone_number" placeholder="Num. Telefono" >
                        <input type="email" class="--modal-prod-name-field --w-field" name="email" placeholder="Correo" >
                        <input type="number" class="--modal-prod-name-field --w-field" name="devices" placeholder="Cant. Dispositivos" >
                        <input type="text" class="--modal-prod-name-field --w-field" name="price" placeholder="Precio" >
                    </div>

                    <div class="d-flex justify-content-between">
                        <input type="date" class="--modal-prod-name-field --w-field" name="begin_at" placeholder="Fecha Inicio" >
                        <input type="date" class="--modal-prod-name-field --w-field" name="finish_at" placeholder="Fecha Prevista" >
                    </div>

                    <div class="d-flex justify-content-around">
                        <select class="form-field --form-field-modal --w-field" name="status" title="Estado">
                            <option value="en proceso">En Proceso</option>
                            <option value="finalizado">Finalizado</option>
                        </select>
                        <select class="form-field --form-field-modal --w-field" name="delivered" title="Entrega">
                            <option value="0">NO</option>
                            <option value="1">SI</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-around">
                        <select class="form-field --form-field-modal --w-field" name="employee_id" title="Empleado">
                            <?php
                            $technicals = new StatusOfServicesController();
                            $technicals -> loadTechnicals();
                            ?>
                        </select>
                    </div>
                </div>
                <textarea class="modal-textarea --modal-textarea-prod" name="description" placeholder="Descripción del Servicio"></textarea>
                <textarea class="modal-textarea --modal-textarea-prod" name="comment" placeholder="Comentarios sobre el Estado de Servicio"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>


<!-- DELETE STATUS MODAL -->
<div class="modal fade" id="deleteStatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Esta seguro que desea eliminar este registro?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<?php
include 'views/modules/footer.php';
?>