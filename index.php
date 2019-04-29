<?php
session_start();

$page = 'home';

if (isset($_GET['page'])){
    $page = $_GET['page'];
}

include 'header.php';

switch($page){
    case 'label' : include 'label.php';
        break;
    
    default: include 'home.php';
        break;
}

include 'footer.php';
?>