<?php 
require_once('controller.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'affichage') {
        affichage();
    } elseif ($_GET['action'] == 'ajouter'){
        addProduct();
    } 
} else {
    affichage();
}
?>