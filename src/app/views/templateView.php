<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="src/assets/css/styles.css">
</head>
<body>
	<div class="container">
		<div class="notepad">
			<div class="suture">

				<div class="head">
					<p>AlexLiCH</p>
				</div>

				<div class="toilet_paper">
					<nav>
					  <a href="/">Главная страница</a>
					  <a href="/resume">Резюме</a>
					  <a href="/portfolio">Портфолио</a>
					  <a href="/photoalbum">Фотоальбом</a>
					  <a href='/about'>Контакты</a>
					</nav>

                    <div>
                        <?php include $contentView; ?>
                    </div>

				    <div id="content5">
						<ul class="footer" style="text-align=center">
                            <li><a href="https://vk.com/alex__lich">2016 - <?echo date("Y");?> ©Develop by AlexLiCH</a></li>
						    <li><a href="/">О сайте</a></li>
						    <li><a href='/about'>Обратная связь</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>
