<div class="content1">
<?php
    foreach ($data as $row) {
        echo '<p>'.$row['Name'].'</p>';
        echo '<p>'.$row['Description'].'</p>';
    }
?>
</div>
