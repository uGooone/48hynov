<?php
session_start();
require_once('../inc/connectbdd.inc.php');
?>

<?php include ("../inc/header.inc.php");


if(isset($_SESSION['id_image'])){
    $bdd = new PDO("mysql:host=127.0.0.1; dbname=image; charset=utf8","root","");
    if(isset($_POST['submit'])){
        $nom_image = htmlspecialchars($_POST['nom_image']);
        $type_image = htmlspecialchars($_POST['type_image']);
        $photo_produit = htmlspecialchars($_POST['photo_produit']);
        $photo_humain = htmlspecialchars($_POST['photo_humain']);
        $photo_institutionelle = htmlspecialchars($_POST['photo_industrielle']);
        $format = htmlspecialchars($_POST['format']);
        $credit_photo = htmlspecialchars($_POST['crédit_photo']);
        $droits = htmlspecialchars($_POST['droits']);
        $copyrights = htmlspecialchars($_POST['copyrights']);
        $date_fin = htmlspecialchars($_POST['date_fin']);
        $tags = htmlspecialchars($_POST['tags']);
    }
}
?>

<head>
    <title>Déposer une image en base de donnée</title>
</head>

<form class="ins3" method="POST">
<div>
    <div class="box3">
        <h2 class="text">Rentrer image</h2>
        <div class="form-group">
            <label for="ExNameInput1">Nom Image</label>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="nom_image" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Type Image</label>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="type_image" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Photo avec Produit</label>
            <select name="Choix">
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="photo_produit" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Photo avec Humain</label>
            <select name="Choix">
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="photo_humain" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Photo Institutionnelle</label>
            <select name="Choix">
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="photo_institutionelle" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Credit Photo</label>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="credit_photo" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Format</label>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="format" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Tags</label>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="tags" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Copyrights</label>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="copyrtights" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Date fin de droit d'utilisation</label>
            <input type="date" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="date_fin" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Droits utilisations limitées</label>
            <select name="Choix">
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="droits" value="">
        </div>
        <div class="form-group">
            <label for="ExNameInput1">Chemin Image</label>
            <input type="name" class="form-control" id="ExNameInput1" aria-describedby="nameHelp" name="type_image" value="">
        </div>

        <input type="submit" class="left btn btn-primary" name=formannonce" value="Ajouter une annonce">
       
    </div>
</div>
</form>
