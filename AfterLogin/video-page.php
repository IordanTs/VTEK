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
    <link rel="stylesheet" href="css/video-page-style.css" type="text/css">
    <link rel="stylesheet" href="css/search-style.css" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Sen:wght@400;700;800&family=Syne+Tactile&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script async src="https://api.countapi.xyz/hit/vtek.com/2e76989e-b1e9-4f4a-bf56-ec3f86753135?callback=videoViews"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/fb57cf22-4518-4c87-b204-95884f1ead02?callback=videoViews2"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/bc89fb88-f98f-4874-8296-7a5ed94c61e2?callback=videoViews3"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/581ce55c-aad3-4db7-8080-11cd235da048?callback=videoViews4"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/5b7312f1-500f-4107-969c-a19c16ea7051?callback=videoViews5"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/4fb7e9b7-1777-4b91-b027-fd65fb13cd2d?callback=videoViews6"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/b7e8e4e4-df07-45a2-ba89-0d30f2cac64c?callback=videoViews7"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/aade3f7a-c626-4ae5-a46a-9e10d64ee319?callback=videoViews8"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/ba3794de-26ad-4710-aa1f-66840de61ab9?callback=videoViews9"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/06c2f942-76c8-4f9e-ade3-23de06a798ac?callback=videoViews10"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/219aced1-4927-4f69-93b4-1aa0a824e8c5?callback=videoViews11"></script>
    <script async src="https://api.countapi.xyz/hit/vtek.com/714a90d0-0439-4607-b600-9500ce8ba942?callback=videoViews12"></script>

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
                <a href="http://localhost/VTEK/index.html"><button class="logout-button">Изход</button></a>
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
    <!------------------------main------------------->
    <div class="container" id="main">
        <div class="banner">
            <img src="images/speaker-banner.jpg">
        </div>
        <div class="categories" id="music">
            <div class="category-section">
                <a href="search-page-videos.php"><button class="category main">Всичко</button></a>
                <a href="#music"><button class="category">Музика</button></a>
                <a href="#news"><button class="category">Новини</button></a>
            </div>
        </div>
        <div class="video-section">
            <h2>Музика <a href="#main"><i class="fa-solid fa-angle-up up-arrow"></i></a></h2>
            <hr>
            <div class="list-container">
                <div class="vid-list">
                    <a href="play-video-page.php"><img src="images/Mega-Hits-2021.jpg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="play-video-page.php">Mega Hits 2021 🌱 The Best Of Vocal Deep House Music Mix 2021 🌱 Summer Music Mix 2021 #9</a>
                            <p>
                                <span id="views"></span> гледания &bull; качено: преди 2 часа
                            </p>
                        </div>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="video1-Counting Stars.php"><img src="images/one-republic.jpg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video1-Counting Stars.php">OneRepublic - Counting Stars (Official Music Video)</a>
                            <p>
                                <span id="views2"></span> гледания &bull; качено: преди 10 минути
                            </p>
                        </div>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="video2-Rag'n'Bone Man - Human.php"><img src="images/human.jpg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video2-Rag'n'Bone Man - Human.php">Rag'n'Bone Man - Human (Official Video)</a>
                            <p>
                                <span id="views3"></span> гледания &bull; качено: преди 12 часа
                            </p>
                        </div>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="video3-Otilia - Bilionera (official video).php"><img src="images/bilionera.jpg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video3-Otilia - Bilionera (official video).php">Otilia - Bilionera (official video)</a>
                            <p>
                                <span id="views4"></span> гледания &bull; качено: преди 4 часа
                            </p>
                        </div>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="video4-Лили Иванова Детелини.php"><img src="images/detelini.jpg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video4-Лили Иванова Детелини.php">Лили Иванова Детелини 🍀🍀🍀</a>
                            <p>
                                <span id="views5"></span> гледания &bull; качено: преди 17 часа
                            </p>
                        </div>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="video5-YAKU - Капитан Петко Войвода.php"><img src="images/kapitanPetkoVoivoda.jpg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video5-YAKU - Капитан Петко Войвода.php">YAKU - Капитан Петко Войвода / Kapitan Petko Voivoda - Официална Версия</a>
                            <p>
                                <span id="views6"></span> гледания &bull; качено: преди 6 часа
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-section2" id="news">
            <h2>Новини <a href="#main"><i class="fa-solid fa-angle-up up-arrow"></i></a></h2>
            <hr>
            <div class="list-container">
                <div class="vid-list">
                    <a href="video6-bTV Новините.php"><img src="images/novini1.jpg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video6-bTV Новините.php">bTV Новините - ☀️Обедна емисия☀️ 17.03.2022</a>
                            <p>
                                <span id="views7"></span> гледания &bull; качено: преди 2 часа
                            </p>
                        </div>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="video7-bTV Новините2.php"><img src="images/novini2.jpg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video7-bTV Новините2.php">bTV Новините - 🌆Централна емисия🌆 - 15.03.2022</a>
                            <p>
                                <span id="views8"></span> гледания &bull; качено: преди 10 минути
                            </p>
                        </div>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="video8-Обедна емисия новини (8.4.2022).php"><img src="images/novini3.jpeg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video8-Обедна емисия новини (8.4.2022).php">Обедна емисия новини (8.4.2022)</a>
                            <p>
                                <span id="views9"></span> гледания &bull; качено: преди 12 часа
                            </p>
                        </div>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="video9-Новините на NOVA (31.03.2022 - централна емисия).php"><img src="images/novini4.jpg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video9-Новините на NOVA (31.03.2022 - централна емисия).php">Новините на NOVA (31.03.2022 - централна емисия)</a>
                            <p>
                                <span id="views10"></span> гледания &bull; качено: преди 4 часа
                            </p>
                        </div>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="video10-По света и у нас.php"><img src="images/novini5.png" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video10-По света и у нас.php">По света и у нас – 18.03.2022, 12:00 ч. по БНТ</a>
                            <p>
                                <span id="views11"></span> гледания &bull; качено: преди 17 часа
                            </p>
                        </div>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="video11-Новините на NOVA (22.03.2022 - централна емисия).php"><img src="images/novini6.jpg" class="thumbnail"></a>
                    <div class="flex-div">
                        <div class="vid-info">
                            <a href="video11-Новините на NOVA (22.03.2022 - централна емисия).php">Новините на NOVA (22.03.2022 - централна емисия)</a>
                            <p>
                                <span id="views12"></span> гледания &bull; качено: преди 6 часа
                            </p>
                        </div>
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