<?php
include_once 'dbManager.php';

class Place{
    public function savePlace($name, $address, $comment){
        $db = DB::connectDB();

        $save_place = $db->prepare('INSERT INTO places (name, address, comment) VALUES (:name, :address, :comment)');
        $save_place->bindParam(':name', $name);
        $save_place->bindParam(':address', $address);
        $save_place->bindParam(':comment', $comment);

        $save_place->execute();
    }

    public function getPlaces(){
        $db = DB::connectDB();

        $get_places = $db->prepare('SELECT * FROM places');
        $get_places->execute();

        return $get_places->fetchAll();
    }

    // public function deletePlaces(){}
}