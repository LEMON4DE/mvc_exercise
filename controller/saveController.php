<?php
include_once './model/placesManager.php';

$save_place = new Place();

if($_POST){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
    $save_place->savePlace($name, $address, $comment);
}