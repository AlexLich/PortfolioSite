<div class="content2">
   <?php
    foreach($data as $row) {
          echo "<div class='block'>";
     echo "<a href=mailto:".$row['email'].">".$row['name']."</a> - ";
     echo date("m.d.y",$row['dt'])." написал</p>";
     echo "<p>".$row['msg']." </p>";
//     echo "<p align='right'><a align='right' href='/news/{$row["id"]}'>Удалить</a></p>";
        echo "<form action='/news/{$row["id"]}' method='DELETE'><input type='submit' value='Удалить'></form>";
     echo "<hr>";
     echo "</div>";
    }
    
//    echo "<hr>";
//      while($data){  
//        echo "<div class='block'>";
//     echo "<><a href=mailto:".$row['email'].">".$row['name']."</a> - ";
//     echo date("m.d.y",$row['dt'])." написал</p>";
//     echo "<p>".$row['msg']." </p>";
//     echo "<p align='right'><a align='right' href='/news?id=gbook&del={$row["id"]}'>Удалить</a></p>";
//     echo "<hr>";
//     echo "</div>";}                
    ?>
</div>