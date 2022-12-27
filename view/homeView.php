<!DOCTYPE html>
<?php
    $title = "Home";
    ob_start();
?>
    <div>
        <h1>Save places you want to visit!</h1>
    </div>
    <ul>
        <li><a href="./saveView.php">Save Places</a></li>
        <li><a href="./listView.php">List of Places</a></li>
    </ul>
<?php
    $html = ob_get_clean();
    include 'template.php';
?>