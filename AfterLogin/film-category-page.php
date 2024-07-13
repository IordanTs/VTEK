<?php include('DBServer.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/V-logo-black.png">
    <title>VTEK</title>

    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/film-category-page.css" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Sen:wght@400;700;800&family=Syne+Tactile&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!------------------------nav bar------------------->
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="index.php" style="text-decoration:none;">
                    <h1 class="site-name">TEK</h1>
                </a>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <a href="index.php" style="text-decoration:none;">
                        <li class="menu-list-item bold">Начало</li>
                    </a>
                    <a href="terms-and-conditions.php" style="text-decoration:none;">
                        <li class="menu-list-item">Правила и условия</li>
                    </a>
                    <a href="about-us-page.php" style="text-decoration:none;">
                        <li class="menu-list-item">За нас</li>
                    </a>
                    <a href="contact-us-page.php" style="text-decoration:none;">
                        <li class="menu-list-item">Контакти</li>
                    </a>
                </ul>
            </div>
            <div class="profile-container">
                <div class="user_name">
                    <?php
                        echo $_SESSION['username']; 
                    ?>
                </div>
                <a href="http://vtek.bg.cm/"><button class="logout-button">Изход</button></a>
                <div class="toggle">
                    <i class="fa-solid fa-moon toggle-icon"></i>
                    <i class="fa-solid fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------side bar------------------->
    <div class="sidebar">
        <div class="logo">
            <a href="index.php"><img class="sidebar-logo" src="images/V-logo-white3.png"></a>
        </div>
        <a href="film-category-page.php" style="text-decoration:none;">
            <i class="sidebar-icon fa-solid fa-masks-theater"></i>
            <p class="sidebar-text">Жанр филми</p>
        </a>
        <a href="film-page.php" style="text-decoration:none;">
            <i class="sidebar-icon fa-solid fa-film"></i>
            <p class="sidebar-text">Филми</p>
        </a>
        <a href="search-page-films.php" style="text-decoration:none;">
            <i class="sidebar-icon fa-solid fa-tv"></i>
            <p class="sidebar-text">Намери филм</p>
        </a>
        <a href="video-page.php" style="text-decoration:none;">
            <i class="sidebar-icon fa-solid fa-video"></i>
            <p class="sidebar-text">Видеа</p>
        </a>
        <a href="search-page-videos.php" style="text-decoration:none;">
            <i class="sidebar-icon fa-solid fa-camera"></i>
            <p class="sidebar-text">Намери видео</p>
        </a>
    </div>
    <!------------------------main container------------------->
    <div class="container" id="main">
        <div class="categories">
            <div class="category-section">
                <a href="search-page-films.php"><button class="category main">Всичко</button></a>
                <a href="#action"><button class="category">Екшън</button></a>
                <a href="#comedy" id="action"><button class="category">Комедия</button></a>
            </div>
        </div>
        <div class="category-container">
            <div class="category-1">
                <!--Movie category-->
                <h1>Екшън <a href="#main"><i class="fa-solid fa-angle-up up-arrow"></i></a></h1>
                <hr>
                <!--Movie box-->
                <div class="movies-container">
                    <!--Box 1-->
                    <div class="box">
                        <div class="box-img">
                            <a href="play-film-page.php"><img src="films/Oblivion.2013/Oblivion-banner.jpg"></a>
                        </div>
                        <h3>Oblivion</h3>
                        <span>124 мин. | Екшън, Приключенски, Мистерия</span>
                    </div>
                    <!--Box 2-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film1-Hours.php"><img src="films/Hours.2013/hours.jpg" alt=""></a>
                        </div>
                        <h3>Hours</h3>
                        <span>96 мин. | Екшън, Драма, Трилър</span>
                    </div>
                    <!--Box 3-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film2-Den12.php"><img src="films/The.12th.Man/the12men.jpg" alt=""></a>
                        </div>
                        <h3>The 12th Man</h3>
                        <span>124 мин. | Екшън, Драма, Исторически, Трилър</span>
                    </div>
                    <!--Box 4-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film4-Riddick.php"><img src="films/Riddick/riddik.jpg" alt=""></a>
                        </div>
                        <h3>Riddick</h3>
                        <span>90 мин. | Екшън, Фантастика, Трилър</span>
                    </div>
                    <!--Box 5-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film5-Rampage.php"><img src="films/Rampage/Rampage.jpg" alt=""></a>
                        </div>
                        <h3>Rampage</h3>
                        <span>90 мин. | Екшън, Приключенски, Фантастика</span>
                    </div>
                    <!--Box 6-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film3-Bigger.php"><img src="films/Bigger(2018)/bigger.jpg" alt=""></a>
                        </div>
                        <h3>Bigger</h3>
                        <span>90 мин. | Екшън</span>
                    </div>
                </div>
            </div>
            <div class="category-2" id="comedy">
                <!--Movie category-->
                <h1>Комедия <a href="#main"><i class="fa-solid fa-angle-up up-arrow"></i></a></h1>
                <hr>
                <!--Movie box-->
                <div class="movies-container">
                    <!--Box 1-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film7-GospodinZaEdinDen.php"><img src="films/GospodinZaEdinDen/gospodinzaedinden.jpg" alt=""></a>
                        </div>
                        <h3>Господин за един ден</h3>
                        <span>83 мин. | Комедия</span>
                    </div>
                    <!--Box 2-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film8-HiturPetur.php"><img src="films/HiturPetur/hiturpetur.jpg" alt=""></a>
                        </div>
                        <h3>Хитър Петър</h3>
                        <span>91 мин. | Комедия</span>
                    </div>
                    <!--Box 3-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film9-Lubimec13.php"><img src="films/Lubimec13/lubimec13.jpg" alt=""></a>
                        </div>
                        <h3>Любимец 13</h3>
                        <span>80 мин. | Комедия</span>
                    </div>
                    <!--Box 4-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film6-Zawrushtane.php"><img src="films/Zawrushtane/Zawrushtane.jpg" alt=""></a>
                        </div>
                        <h3>Завръщане</h3>
                        <span>110 мин. | Комедия, Драма</span>
                    </div>
                    <!--Box 5-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film10-BashMajstoraNaMore.php"><img src="films/BashMaistoraNaMore/BashMaistora.jpg" alt=""></a>
                        </div>
                        <h3>Баш Майстора на море</h3>
                        <span>63 мин. | Комедия</span>
                    </div>
                    <!--Box 6-->
                    <div class="box">
                        <div class="box-img">
                            <a href="film11-DamiKanqt.php"><img src="films/DamiKanqt/DamiKanqt.jpg" alt=""></a>
                        </div>
                        <h3>Дами канят</h3>
                        <span>89 мин. | Комедия</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------site info------------------->
    <footer class="info">
        <div class="row">
            <div class="col">
                <img src="images/V-logo-white2.png" class="info-logo">
                <p>Добре дошли във VTEK! Това е сайтът, който обединява двата най-посещавани сайта: сайт за видеоклипове и сайт за гледане на филми онлайн. Във VTEK ще намерите всичко това на едно място за ваше улеснение.
                </p>
            </div>
            <div class="col">
                <h3>Офис
                    <div class="underline"><span></span></div>
                </h3>
                <p>ITPL Road</p>
                <p>Пловдив, България</p>
                <p>Пощенски код: 4000</p>
                <p class="email-id">VTEK.bg@abv.bg</p>
                <h4>Телефон: +359 88 5005 198</h4>
            </div>
            <div class="col">
                <h3>Линкове
                    <div class="underline"><span></span></div>
                </h3>
                <p class="link-paragraph"><a href="index.php" class="link-element" style="text-decoration:none;">Начало</a></p>
                <p class="link-paragraph"><a href="film-page.php" class="link-element" style="text-decoration:none;">Филми</a></p>
                <p class="link-paragraph"><a href="film-category-page.php" class="link-element" style="text-decoration:none;">Жанр филми</a></p>
                <p class="link-paragraph"><a href="search-page-films.php" class="link-element" style="text-decoration:none;">Намери филм</a></p>
                <p class="link-paragraph"><a href="video-page.php" class="link-element" style="text-decoration:none;">Видеоклипове</a></p>
                <p class="link-paragraph"><a href="search-page-videos.php" class="link-element" style="text-decoration:none;">Намери видео</a></p>
                <p class="link-paragraph"><a href="about-us-page.php" class="link-element" style="text-decoration:none;">За нас</a></p>
                <p class="link-paragraph"><a href="terms-and-conditions.php" class="link-element" style="text-decoration:none;">Правила и условия</a></p>
                <p class="link-paragraph"><a href="contact-us-page.php" class="link-element" style="text-decoration:none;">Контакти</a></p>
            </div>
            <div class="col">
                <h3>Бюлетин
                    <div class="underline"><span></span></div>
                </h3>
                <form>
                    <i class="fa-solid fa-envelope email-image"></i>
                    <input class="email-text" type="email" placeholder="Въведете email..." required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100002565925461"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/tsvetanovjordan/"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr class="copyright-line">
        <p class="copyright">VTEK © 2022 - All Rights Reserved</p>
    </footer>
    <script src="js/dynamic-part.js"></script>
</body>

</html>