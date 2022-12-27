<?php
    $title = "Save Your Favorite Spots!";
    ob_start();

?>
    <ul>
        <li><a href="index.php?action=home">Home</a></li>
        <li><a href="index.php?action=list">List of Places</a></li>
    </ul>
    <?php
        if($_POST){
            $name = $_POST['name'];
            $address = $_POST['address'];
            $comment = $_POST['comment'];
            $save_place->savePlace($name, $address, $comment);
        }
    ?>
    <h1>Save Places</h1>
    <div>
        <form method="post" action="">
            <label for="name">Name: </label>
            <input type="text" name="name">
            <label for="address">Address: </label>
            <input type="text" name="address">
            <label for="comment">Comment: </label>
            <input type="text" name="comment">
            <button type="submit">Save</button>
        </form>
    </div>

<?php

    $html = ob_get_clean();
    include_once 'template.php';

?>