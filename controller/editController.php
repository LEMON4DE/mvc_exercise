<?php
include_once './model/placesManager.php';

$place = new Place();
$lists = $place->getPlaces();
$id = $_GET['id'];

if(isset($_POST['save_edit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $place->editPlace($name, $address, $comment, $latitude, $longitude, $id);

    header("Refresh:0; url=index.php?action=list");

}else{
    foreach($lists as $list){
        if($id == $list['id']){ // $_GET['id'] is the id in url. (e.g. ?action=edit&id=1)
            $name = $list['name'];
            $address = $list['address'];
            $comment = $list['comment'];
            $latitude = $list['latitude'];
            $longitude = $list['longitude'];
        }
    }
}