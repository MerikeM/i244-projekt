<?php
require_once('functions.php');
session_start();
connect_db();

$page="home";
if (isset($_GET['page']) && $_GET['page']!=""){
    $page=htmlspecialchars($_GET['page']);
}
include_once('views/head.html');

switch($page){
    case('reg'):
        register();
        break;
    case('login'):
        login();
        break;
    case('logout'):
        logout();
        break;
              
    default:
        include_once('views/home.html');
    break;
}

include_once('views/foot.html');
?>