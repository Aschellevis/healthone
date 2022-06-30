<?php
$reviews = $db->prepare("SELECT * FROM `reviews`");
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
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($result as &$review) {
        ?>
        <tr>
            <?php
            if ($review['rating'] == 1) {
                echo '<th><i class="bi bi-star-fill text-warning"></i></th>';
            } else if ($review['rating'] == 2) {
                echo '<th>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </th>';
            } else if ($review['rating'] == 3) {
                echo '<th>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </th>';
            } else if ($review['rating'] == 4) {
                echo '<th>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </th>';
            } else {
                echo '<th>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </th>';
            }
            ?>
            <td><?=$review['description'];?></td>
            <td><?=$review['date'];?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
