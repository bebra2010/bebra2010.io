<!DOCTYPE html>
<html>
    <head>
    <title> О нас </title>
    <link rel="stylesheet"
          href="style.css"> <!-- переход к внешнему файлу css -->
    <meta name="description" content="">
    </head>
        <body>
            <header> <!--шапка сайта-->
                <div class="logo"> <!-- выделяю в блок изображение и заголовок сайта, чтобы их выровнять относительно друг друга -->
                    <img src="images\Logo.png" class="Logo-img"> </img>
                    <span class="logo-title"> BinoGer.ru </span>
                </div>
                <div class="hor-menu"> <!-- блок для списка -->
                    <ul>  <!--создаю маркированный список-->
                        <li><p><a href="index.php" checked> Главная </a></p></li> <!-- li-способ маркировки точками(не важно), p-блок для выравнивания, a-гиперссылка -->
                        <li><div class="a"><p> Ассортимент: </p></div></li>
                        <li><p><a href="compact_binoculars.php"> Компактные бинокли </a></p></li>
                        <li><p><a href="binoculars_for_hunting.php"> Бинокли для охоты </a></p></li>
                        <li><p><a href="theatre_binoculars.php"> Бинокли для театра </a></p></li>
                        <li><p><a href="astro_binoculars.php"> Астрономические бинокли </a></p></li>
                        <li><p><a href="marine_binoculars.php"> Морские бинокли </a></p></li>
                    </ul>
                </div>
            </header>
            <!-- Контент -->
                <div class="wrapper"> <!-- "обёртка" документа -->
                    <div class="content"> <!-- большой блок с маленькими информационными блоками -->
                        <div class="INFO"> <!-- выделяю в один блок с одним и тем же классом отдельно каждую новость, чтобы в дальнейшем было проще их выравнивать относительно друг друга -->
                            <div class="block1 woww">
                                <h2 class="text2 wow"> Наши сотрудники: </h2>
                            </div>
                            <img src="https://krasivosti.pro/uploads/posts/2021-07/1625877074_3-krasivosti-pro-p-shlyoppa-kot-koti-krasivo-foto-3.jpg" class="logo-img haha">
                            <div class="block">
                                <span class="text"> Работник </span>
                            </div>
                            <div class="block1"> <!-- подблок с заголовками -->
                                <span class="text2"> Шлёпович Олег Нечипоренко </span>
                            </div>
                            <div class="block2"> <!-- подблок с текстами -->
                                <span class="text3"> 10 лет работает с биноклями, диплом, свидетельствующий наличие высшей квалификации по собачьим поводкам. </span>
                            </div>
                        </div>
                        <hr width="80%">
                        <br>
                        <div class="INFO"> <!-- блок со 2 новостью -->
                            <img src="https://i.pinimg.com/originals/8d/0a/2e/8d0a2e17a96015f56dc769e9a06bd765.jpg" class="logo-img haha">
                            <div class="block">
                                <span class="text"> Директор </span>
                            </div>
                            <div class="block1">
                                <span class="text2"> Непонятнов Андрей Андреевич </span>
                            </div>
                            <div class="block2">
                                <span class="text3"> 5 лет работы на стекольной фабрике, 8 высших образований: поварское, архитектурное, IT, медицинское, звукоинженерия, такси, бухгалтерский учёт. </span>
                            </div>
                        </div>
                        <hr width="80%">
                        <br>
                         <div class="INFO"> <!-- блок с 3 новостью -->
                            <img src="images/floppa.jpg" class="logo-img haha">
                            <div class="block">
                                <span class="text"> Чел с улицы </span>
                            </div>
                            <div class="block1">
                                <span class="text2"> Страницын Слава Беброу </span>
                            </div>
                            <div class="block2">
                                <span class="text3"> 40 секунд работы на государство, 14 лет. </span>
                            </div>
                        </div>
                        <hr width="80%">
                        <br>
                        <div class="INFO"> <!-- блок с 4 новостью -->
                            <img src="https://i.ytimg.com/vi/zzfw1uyu-YA/maxresdefault.jpg" class="logo-img haha">
                            <div class="block">
                                <span class="text"> Старик </span>
                            </div>
                            <div class="block1">
                                <span class="text2"> Ниочемныч Евгений Олегович </span>
                            </div>
                            <div class="block2">
                                <span class="text3"> 100 лет работы на стекольной фабрике, 50 лет работы на фабрике по сборке автомобилей, 90 лет работы на кондитерском заводе, 5 лет работы на металлургическом заводе, 8 секунд работы на заводе петард. Закончил обучение на 4 классе. </span>
                            </div>
                        </div>
                        <hr width="80%">
                        <br>
                        <div class="INFO"> <!-- блок с 5 новостью -->
                            <img src="https://i.ytimg.com/vi/3yg2JXFGGXg/maxresdefault.jpg" class="logo-img haha">
                            <div class="block">
                                <span class="text"> Без понятия </span>
                            </div>
                            <div class="block1">
                                <span class="text2"> Красивовна Мария Анатольевна </span>
                            </div>
                            <div>
                                <span class="text3"> не знаем кто это </span>
                            </div>
                        </div>
                        <hr width="80%">
                        <br>
                        <div class="center">
                            <div class="text2"> Мы на карте </div> <br/>
                            <a href="https://yandex.ru/maps/?um=constructor%3A5abeb61448025b194d09ede8777fd1c6626e01e3d27310e153c9e04ec10449da&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A5abeb61448025b194d09ede8777fd1c6626e01e3d27310e153c9e04ec10449da&amp;width=600&amp;height=351&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
                        </div>
                    </div>
                        <div class="sidebar">
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