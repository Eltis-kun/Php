<?php

if ($data) {
    foreach ($data as $row) {
        echo $row['services']; ?><br>
      <?php  echo $row['text'];

    }
}