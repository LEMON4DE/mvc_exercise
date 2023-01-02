<?php
include_once './model/placesManager.php';

$places = new Place();
$lists = $places->getPlaces();

if(isset($_POST['id']) && $_POST['delete'] == 'delete'){
    $places->deletePlace($_POST['id']);
}