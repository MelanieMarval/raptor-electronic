<?php
/**
 * Created by PhpStorm.
 * User: Joshuan Marval
 * Date: 30/10/2018
 * Time: 21:38
 */

class RouterController
{

    public function includeRequiredModule() {
        if (isset($_GET['action'])) {
            $moduleName = $_GET['action'];
        }
        else {
            $moduleName = 'login';
        }

        $route = (new Router)->getRouteCreated($moduleName);
        include $route;
        return $route;
    }
}