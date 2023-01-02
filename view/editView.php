<?php
    $title = 'Edit';
    ob_start();
?>
<ul>
    <li><a href="index.php?action=home">Home</a></li>
    <li><a href="index.php?action=save">Save Places</a></li>
    <li><a href="index.php?action=list">List of Places</a></li>
</ul>
<h1>Edit</h1>
<div>
    <form method="post" action="">
        <input type="text" name="name" value=<?= $name ?>>
        <input type="text" name="address" value=<?= $address ?>>
        <textarea name="comment"><?= $comment ?></textarea>
        <button type="submit" name="save_edit">Save</button>
    </form>
</div>
<?php
    $html = ob_get_clean();
    include_once 'template.php';
?>