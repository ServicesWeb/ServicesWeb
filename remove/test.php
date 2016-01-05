<?php
if(!empty($_POST['days_select'])) {
    foreach($_POST['days_select'] as $day) {
            echo $day;
    }
}
?>
