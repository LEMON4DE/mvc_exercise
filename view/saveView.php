<?php
    $title = "Save Your Favorite Spots!";
    ob_start();

?>
    <ul>
        <li><a href="index.php?action=home">Home</a></li>
        <li><a href="index.php?action=list">List of Places</a></li>
    </ul>
    <h1>Save Places</h1>
    <div>
        <form method="post" action="">
            <label for="name">Name: </label>
            <input type="text" name="name">
            <label for="address">Address: </label>
            <input type="text" name="address">
            <label for="comment">Comment: </label>
            <textarea type="text" name="comment"></textarea>
            <button type="submit">Save</button>
        </form>
    </div>

<?php

    $html = ob_get_clean();
    include_once 'template.php';

?>