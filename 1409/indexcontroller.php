<?php 

require ('model.php');

function listPosts(){
    $posts = getPosts();
    require('affichage.php');
}

function post(){
    $post = getPosts($_GET['id']);
    $comments = getComments($_GET['id']);

    require('affichage.php')
}

require ('controller.php')
?>