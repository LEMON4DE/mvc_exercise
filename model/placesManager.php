<?php
include_once 'dbManager.php';

class Place{
    public function savePlace($name, $address, $comment, $latitude, $longitude){
        $db = DB::connectDB();

        $save_place = $db->prepare('INSERT INTO places (name, address, comment, latitude, longitude) VALUES (:name, :address, :comment, :latitude, :longitude)');
        $save_place->bindParam(':name', $name);
        $save_place->bindParam(':address', $address);
        $save_place->bindParam(':comment', $comment);
        $save_place->bindParam(':latitude', $latitude);
        $save_place->bindParam(':longitude', $longitude);
        

        $save_place->execute();
    }

    public function getPlaces(){
        $db = DB::connectDB();

        $get_places = $db->prepare('SELECT * FROM places');
        $get_places->execute();

        return $get_places->fetchAll();
    }

    public function deletePlace($id){
        $db = DB::connectDB();

        $delete_place = $db->prepare('DELETE FROM places WHERE id = ?');
        $delete_place->execute([$id]);
    }

    public function editPlace($name, $address, $comment, $latitude, $longitude, $id){
        $db = DB::connectDB();

        $edit = $db->prepare('UPDATE places SET name = ?, address = ?, comment = ?, latitude = ?, longitude = ? WHERE id = ?');
        $edit->execute([$name, $address, $comment, $latitude, $longitude, $id]);
    }
}