<?php

session_start();

if (!$_SESSION['session']) {
    header('location:login');
    exit();
}
include 'views/modules/header.php';

?>

<div class="container div-title">
    <h1 class="title">Productos</h1>
</div>
<div class="products-container">

    <!-------ADMIN NAV PRODUCTS--------->
    <div class="container m-auto">
        <div class="m-auto products-nav-c">
            <a class="nav-item nav-link products-nav-link " href="">Accesorios</a>
            <a class="nav-item nav-link products-nav-link active active-link" href="">Dispositivos</a>
            <a class="nav-item nav-link products-nav-link " href="">Refacciones</a>
        </div>
    </div>
    <!-----------ADMIN SEARCH------------>
    <div class="container">
        <div class="search-container">
            <button class="add-button" data-toggle="modal" data-target="#addProductModal">
                Agregar
                <img src="views/images/products/add.svg" class="add-button" alt="">
            </button>
            <div class="d-flex">
                <input class="search-field" placeholder="Buscar">
                <img src="views/images/search-tool.svg" class="search-icon" alt="">
            </div>
        </div>
    </div>

    <!--------ADMIN PRODUCT CARDS-------->
    <div class="container card-columns d-flex justify-content-between flex-wrap">
        <div class="card shadow-sm" style="width: 18rem; height: 26em">
            <div class="d-flex justify-content-end">
                <a href="" data-toggle="modal" data-target="#editProductModal">
                    <img class="mr-1" height="16px" src="views/images/edit.svg">
                </a>
                <a href="" data-toggle="modal" data-target="#deleteProductModal">
                    <img class="mr-1" height="16px" src="views/images/delete.svg">
                </a>
            </div>
            <img class="card-img-top img-fluid" height="285" src="views/images/products/xiaomi-redmi.jpg" alt="Card image cap">
            <div class="card-body card-body-product">
                <h5 class="card-title">Xiaomi Redmi</h5>
                <p class="card-text">BsS 125.000.00</p>
            </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; height: 26em">
            <div class="d-flex justify-content-end">
                <a href="" data-toggle="modal" data-target="#editProductModal">
                    <img class="mr-1" height="16px" src="views/images/edit.svg">
                </a>
                <a href="" data-toggle="modal" data-target="#deleteProductModal">
                    <img class="mr-1" height="16px" src="views/images/delete.svg">
                </a>
            </div>
            <img class="card-img-top img-fluid" height="285" src="views/images/products/huawei-yt-lite.jpg" alt="Card image cap">
            <div class="card-body  card-body-product">
                <h5 class="card-title">Huawei YT Lite</h5>
                <p class="card-text">BsS 125.000.00</p>
            </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; height: 26em">
            <div class="d-flex justify-content-end">
                <a href="" data-toggle="modal" data-target="#editProductModal">
                    <img class="mr-1" height="16px" src="views/images/edit.svg">
                </a>
                <a href="" data-toggle="modal" data-target="#deleteProductModal">
                    <img class="mr-1" height="16px" src="views/images/delete.svg">
                </a>
            </div>
            <img class="card-img-top img-fluid" height="285" src="views/images/products/xr5.jpg" alt="Card image cap">
            <div class="card-body card-body-product">
                <h5 class="card-title">Xiaomi XR5</h5>
                <p class="card-text">BsS 125.000.00</p>
            </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; height: 26em">
            <div class="d-flex justify-content-end">
                <a href="" data-toggle="modal" data-target="#editProductModal">
                    <img class="mr-1" height="16px" src="views/images/edit.svg">
                </a>
                <a href="" data-toggle="modal" data-target="#deleteProductModal">
                    <img class="mr-1" height="16px" src="views/images/delete.svg">
                </a>
            </div>
            <img class="card-img-top img-fluid" height="285" src="views/images/products/alcatel-a30.jpg" alt="Card image cap">
            <div class="card-body card-body-product">
                <h5 class="card-title">Telefono</h5>
                <p class="card-text">BsS 125.000.00</p>
            </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; height: 26em">
            <div class="d-flex justify-content-end">
                <a href="" data-toggle="modal" data-target="#editProductModal">
                    <img class="mr-1" height="16px" src="views/images/edit.svg">
                </a>
                <a href="" data-toggle="modal" data-target="#deleteProductModal">
                    <img class="mr-1" height="16px" src="views/images/delete.svg">
                </a>
            </div>
            <img class="card-img-top img-fluid" height="285" src="views/images/products/leeco-le-s3.jpg" alt="Card image cap">
            <div class="card-body card-body-product">
                <h5 class="card-title">Leeco Le S3</h5>
                <p class="card-text">BsS 125.000.00</p>
            </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; height: 26em">
            <div class="d-flex justify-content-end">
                <a href="" data-toggle="modal" data-target="#editProductModal">
                    <img class="mr-1" height="16px" src="views/images/edit.svg">
                </a>
                <a href="" data-toggle="modal" data-target="#deleteProductModal">
                    <img class="mr-1" height="16px" src="views/images/delete.svg">
                </a>
            </div>
            <img class="card-img-top img-fluid" height="285" src="views/images/products/huawei-mate-9.jpg" alt="Card image cap">
            <div class="card-body card-body-product">
                <h5 class="card-title">Huawei Mate 9</h5>
                <p class="card-text">BsS 125.000.00</p>
            </div>
        </div>
    </div>
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



<!------ADD PRODUCT MODAL------->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form method="post" enctype="multipart/form-data" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Agregar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column">
                <input type="file" id="openFile" onchange="fileIsReady();" style="display: none">
                <a href="#" class="m-auto" style="width: 390px"  onclick="uploadFile();return">
                    <img class="card-img-top" style="background-color: #8698B7" height="200" src="views/images/bg-for-photo.svg" alt="Card image cap">
                </a>
                <p class="text-center text-black-50 small mt-1">Tamaño recomendado 800px * 400px, peso máximo 2MB</p>
                <div>
                    <input type="text" class="--modal-prod-name-field" placeholder="Nombre del producto" >
                    <div class="d-flex justify-content-around">
                        <input type="text" class="form-field --form-field-modal" placeholder="Precio">
                        <select class="form-field --form-field-modal" title="">
                            <option value="volvo">Accesorios</option>
                            <option value="saab">Dispositivos</option>
                            <option value="mercedes">Refaccion</option>
                        </select>
                    </div>
                </div>
                <textarea class="modal-textarea --modal-textarea-prod" placeholder="Descripción del producto"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>

<!------EDIT PRODUCT MODAL------->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Editar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column">
                <input type="file" id="openFile" style="display: none">
                <a href="#" class="m-auto" style="width: 390px"  onclick="uploadFile();return">
                    <img class="card-img-top" style="background-color: #8698B7" height="200" src="views/images/bg-for-photo.svg" alt="Card image cap">
                </a>
                <div>
                    <input type="text" class="--modal-prod-name-field" placeholder="Nombre del producto" >
                    <div class="d-flex justify-content-around">
                        <input type="text" class="form-field --form-field-modal" placeholder="Precio">
                        <select class="form-field --form-field-modal" title="">
                            <option value="volvo">Accesorios</option>
                            <option value="saab">Dispositivos</option>
                            <option value="mercedes">Refaccion</option>
                        </select>
                    </div>
                </div>
                <textarea class="modal-textarea --modal-textarea-prod" placeholder="Descripción del producto"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>


<!-- DELETE MODAL -->
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

<?php
include 'views/modules/footer.php';
?>

<script src="views/js/products.js"></script>