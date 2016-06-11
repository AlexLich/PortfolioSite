<title>Новостной блог</title>
   <div class="content2">
    <?php
    foreach($data as $row) {
        echo "<div class='block'>";
        echo "<a href=mailto:".$row['email'].">".$row['name']."</a> - ";
        echo date("m.d.y",$row['dt'])." написал</p>";
        echo "<p>".$row['msg']." </p>";
//        echo "<form action='/news/{$row["id"]}' method='POST'><input type='submit' value='Удалить'></form>";
        echo "<hr>";
        echo "</div>";
    }
    ?>
</div>
