<?php

//MODULES
include_once 'models/Router.php';
include_once 'models/Login.php';
include_once 'models/Admin.php';
include_once 'models/StatusOfServices.php';
//CONTROLLERS
include_once 'controllers/TemplateController.php';
include_once 'controllers/RouterController.php';
include_once 'controllers/LoginController.php';
include_once 'controllers/AdminController.php';
include_once 'controllers/StatusOfServicesController.php';

$template = new TemplateController();
$template -> includeTemplate();

