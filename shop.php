<?php
require "db.php";
require "includes/price.inc.php";

$records = $mysqli->query("SELECT * FROM `products` WHERE id ") or die(mysqli_error($mysqli));

while ($this_record = $records->fetch_assoc()) :
    echo '
    <div class="shop-card">
        <img class="item-image" src="' . $this_record['img_url'] . '" alt="' . $this_record['description'] . '" width="' . $this_record['img_width'] . '" height="' . $this_record['img_height'] . '">
        <p class="item-name">' . $this_record['name'] . '</p>
        <p class="item-price">' . formatPrice($this_record['price']) . '</p>
        <p class="item-description">' . $this_record['description'] . '</p>
    </div>
    ';
endwhile;
