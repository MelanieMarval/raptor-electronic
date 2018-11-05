<?php
/**
 * Created by PhpStorm.
 * User: Joshuan Marval
 * Date: 30/10/2018
 * Time: 21:38
 */

class Router
{

    public function getRouteCreated($moduleName) {
        if ($moduleName == 'products' ||
            $moduleName == 'services' ||
            $moduleName == 'status_of_services' ||
            $moduleName == 'admin' ||
            $moduleName == 'exit') {

            $route = 'views/modules/' . $moduleName . '.php';
        }
        elseif ($moduleName == 'index') {
            $route = 'views/modules/login.php';
        }
        elseif ($moduleName == 'employees_report_PDF') {
            $route = 'views/modules/pdf/employees_report_PDF.php';
        }
        else {
            $route = 'views/modules/login.php';
        }

        return $route;
    }

}