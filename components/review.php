<?php
$reviews = $db->prepare("SELECT * FROM `reviews` WHERE product_id = :id");
$reviews->bindParam("id", $_GET['id']);
$reviews->execute();
$result = $reviews->fetchAll(PDO::FETCH_ASSOC);
?>

<h2 class="py-3">Reviews</h2>
<table class="table border border-black">
    <thead>
    <tr>
        <th scope="col">Rating</th>
        <th scope="col">Review</th>
        <th scope="col">Datum</th>
        <th scope="col">Tijd</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($result as &$review) {
        ?>
        <tr>
            <th><?=$review['rating'];?></th>
            <td><?=$review['description'];?></td>
            <td><?=$review['date'];?></td>
            <td>@<?=$review['time'];?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
