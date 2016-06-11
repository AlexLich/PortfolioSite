<div class='block'>
<?php
echo '<p>'.$row['name'].'</p>';
echo '<p>'.$row['content'].'</p>';
if ($isAuth) {
    echo "<form action='/articles/{$row["id"]}' method='POST'>
    <input type='submit' value='Удалить'>
    </form>";
}

?>

</div>
