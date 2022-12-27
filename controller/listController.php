<?php
include_once './model/placesManager.php';

$places = new Place();
$lists = $places->getPlaces();