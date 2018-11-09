<?php

session_start();

if (!$_SESSION['session']) {
    header('location:login');
    exit();
}

include "header.php";

?>


<div class="container div-title">
    <h1 class="title">Servicios</h1>
</div>

<div class="container">
    <button class="add-button  ml-3 mb-4" data-toggle="modal" data-target="#addServiceModal">
        Agregar
        <img src="views/images/products/add.svg" class="add-button" alt="">
    </button>
</div>

<!-----------ADMIN SERVICE CARDS------------>


<div class=" container card-columns d-flex justify-content-between flex-wrap">
    <div class="card shadow-sm" style="width: 12rem; height: 20em">
        <div class="d-flex justify-content-end">
            <a href="#" data-toggle="modal" data-target="#addServiceModal">
                <img class="mr-1" height="16px" src="views/images/edit.svg">
            </a>
            <a href="#" data-toggle="modal" data-target="#deleteServiceModal">
                <img class="mr-1" height="16px" src="views/images/delete.svg">
            </a>
        </div>
        <div class="svg-service-icon">
            <img class="card-img-top img-fluid "  src="views/images/services/revision.svg" alt="Card image cap">
        </div>
        <div class="card-body card-body-product text-center">
            <h5 class="card-title">Revisión</h5>
            <p class="card-text">BsS 125.000.00</p>
        </div>
    </div>
    <div class="card shadow-sm" style="width: 12rem; height: 20em">
        <div class="d-flex justify-content-end">
            <a href="#" data-toggle="modal" data-target="#addServiceModal">
                <img class="mr-1" height="16px" src="views/images/edit.svg">
            </a>
            <a href="#" data-toggle="modal" data-target="#deleteServiceModal">
                <img class="mr-1" height="16px" src="views/images/delete.svg">
            </a>
        </div>
        <div class="svg-service-icon">
            <img class="card-img-top img-fluid "  src="views/images/services/unlock.svg" alt="Card image cap">
        </div>
        <div class="card-body card-body-product text-center">
            <h5 class="card-title">Desbloqueo</h5>
            <p class="card-text">BsS 125.000.00</p>
        </div>
    </div>
    <div class="card shadow-sm" style="width: 12rem; height: 20em">
        <div class="d-flex justify-content-end">
            <a href="#" data-toggle="modal" data-target="#addServiceModal">
                <img class="mr-1" height="16px" src="views/images/edit.svg">
            </a>
            <a href="#" data-toggle="modal" data-target="#deleteServiceModal">
                <img class="mr-1" height="16px" src="views/images/delete.svg">
            </a>
        </div>
        <div class="svg-service-icon">
            <img class="card-img-top img-fluid" src="views/images/services/root.svg" alt="Card image cap">
        </div>
        <div class="card-body card-body-product text-center">
            <h5 class="card-title">Root</h5>
            <p class="card-text">BsS 125.000.00</p>
        </div>
    </div>
    <div class="card shadow-sm" style="width: 12rem; height: 20em">
        <div class="d-flex justify-content-end">
            <a href="#" data-toggle="modal" data-target="#addServiceModal">
                <img class="mr-1" height="16px" src="views/images/edit.svg">
            </a>
            <a href="#" data-toggle="modal" data-target="#deleteServiceModal">
                <img class="mr-1" height="16px" src="views/images/delete.svg">
            </a>
        </div>
        <div class="svg-service-icon">
            <img class="card-img-top img-fluid "  src="views/images/services/revision.svg" alt="Card image cap">
        </div>
        <div class="card-body card-body-product text-center">
            <h5 class="card-title">Revisión</h5>
            <p class="card-text">BsS 125.000.00</p>
        </div>
    </div>
    <div class="card shadow-sm" style="width: 12rem; height: 20em">
        <div class="d-flex justify-content-end">
            <a href="#" data-toggle="modal" data-target="#addServiceModal">
                <img class="mr-1" height="16px" src="views/images/edit.svg">
            </a>
            <a href="#" data-toggle="modal" data-target="#deleteServiceModal">
                <img class="mr-1" height="16px" src="views/images/delete.svg">
            </a>
        </div>
        <div class="svg-service-icon">
            <img class="card-img-top img-fluid "  src="views/images/services/unlock.svg" alt="Card image cap">
        </div>
        <div class="card-body card-body-product text-center">
            <h5 class="card-title">Desbloqueo</h5>
            <p class="card-text">BsS 125.000.00</p>
        </div>
    </div>
    <div class="card shadow-sm" style="width: 12rem; height: 20em">
        <div class="d-flex justify-content-end">
            <a href="#" data-toggle="modal" data-target="#addServiceModal">
                <img class="mr-1" height="16px" src="views/images/edit.svg">
            </a>
            <a href="#" data-toggle="modal" data-target="#deleteServiceModal">
                <img class="mr-1" height="16px" src="views/images/delete.svg">
            </a>
        </div>
        <div class="svg-service-icon">
            <img class="card-img-top img-fluid" src="views/images/services/root.svg" alt="Card image cap">
        </div>
        <div class="card-body card-body-product text-center">
            <h5 class="card-title">Root</h5>
            <p class="card-text">BsS 125.000.00</p>
        </div>
    </div>
    <div class="card shadow-sm" style="width: 12rem; height: 20em">
        <div class="d-flex justify-content-end">
            <a href="#" data-toggle="modal" data-target="#addServiceModal">
                <img class="mr-1" height="16px" src="views/images/edit.svg">
            </a>
            <a href="#" data-toggle="modal" data-target="#deleteServiceModal">
                <img class="mr-1" height="16px" src="views/images/delete.svg">
            </a>
        </div>
        <div class="svg-service-icon">
            <img class="card-img-top img-fluid "  src="views/images/services/revision.svg" alt="Card image cap">
        </div>
        <div class="card-body card-body-product text-center">
            <h5 class="card-title">Revisión</h5>
            <p class="card-text">BsS 125.000.00</p>
        </div>
    </div>
    <div class="card shadow-sm" style="width: 12rem; height: 20em">
        <div class="d-flex justify-content-end">
            <a href="#" data-toggle="modal" data-target="#addServiceModal">
                <img class="mr-1" height="16px" src="views/images/edit.svg">
            </a>
            <a href="#" data-toggle="modal" data-target="#deleteServiceModal">
                <img class="mr-1" height="16px" src="views/images/delete.svg">
            </a>
        </div>
        <div class="svg-service-icon">
            <img class="card-img-top img-fluid "  src="views/images/services/unlock.svg" alt="Card image cap">
        </div>
        <div class="card-body card-body-product text-center">
            <h5 class="card-title">Desbloqueo</h5>
            <p class="card-text">BsS 125.000.00</p>
        </div>
    </div>
    <div class="card shadow-sm" style="width: 12rem; height: 20em">
        <div class="d-flex justify-content-end">
            <a href="#" data-toggle="modal" data-target="#addServiceModal">
                <img class="mr-1" height="16px" src="views/images/edit.svg">
            </a>
            <a href="#" data-toggle="modal" data-target="#deleteServiceModal">
                <img class="mr-1" height="16px" src="views/images/delete.svg">
            </a>
        </div>
        <div class="svg-service-icon">
            <img class="card-img-top img-fluid" src="views/images/services/root.svg" alt="Card image cap">
        </div>
        <div class="card-body card-body-product text-center">
            <h5 class="card-title">Root</h5>
            <p class="card-text">BsS 125.000.00</p>
        </div>
    </div>

</div>



<!------ADD SERVICE MODAL------->
<div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Agregar servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column">
                <input type="file" id="openFile" style="display: none">
                <a href="#" class="m-auto" style="width: 390px"  onclick="uploadFile();return">
                    <img class="card-img-top" style="background-color: #8698B7" height="200" src="../images/bg-for-photo.svg" alt="Card image cap">
                </a>
                <div class="m-5 d-flex flex-column">
                    <input type="text" class="form-field --form-field-modal" placeholder="Nombre del servicio" >
                    <input type="text" class="form-field --form-field-modal" placeholder="Precio">
                    <textarea class="modal-textarea" placeholder="Descripción del Servicio"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Esta seguro que desea eliminar este servicio?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>