<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet"
              href="styleerror.css">
	</head>
		<body>
			<header>
                <div class="logo">
                    <img src="images\Logo.png" class="Logo-img" alt="Бинокли на BinoGer.ru" title=""> </img>
                    <span class="logo-title"> BinoGer.ru </span>
                </div>
                <div class="hor-menu">
                    <ul>
                        <li><p><a href="index.php"> Главная </a></p></li>
                        <li><div class="a"><p> Ассортимент: </p></div></li>
                        <li><p><a href="compact_binoculars.php"> Компактные бинокли </a></p></li>
                        <li><p><a href="binoculars_for_hunting.php"> Бинокли для охоты </a></p></li>
                        <li><p><a href="theatre_binoculars.php"> Бинокли для театра </a></p></li>
                        <li><p><a href="astro_binoculars.php"> Астрономические бинокли </a></p></li>
                        <li><p><a href="marine_binoculars.php"> Морские бинокли </a></p></li>
                    </ul>
                </div>
            </header>
            <div class="wrapper">
                <div class="content">
                    <div class="fof fofo">
                        <div class="oops"> 404 </div>
                        <div class="error"> Page Not Found </div>
                    </div>
                        <div class="error ror"> <p class="one"> OOPS! Похоже страница, на которую вы пытались перейти не существует.</p>
                        <p class="one">Пожалуйста, перейдите по одной из ссылок в шапке или футере, чтобы перейти в интересующий вас раздел.</p>
                        </div>
                    </div> 
                </div>
            </div>
            <footer>
                    <div id="footer">
                        <span class="text2 bin3 fot"> BINOGER.RU </span>
                        <div class="hor-menu"> <!-- блок для списка -->
                            <ul>  <!--создаю маркированный список-->
                                <li><p><a href="aboutus.php"> Контактный номер </a></p></li>
                                <li><div class="a"><p> + 7 (951) 651 18 07 </p></div></li>
                                <li><p><a href="aboutus.php"> Почта для связи </a></p></li>
                                <li><div class="a"><p> useless.mail@gmail.com </p></div></li>
                                <li><p><a href="aboutus.php"> Наш адрес </a></p></li>
                                <li><div class="a"><p> Какая-то улица, к.1, д.2, оффис 2010 </p></div></li>
                                <li><p><a href="aboutus.php"> Наши соцсети </a></p></li>
                                <li><div class="a"><p> VK: @neischi </p></div></li>
                                <li><div class="a"><p> INST: @tineponyal </p></div></li>
                                <li><div class="a"><p> TWITTWER: @ochenvazhnieludi </p></div></li>
                                <li><p><a href="index.php"> Главная </a></p></li> <!-- li-способ маркировки точками(не важно), p-блок для выравнивания, a-гиперссылка -->
                                <li><p><a href="aboutus.php"> О нас </a></p></li>
                                <li><p><a href="compact_binoculars.php"> Компактные бинокли </a></p></li>
                                <li><p><a href="binoculars_for_hunting.php"> Бинокли для охоты </a></p></li>
                                <li><p><a href="theatre_binoculars.php"> Бинокли для театра </a></p></li>
                                <li><p><a href="astro_binoculars.php"> Астрономические бинокли </a></p></li>
                                <li><p><a href="marine_binoculars.php"> Морские бинокли </a></p></li>
                             </ul>
                        </div>
                    </div>
                </footer>
		</body>
</html>

<!-- ErrorDocument 404 http:localhost 

#редирект на / без слеша
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_URI} !\..{1,10}$
RewriteCond %{REQUEST_URI} !(.*)/$
RewriteRule ^(.*)$ http://www.bebra2010.github.io/bebra.github.io.ru/$1/ [L,R=301] -->