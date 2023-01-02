<?php
include_once './model/placesManager.php';

$save_place = new Place();

if($_POST){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $save_place->savePlace($name, $address, $comment, $latitude, $longitude);
}