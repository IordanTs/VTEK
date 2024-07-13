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
    <link rel="stylesheet" href="css/play-video-page-style.css" type="text/css">
    <link rel="stylesheet" href="css/video-page-style.css" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Sen:wght@400;700;800&family=Syne+Tactile&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script async src="https://api.countapi.xyz/hit/vtek.com/581ce55c-aad3-4db7-8080-11cd235da048?callback=videoViews"></script>
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
    <div class="container">
        <div class="row">
            <div class="play-video">
                <video controls autoplay>
                    <source src="videos/Otilia  Bilionera official video_1080p.mp4" type="video/mp4">
                </video>
                <h3>Otilia - Bilionera (official video)</h3>
                <div class="play-video-info">
                    <p>
                        <span id="views"></span> гледания • качено: преди 9 часа
                    </p>
                    <a href="videos/Otilia  Bilionera official video_1080p.mp4" download>
                        <button class="download-button">
                        Свали видеото
                        </button>
                    </a>
                </div>
                <hr>
                <div class="publisher">
                    <img src="images/music-img.jpg">
                    <div>
                        <p>Ритъм</p>
                        <span>20 абоната</span>
                    </div>
                </div>
                <div class="vid-discription">
                    <p>Това е моята музика :) </p>
                    <p>Пожелаваме ви приятно гледане и се насладете на ритъма на песента. Поздрави!</p>
                    <form action="" method="POST">
                        <div class="add-coment">
                            <i class="fa-solid fa-comment-dots comment-icon"></i>
                            <div class="comment" action>
                                <input type="text" placeholder="Име..." name="name" class="coment-text" required>
                                <input type="text" placeholder="Напиши коментар..." name="messege" class="coment-text" required>
                                <button type="submit" name="post" class="post-putton">Постни</button>
                            </div>
                        </div>
                    </form>
                    <div class="old-comment">
                        <i class="fa-solid fa-comment-dots comment-icon"></i>
                        <div>
                            <h3>User14556</h3>
                            <p>Много добре се е получило. Продължавай все така! :)</p>
                        </div>
                    </div>
                    <div class="old-comment">
                        <i class="fa-solid fa-comment-dots comment-icon"></i>
                        <div>
                            <h3>Ivan</h3>
                            <p>
                                Слушам това от няколко дни и изглежда, че става все по-добре всеки път! Абсолютно брилянтен микс :)
                            </p>
                        </div>
                    </div>
                    <div class="old-comment">
                        <i class="fa-solid fa-comment-dots comment-icon"></i>
                        <div>
                            <h3>Koceto</h3>
                            <p>4 часа блаженство. Невероятен микс, а видеото, което върви с този бийт, е просто хипнотизиращо. Благодаря ти</p>
                        </div>
                    </div>
                    <div class="old-comment">
                        <i class="fa-solid fa-comment-dots comment-icon"></i>
                        <div>
                            <h3>Michael</h3>
                            <p>Много красив микс! Благодаря ! Искам да знам също кой знае къде мога да намеря списък с всички тези места от видеото? Моля те 😁
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-sidebar">
                <div class="side-video-list">
                    <a href="play-video-page.php" class="small-thumbnail"><img src="images/Mega-Hits-2021.jpg"></a>
                    <div class="vid-info">
                        <a href="play-video-page.php">Mega Hits 2021 🌱 The Best Of Vocal Deep House Music Mix 2021 🌱 Summer Music Mix 2021 #9</a>
                        <p>Ритъм</p>
                    </div>
                </div>
                <div class="side-video-list">
                    <a href="video1-Counting Stars.php" class="small-thumbnail"><img src="images/one-republic.jpg  "></a>
                    <div class="vid-info">
                        <a href="video1-Counting Stars.php">OneRepublic - Counting Stars (Official Music Video)</a>
                        <p>Ритъм</p>
                    </div>
                </div>
                <div class="side-video-list">
                    <a href="video2-Rag'n'Bone Man - Human.php" class="small-thumbnail"><img src="images/human.jpg  "></a>
                    <div class="vid-info">
                        <a href="video2-Rag'n'Bone Man - Human.php">Rag'n'Bone Man - Human (Official Video)</a>
                        <p>Ритъм</p>
                    </div>
                </div>
                <div class="side-video-list">
                    <a href="video4-Лили Иванова Детелини.php" class="small-thumbnail"><img src="images/detelini.jpg"></a>
                    <div class="vid-info">
                        <a href="video4-Лили Иванова Детелини.php">Лили Иванова Детелини 🍀🍀🍀</a>
                        <p>Ритъм</p>
                    </div>
                </div>
                <div class="side-video-list">
                    <a href="video5-YAKU - Капитан Петко Войвода.php" class="small-thumbnail"><img src="images/kapitanPetkoVoivoda.jpg"></a>
                    <div class="vid-info">
                        <a href="video5-YAKU - Капитан Петко Войвода.php">YAKU - Капитан Петко Войвода / Kapitan Petko Voivoda - Официална Версия</a>
                        <p>Ритъм</p>
                    </div>
                </div>
                <div class="side-video-list">
                    <a href="video6-bTV Новините.php" class="small-thumbnail"><img src="images/novini1.jpg"></a>
                    <div class="vid-info">
                        <a href="video6-bTV Новините.php">
                            bTV Новините - ☀️Обедна емисия☀️ 17.03.2022</a>
                        <p>Новини</p>
                    </div>
                </div>
                <div class="side-video-list">
                    <a href="video7-bTV Новините2.php" class="small-thumbnail"><img src="images/novini2.jpg"></a>
                    <div class="vid-info">
                        <a href="video7-bTV Новините2.php">
                            bTV Новините - 🌆Централна емисия🌆 - 15.03.2022</a>
                        <p>Новини</p>
                    </div>
                </div>
                <div class="side-video-list">
                    <a href="video8-Обедна емисия новини (8.4.2022).php" class="small-thumbnail"><img src="images/novini3.jpeg"></a>
                    <div class="vid-info">
                        <a href="video8-Обедна емисия новини (8.4.2022).php">
                            Обедна емисия новини (8.4.2022)</a>
                        <p>Новини</p>
                    </div>
                </div>
                <div class="side-video-list">
                    <a href="video9-Новините на NOVA (31.03.2022 - централна емисия).php" class="small-thumbnail"><img src="images/novini4.jpg"></a>
                    <div class="vid-info">
                        <a href="video9-Новините на NOVA (31.03.2022 - централна емисия).php">
                            Новините на NOVA (31.03.2022 - централна емисия)</a>
                        <p>Новини</p>
                    </div>
                </div>
                <div class="side-video-list">
                    <a href="video10-По света и у нас.php" class="small-thumbnail"><img src="images/novini5.png"></a>
                    <div class="vid-info">
                        <a href="video10-По света и у нас.php">
                            По света и у нас – 18.03.2022, 12:00 ч. по БНТ</a>
                        <p>Новини</p>
                    </div>
                </div>
                <div class="side-video-list">
                    <a href="video11-Новините на NOVA (22.03.2022 - централна емисия).php" class="small-thumbnail"><img src="images/novini6.jpg"></a>
                    <div class="vid-info">
                        <a href="video11-Новините на NOVA (22.03.2022 - централна емисия).php">
                            Новините на NOVA (22.03.2022 - централна емисия)</a>
                        <p>Новини</p>
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