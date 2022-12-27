<?php
include_once './model/placesManager.php';

$get_places = new Place();
$lists = $get_places->getPlaces();