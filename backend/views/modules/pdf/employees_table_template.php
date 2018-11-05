<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Report</title>
    </head>
    <body>
        <h1>HOLA</h1>
        <div class="table-responsive">
            <table  class="table table-hover table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Cedula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $register = new AdminController();
                    $register -> printReport();
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>