<?php
    $title = "List of Places";

    ob_start();
?>
<ul>
    <li><a href="index.php?action=home">Home</a></li>
    <li><a href="index.php?action=save">Save Places</a></li>
</ul>
<h1>List of Places</h1>
<div id="table_div">
    <table>
        <tr>
            <th id="table_number_head">#</th>
            <th id="table_name_head">Name</th>
            <th id="table_address_head">Address</th>
            <th id="table_comment_head">Comment</th>
            <th>Action</th>
        </tr>
        <?php for($i = 0; $i < count($lists); $i++){?>
        <tr class="place_row">
            <td id="table_number_row"><?= $i + 1 ?></td>
            <td id="table_name_row"><?= $lists[$i]['name'] ?></td>
            <td id="table_address_row"><?= $lists[$i]['address'] ?></td>
            <td id="table_comment_row"><?= $lists[$i]['comment'] ?></td>
            <td><button type="button" class="delete_button" data-id="<?= $lists[$i]['id']?>">Delete</button></td>
        </tr>
        <?php } ?>
    </table>
</div>
<?php
    $html = ob_get_clean();
    include_once 'template.php';
?>