<?php
/**
 * Created by PhpStorm.
 * User: Joshuan Marval
 * Date: 4/11/2018
 * Time: 14:09
 */

class StatusOfServicesController
{

    public function createNewStatusOfService() {

        if (isset($_POST['order_num']) && isset($_POST['client_ci'])) { //tambien employee_id

            $statusData = array('order_num' => $_POST['order_num'],
            'client_ci' => $_POST['client_ci'],
            'name' => $_POST['name'],
            'phone_number' => $_POST['phone_number'],
            'email' => $_POST['email'],
            'description' => $_POST['description'],
            'devices' => $_POST['devices'],
            'status' => $_POST['status'],
            'begin_at' => $_POST['begin_at'],
            'finish_at' => $_POST['finish_at'],
            'price' => $_POST['price'],
            'employee_id' => $_POST['employee_id'],
            'comment' => $_POST['comment'],
            'delivered' => $_POST['delivered']);

            $existStatus = (new StatusOfServices) ->existStatus($statusData, 'status_of_services');

            if (!$existStatus) {
                $answer = (new StatusOfServices)->registerStatusOfServiceDB($statusData, 'status_of_services');

                if ($answer == 'success') {
                    header('location:status_of_services');
                }
            } else {
                echo '<script>console.log("In")</script>';
//                header('location:status_of_services');
                echo '<div class="alert alert-danger" role="alert">
                        Ya existe un registro con ese codigo!
                    </div>';

            }

        }
    }

    public function loadStatusOfServicesTable() {
        //echo '<script>console.log("In")</script>';

        $allStatusOfServices = (new StatusOfServices)->getAllStatusOfServices('status_of_services');


        if (isset($allStatusOfServices)) {
            foreach ($allStatusOfServices as $row => $item) {

                $delivered = 'SI';
                if ($item['delivered']=='0') {
                    $delivered = 'NO';
                }

                echo '<tr>
                    <th scope="row">'.$item['order_num'].'</th>
                    <td>'.$item['client_ci'].'</td>
                    <td>'.$item['name'].'</td>
                    <td>'.$item['begin_at'].'</td>
                    <td>'.$item['finish_at'].'</td>
                    <td>'.$item['phone_number'].'</td>
                    <td>'.$item['employee_id'].'</td>
                    <td>'.$delivered.'</td>
                    <td>
                        <div class="d-flex justify-content-end">
                            <a href="" data-toggle="modal" data-target="#editStatusModal">
                                <img class="mr-1" height="16px" src="views/images/edit.svg">
                            </a>
                            <a href="" data-toggle="modal" data-target="#deleteStatusModal">
                                <img class="mr-1" height="16px" src="views/images/delete.svg">
                            </a>
                        </div>
                    </td>
                </tr>';
            }
        }

    }

    public function oadTechnicals(){

        $technical = (new StatusOfServices)->getTechnicalEmployee('Tecnico', 'employees');

        foreach ($technical as $row => $item){
            echo '<option name="employee_id" value="'.$item['id'].'">'.$item['name'].'</option>';
        }

    }


}