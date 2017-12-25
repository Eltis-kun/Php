<?php
if ($data) {
    foreach ($data as $row) { ?>
        <?php echo $row['phone']; ?><br>
        <?php  echo $row['icq'];?><br>
        <?php  echo $row['address'];


    }
}