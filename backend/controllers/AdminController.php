<?php

class AdminController
{
    public function createNewEmployee() {

        if (!empty($_POST['ci']) && !empty($_POST['name'])) {

            $adminData = array('ci' => $_POST['ci'],
                               'name' => $_POST['name'],
                               'position' => $_POST['position'],
                               'birthday' => $_POST['birthday'],
                               'phone_number' => $_POST['phone_number'],
                               'email' => $_POST['email'],
                               'username' => $_POST['username'],
                               'password' => $_POST['password'],
                               'confirm_password' => $_POST['confirm_password']);

            $existAdmin = (new Admin)->existAdmin($adminData, 'employees');

            if (!$existAdmin) {
                $answer = (new Admin)->registerEmployeeDB($adminData, 'employees');

                if ($answer == 'success') {
                    header('location:admin');
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">
                        Ya existe un registro con esa cedula!
                    </div>';
            }
        }
    }

    public function loadEmployeesTable() {

        $allEmployees = (new Admin)->getAllEmployeesDB("employees");

        foreach ($allEmployees as $row => $item) {
            echo ' <tr>
                    <th scope="row">'.$item['ci'].'</th>
                    <td>'.$item['name'].'</td>
                    <td>'.$item['position'].'</td>
                    <td>'.$item['phone_number'].'</td>
                    <td>'.$item['email'].'</td>
                    <td>'.$item['birthday'].'</td>
                    <td>
                        <div class="d-flex justify-content-end">
                            <a href="" data-toggle="modal" data-target="#editAdminModal">
                                <img class="mr-1" height="16px" src="views/images/edit.svg">
                            </a>
                            <a href="index.php?action=admin&ci='.$item['ci'].'&name='.$item['name'].'&modal=true">
                                <img class="mr-1" height="16px" src="views/images/delete.svg">
                            </a>
                        </div>
                    </td>
                 </tr>';
        }
    }

    public function deleteEmployee($employeeCi) {

        $employeeDeleted = (new Admin) ->deleteEmployeeDB($employeeCi);

            if ($employeeDeleted == 'deleted') {
                echo '<div class="alert alert-success" role="alert">
                    Registro eliminado con exito!
                </div>';
                header('location:admin');
            } else {
                echo '<div class="alert alert-danger" role="alert">
                    Registro no pudo ser eliminado!
                </div>';
                header('location:admin');
            }

    }

    public function printReport() {
        $allEmployees = (new Admin)->getAllEmployeesDB("employees");
        return $allEmployees;
    }

}