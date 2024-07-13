<?php include('DBServer.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/V-logo-black.png">
    <title>VTEK</title>

    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link href="css/login-register-style.css" rel="stylesheet" type="text/css">
    <link href="css/login-register-style1.css" rel="stylesheet" type="text/css">

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
                <a href="index.html" style="text-decoration:none;">
                    <h1 class="site-name">TEK</h1>
                </a>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <a href="index.html" style="text-decoration:none;">
                        <li class="menu-list-item bold">Начало</li>
                    </a>
                    <a href="terms-and-conditions.html" style="text-decoration:none;">
                        <li class="menu-list-item">Правила и условия</li>
                    </a>
                    <a href="about-us-page.html" style="text-decoration:none;">
                        <li class="menu-list-item">За нас</li>
                    </a>
                    <a href="contact-us-page.html" style="text-decoration:none;">
                        <li class="menu-list-item">Контакти</li>
                    </a>
                </ul>
            </div>
            <div class="profile-container">
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
            <a href="index.html"><img class="sidebar-logo" src="images/V-logo-white3.png"></a>
        </div>
        <a href="film-category-page.html" style="text-decoration:none;">
            <i class="sidebar-icon fa-solid fa-masks-theater"></i>
            <p class="sidebar-text">Жанр филми</p>
        </a>
        <a href="film-page.html" style="text-decoration:none;">
            <i class="sidebar-icon fa-solid fa-film"></i>
            <p class="sidebar-text">Филми</p>
        </a>
        <a href="search-page-films.html" style="text-decoration:none;">
            <i class="sidebar-icon fa-solid fa-tv"></i>
            <p class="sidebar-text">Намери филм</p>
        </a>
        <a href="video-page.html" style="text-decoration:none;">
            <i class="sidebar-icon fa-solid fa-video"></i>
            <p class="sidebar-text">Видеа</p>
        </a>
        <a href="search-page-videos.html" style="text-decoration:none;">
            <i class="sidebar-icon fa-solid fa-camera"></i>
            <p class="sidebar-text">Намери видео</p>
        </a>
    </div>
    <!------------------------main container------------------->
    <div class="container">
        <div class="register-container">
            <div class="header">
                <h2>Регистрация</h2>
            </div>
            <form method="post" class="login-form">
                <?php include('Errors.php')?>
                <div class="input-group">
                    <input type="text" placeholder="Име" id="firstName" name="firstName" class="textboxes"><br><br>
                    <input type="text" placeholder="Фамилия" id="lastName" name="lastName" class="textboxes"><br><br>
                    <input type="text" placeholder="Потребителско име" id="username" name="username" class="textboxes" value="<?php echo $username?>"><br><br>
                    <input type="email" placeholder="Email" id="email" name="email" class="textboxes" value="<?php echo $email?>"><br><br>
                    <input type="password" placeholder="Парола" id="password" name="password" class="textboxes"><br><br>
                    <input type="password" placeholder="Повтори паролата" id="confirm_password" name="confirm_password" class="textboxes">
                </div>
                <br>
                <button type="submit" class="btn" name="register_button" id="sub">Регистрация</button>
                <br>
                <br>
                <p class="login-text">
                    Вече имате акаунт? <a href="Login.php">Вход</a>
                </p>
            </form>
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
                <p class="link-paragraph"><a href="index.html" class="link-element" style="text-decoration:none;">Начало</a></p>
                <p class="link-paragraph"><a href="film-page.html" class="link-element" style="text-decoration:none;">Филми</a></p>
                <p class="link-paragraph"><a href="video-page.html" class="link-element" style="text-decoration:none;">Видеоклипове</a></p>
                <p class="link-paragraph"><a href="about-us-page.html" class="link-element" style="text-decoration:none;">За нас</a></p>
                <p class="link-paragraph"><a href="contact-us-page.html" class="link-element" style="text-decoration:none;">Контакти</a></p>
                <p class="link-paragraph"><a href="terms-and-conditions.html" class="link-element" style="text-decoration:none;">Правила и условия</a></p>
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