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
    <link rel="stylesheet" href="css/play-film-page-style.css" type="text/css">

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

    <div class="container">
        <div class="play-container">
            <img src="films/HiturPetur/hiturpetur.jpg" class="play-img">
            <div class="play-text">
                <i class="fa-solid fa-circle-play play-movie-button"></i>
                <h1>Хитър Петър</h1>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="tags">
                    <span>Комедия</span>
                    <span>4K</span>
                </div>
                <div class="watch-btn">
                    <i class="fa-solid fa-circle-play play-trailer-button"></i>
                    <p class="trailer-text">Гледай трейлъра!</p>
                </div>
                <div class="trailer-container">
                    <div class="trailer-box">

                        <video id="trailerideo" class="trailer" controls>
                            <source src="films/HiturPetur/Hitar Petar 1960 DVDRip XviD AC3 MOTLEY sample_480p.mp4" type="video/mp4">
                        </video>
                        <i class="fa-solid fa-x close-trailer"></i>
                    </div>
                </div>
            </div>
            <div class="video-container">
                <div class="video-box">

                    <video id="movievideo" class="movie" controls>
                        <source src="films/HiturPetur/Hitur Petur Хитър Петър 1960_360p.mp4" type="video/mp4">
                    </video>
                    <i class="fa-solid fa-x close-video"></i>
                </div>
            </div>

            <div class="abount-movie-container">
                <h1><i>Хитър Петър</i></h1>
                <h3><u>Резюме:</u></h3>
                <p> Живял някога по българските земи момък на име Петър. Той бил беден, но сърцето му – весело, а умът – остър като наточена секира. За парче хляб става ратай у поп Ставрос. По Гергьовден на два пъти прави за смях чорбаджията Стамо. Попът
                    и чорбаджията решават да си отмъстят и измислят някакви борчове от времето на дядо му, които с лихвите са станали непосилни за плащане, взимат му къщата и магарето да го оставят без нищо. Петър се сбогува с чорбаджийската дъщеря Росица,
                    която е много добро момиче и пуска магарето по дире му, когато Петър напуска селото и тръгва по широкия свят да търси Правдата. Правдата го отвежда пред портите на един манастир в който Петър желае да работи срещу подслон и храна.
                    Игумен Калистрат го приема, но го предупреждава че в манастира се пости. Един следобед, Петър върви по една отъпкана пътека с магарето си и без да иска чува човешки стенания. Любопитството му го отвежда под прозореца на игумен Калистрат,
                    където Петър поглежда и вижда голям шкаф пълен с наденица, пастърма, суджук, а Игумен Калистрат реже, похапва и стене от кеф. Възмутен от неправдата, Петър наговаря другарите му по работа да му помогнат вечерта да изплашат игумена
                    и да му вземат всичкото месо. Така и става, но когато игумен Калистрат разбира за шегата прогонва не само него, но и всичките му съратници от манастира.
                </p>
                <h3 class="cast-heading"><u>Актьори:</u></h3>
                <div class="cast">
                    <div class="cast-box">
                        <img src="films/HiturPetur/qbandjiew.jfif" alt="" class="cast-img">
                        <span class="cast-title">Рачко Ябанджиев</span>
                    </div>
                    <div class="cast-box">
                        <img src="films/HiturPetur/bakurdjiewa.jfif" alt="" class="cast-img">
                        <span class="cast-title">Анастасия Бакърджиева</span>
                    </div>
                    <div class="cast-box">
                        <img src="films/HiturPetur/ruskowa.jfif" alt="" class="cast-img">
                        <span class="cast-title">Елисавета Рускова</span>
                    </div>
                    <div class="cast-box">
                        <img src="films/HiturPetur/konforti.png" alt="" class="cast-img">
                        <span class="cast-title">Лео Конфорти</span>
                    </div>
                </div>
            </div>
            <div class="download">
                <h3 class="download-title"><b><u>Сваляне на филма:</u></b></h3>
                <div class="download-links">
                    <a href="films/HiturPetur/Hitur Petur Хитър Петър 1960_360p.mp4" download>480p</a>
                    <a href="films/HiturPetur/Hitur Petur Хитър Петър 1960_360p.mp4" download>720p</a>
                    <a href="films/HiturPetur/Hitur Petur Хитър Петър 1960_360p.mp4" download>1080p</a>
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
    <script src="js/play-film.js"></script>
    <script src="js/dynamic-part.js"></script>
</body>

</html>