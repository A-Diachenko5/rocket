<?php 

require_once 'db/databaseconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fonts/ptsanscaption.css">
    <title>Check Up</title>
</head>
<body>
    
    <header class="header">
        <div class="header__wrapper wrapper">
            <img class="header__burger" src="./img/burger.svg" alt="burger">
            <img class="header__exit" src="./img/exit.svg" alt="exit">
            <a href="" class="header__logo-wrapper"><img src="./img/logo.svg" alt="logo" class="header__logo"></a>
            <div class="header__address">
                <p class="header__city">Ростов-на-Дону</p>
                <p class="header__street">ул. Ленина, 2Б</p>
            </div>
            <a href="tel:+7-863-000-00-00" class="header__number">
                +7(863) 000 00 00
            </a>
            <button class="header__button">
                Записаться на прием
            </button>  
            <div class="header__address-mobile">
            <a class="header__number-mobile">+7(863) 000 00 00</a>
            <p class="header__city-mobile">Ростов-на-Дону</p>
            </div>
        </div>
        
    </header>
    <div class="modal-menu">
        <ul class="modal-menu__list">
            <li class="modal-menu__item"><a href="">О клинике</a></li>
            <li class="modal-menu__item"><a href="">Услуги</a></li>
            <li class="modal-menu__item"><a href="">Специалисты</a></li>
            <li class="modal-menu__item"><a href="">Цены</a></li>
            <li class="modal-menu__item"><a href="">Контакты</a></li>
        </ul>
        <button class="modal-menu__button">
            Записаться на прием
        </button>
    </div>
    <main class="main">
        <nav class="nav">
            <div class="nav__wrapper wrapper">
                <ul class="nav__list">
                <li class="nav__item"><a href=""> О клинике</a></li>
                <li class="nav__item"><a href=""> Услуги</a></li>
                <li class="nav__item"><a href=""> Специалисты</a></li>
                <li class="nav__item"><a href=""> Цены</a></li>
                <li class="nav__item"><a href=""> Контакты</a></li>
            </ul>
            </div>
            
        </nav>
        <div class="first-screen">
            <div class="first-screen__wrapper wrapper">
                <div class="first-screen__image-mobile">
                    <img src="./img/image.svg" alt="image">
                </div>
                <div class="first-screen__content">
                <h1 class="first-screen__title">Многопрофильная клиника для детей и взрослых</h1>
                <p class="first-screen__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="first-screen__image">
                <img src="./img/image.svg" alt="image">
            </div>
            </div>
            
        </div>
        <div class="check-ups">
            <!-- 1 -->
            <div class="check-up ">
                <div class="check-up__wrapper wrapper">
                    <div class="check-up__image-wrapper">
                        <img src="./img/chechup-image.svg" alt="Check up" class="check-up__image">
                    </div>
                    
                    <div class="check-up__content">
                        <h2 class="check-up__title">Check-UP</h2>
                        <p class="check-up__subtitle"><?=$checkUps[0]['title'] ?></p>
                        <ul class="check-up__list">
                            <li class="check-up__item">Гормональный скрининг</li>
                            <li class="check-up__item">Тестостерон</li>
                            <li class="check-up__item">Свободный тестостерон</li>
                            <li class="check-up__item">Глобулин, связывающий половые гормоны</li>
                        </ul>

                        <span class="check-up__price">Всего <?=$checkUps[0]['price'] ?>₽</span>
                        <span class="check-up__old-price"><?=$checkUps[0]['oldPrice'] ?>₽</span>

                        <div class="check-up__buttons">
                            <button class="check-up__button">Записаться</button>
                            <button class="check-up__button check-up__button_tran">Подробнее</button>
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
            <!-- 2 -->
            <div class="check-up ">
                <div class="check-up__wrapper wrapper">
                    <div class="check-up__image-wrapper">
                        <img src="./img/chechup-image.svg" alt="Check up" class="check-up__image">
                    </div>
                    
                    <div class="check-up__content">
                        <h2 class="check-up__title">Check-UP</h2>
                        <p class="check-up__subtitle"><?=$checkUps[1]['title'] ?></p>
                        <ul class="check-up__list">
                            <li class="check-up__item">Гормональный скрининг</li>
                            <li class="check-up__item">Тестостерон</li>
                            <li class="check-up__item">Свободный тестостерон</li>
                            <li class="check-up__item">Глобулин, связывающий половые гормоны</li>
                        </ul>

                        <span class="check-up__price">Всего <?=$checkUps[1]['price'] ?>₽</span>
                        <span class="check-up__old-price"><?=$checkUps[1]['oldPrice'] ?>₽</span>

                        <div class="check-up__buttons">
                            <button class="check-up__button">Записаться</button>
                            <button class="check-up__button check-up__button_tran">Подробнее</button>
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
            <!-- 3 -->
            <div class="check-up">
                <div class="check-up__wrapper wrapper">
                    <div class="check-up__image-wrapper">
                        <img src="./img/chechup-image.svg" alt="Check up" class="check-up__image">
                    </div>
                    
                    <div class="check-up__content">
                        <h2 class="check-up__title">Check-UP</h2>
                        <p class="check-up__subtitle"><?=$checkUps[2]['title'] ?></p>
                        <ul class="check-up__list">
                            <li class="check-up__item">Гормональный скрининг</li>
                            <li class="check-up__item">Тестостерон</li>
                            <li class="check-up__item">Свободный тестостерон</li>
                            <li class="check-up__item">Глобулин, связывающий половые гормоны</li>
                        </ul>

                        <span class="check-up__price">Всего <?=$checkUps[2]['price'] ?>₽</span>
                        <span class="check-up__old-price"><?=$checkUps[2]['oldPrice'] ?>₽</span>

                        <div class="check-up__buttons">
                            <button class="check-up__button">Записаться</button>
                            <button class="check-up__button check-up__button_tran">Подробнее</button>
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
            <!-- 4 -->
            <div class="check-up ">
                <div class="check-up__wrapper wrapper">
                    <div class="check-up__image-wrapper">
                        <img src="./img/chechup-image.svg" alt="Check up" class="check-up__image">
                    </div>
                    
                    <div class="check-up__content">
                        <h2 class="check-up__title">Check-UP</h2>
                        <p class="check-up__subtitle"><?=$checkUps[3]['title'] ?></p>
                        <ul class="check-up__list">
                            <li class="check-up__item">Гормональный скрининг</li>
                            <li class="check-up__item">Тестостерон</li>
                            <li class="check-up__item">Свободный тестостерон</li>
                            <li class="check-up__item">Глобулин, связывающий половые гормоны</li>
                        </ul>

                        <span class="check-up__price">Всего <?=$checkUps[3]['price'] ?>₽</span>
                        <span class="check-up__old-price"><?=$checkUps[3]['oldPrice'] ?>₽</span>

                        <div class="check-up__buttons">
                            <button class="check-up__button">Записаться</button>
                            <button class="check-up__button check-up__button_tran">Подробнее</button>
                        </div>
                    </div>
                    
                </div>    
            </div>
            <div class="check-up__arrow-wrapper wrapper">
                <img src="./img/left-arrow.svg" alt="arrow" class="check-up__arrow left-arrow">
                
                <p><span class="sliderId">1</span><span class="check-up__grey-text">/4</span></p>
                <img src="./img/right-arrow.svg" alt="arrow" class="check-up__arrow right-arrow">
            </div>
        </div>
        
    </main>
    <footer class="footer">
        <div class="footer__wrapper wrapper">
            <a href=""><img src="./img/footer-logo.svg" alt="logo" class="footer__logo"></a>
            <ul class="footer__list">
                <li class="footer__item"><a href="">О клинике</a></li>
                <li class="footer__item"><a href="">Услуги</a></li>
                <li class="footer__item"><a href="">Специалисты</a></li>
                <li class="footer__item"><a href="">Цены</a></li>
                <li class="footer__item"><a href="">Контакты</a></li>
            </ul>
            <div class="footer__social">
                <a href=""><img src="./img/instagram.svg" alt="instagram" class="footer__icon"></a>
                <a href=""><img src="./img/whatsapp2.svg" alt="whatsapp" class="footer__icon"></a>
                <a href=""><img src="./img/telegram.svg" alt="telegram" class="footer__icon"></a>
            </div>
        </div>
    </footer>
    <script src="./js/script.js"></script>
</body>
</html>