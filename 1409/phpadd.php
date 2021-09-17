<?php
// On démarre une session
session_start();

if($_POST){
    if(isset($_POST['produit']) && !empty($_POST['produit'])
    && isset($_POST['prix']) && !empty($_POST['prix'])
    && isset($_POST['nombre']) && !empty($_POST['nombre'])){
        // On inclut la connexion à la base
        require_once('connect.php');

        // On nettoie les données envoyées
        $produit = strip_tags($_POST['produit']);
        $prix = strip_tags($_POST['prix']);
        $nombre = strip_tags($_POST['nombre']);

        $sql = 'INSERT INTO `liste` (`produit`, `prix`, `nombre`) VALUES (:produit, :prix, :nombre);';

        $query = $db->prepare($sql);

        $query->bindValue(':produit', $produit, PDO::PARAM_STR);
        $query->bindValue(':prix', $prix, PDO::PARAM_STR);
        $query->bindValue(':nombre', $nombre, PDO::PARAM_INT);

        $query->execute();

        $_SESSION['message'] = "Produit ajouté";
        require_once('close.php');

        header('Location: index.php');
    }else{
        $_SESSION['erreur'] = "Le formulaire est incomplet";
    }
}

?>