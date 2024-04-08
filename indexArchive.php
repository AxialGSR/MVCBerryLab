<?php
session_start();
$action = isset($_GET['action']) ? $_GET['action'] : '';
/*if(isset($_GET['action']))
{
    $action = $_GET['action'];
}
else
{
    $action = '';
}*/
// Switch pour effectuer les actions
switch($action)
{
    case 'login':
        require_once('controllers/admin.php');
        $admin = new AdminController();
        $admin->login();
    break;
    case 'logout':
        require_once('controllers/admin.php');
        $admin = new AdminController();
        $admin->logout();
    break;
    case 'dashboard':
        require_once('controllers/admin.php');
        $admin = new AdminController();
        if($admin->login())
        {
            require_once('views/dashboard.php');
        }
    break;
    default:
        require_once('views/login.php');
    break;
}
?>