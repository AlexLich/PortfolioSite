<title>Новостной блог</title>
   <div class="content2">
    <?php
    if($isAuth) {
        echo '<a href="/articles/form">Дабавить новость</a>';
    }

    foreach($data as $row) {
        include 'articleView.php';
    }
    ?>
</div>
