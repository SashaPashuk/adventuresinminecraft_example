<?php

require_once("vendor/cards_Output.php");
require ("vendor/Monitoring.php");
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>ВАШ ПРОЕКТ</title>
    <!--STYLES-->
    <link href="styles/nav.css" rel="stylesheet" type="text/css" />
    <link href="styles/banner.css" rel="stylesheet" type="text/css" />
    <link href="styles/media.css" rel="stylesheet" type="text/css" />
    <link href="styles/content.css" rel="stylesheet" type="text/css" />
    <link href="styles/footer.css" rel="stylesheet" type="text/css" />
    <link href="styles/notify.css" rel="stylesheet" type="text/css" />
    <!--ico-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PDCSKR5');</script>
<!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDCSKR5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!--NOTIFY-->
    <div id="success">

    </div>
    <div id="error">
        Ошибка! <p id="errorText"></p>
    </div>
    <!--NAV-->
    <header>
        <ul class="nav">
            <ul id="minNav">
                <li><a href="#" class="logo">ВАШ ПРОЕКТ</a></li>
                <li><a href="#" id="navBtn" onclick="return false"><i class="fas fa-bars"></i></a></li>
            </ul>
            <ul id="innerNav">
                <li class="navElem"><a href="#"><i class="far fa-file-alt"></i> Правила</a></li>
                <li class="navElem"><a href="#"><i class="fas fa-play"></i> Как начать играть?</a></li>
                <li class="navElem"><a href="#"><i class="fab fa-vk"></i> Мы ВКонтакте</a></li>
            </ul>
        </ul>
    </header>
    <!--BANNER-->
    <div id="banner">
        <div id="bannerText">
            <h1>Начни гриферить с ВАШ ПРОЕКТ уже сейчас!</h1>
            <div id="bannerSub">
                <h2>уникальный гриф</h2>
                <h2>выживние без правил</h2>
            </div>
        </div>
        <div id="etc">
            <h1>Онлайн</h1>
            <p><i class="fad fa-user-friends"></i> <?php echo $online ?> игроков</p>
            <div id="ip">
                <p id="ipText"><?php echo $ip?></p>
                <div id="animBtn"><button id="copyBtn"><i class="far fa-copy"></i></button>
                    <div id="underBtn"></div>
                </div>
            </div>
        </div>
    </div>
    <!--CONTENT-->
    <content>
        <p id="contentHeading">Донат услуги:</p>
        <?php
          foreach ($cards_Foreach as $cards){
            $i++;
            echo '          
            <div id="cards">
              <div class="card" id="c'.$i.'">
                  <p>'.$cards["1"].'</p>
                  <img class="cardImg" src="'.$cards["3"].'" alt="'.$cards["1"].'">
                  <p>'.$cards["2"].' руб.</p>
              </div>
              <div class="cardActive" id="c'.$i.'a">
                  <p>'.$cards["1"].'</p>
                  <img class="cardImg" src="'.$cards["3"].'" alt="'.$cards["1"].'">
                  <span>Введите ник:</span>
                  <form action="vendor/Payment_create.php" method="POST">
                      <input required name= "nickname" type="text" placeholder="Ваш ник">
                      <input type="hidden" name="item_name" value="'.$cards["1"].'">
                      <p>Цена: '.$cards["2"].' руб.</p>
                      <button class="buyBtn"><i class="fas fa-shopping-cart"></i> Купить</button>
                  </form>
              </div>
            </div>
          ';
          }

          ?>

    </content>

    <content>
        <p id="contentHeading">Последние пять покупок:</p>
        <?php
          foreach ($orders_Foreach as $orders){
            $x++;
            echo '          
            <div id="cards">
              <div class="card">
                  <p>'.$orders["1"].'</p>
                  <img class="cardImg" src="https://mc-heads.net/avatar/'.$orders["1"].'" alt="'.$orders["1"].'">
                  <p>'.$orders["2"].'</p>
              </div>
            </div>
          ';
          }

          ?>

    </content>
    <!--FOOTER-->
    <div id="footer">
        <div id="copyryte">
            <p>© <?php echo date('Y')?> ВАШ ПРОЕКТ все права защищены. </p>
            <p>ВАШ ПРОЕКТ не связан с MojangAB, все средства идут на развитие проекта.</p>
        </div>
        <ul id="footerNav">
            <li class="footerElem"><a href="#"><i class="far fa-file-alt"></i> Правила</a></li>
            <li class="footerElem"><a href="#"><i class="fas fa-play"></i> Как начать играть?</a></li>
            <li class="footerElem"><a href="#"><i class="fab fa-vk"></i> Мы ВКонтакте</a></li>
            <li class="footerElem"><a href="#"><i class="fas fa-file"></i> Пользовательское соглашение</a></li>
            <li class="footerElem"><a href="#"><i class="far fa-file"></i> Политика конфиденциальности</a></li>
        </ul>
    </div>
    <!--darkness-->
    <div id="darkness"></div>
    <!--SCRIPT-->
    <script src="js/main.js"></script>
    <script src="js/media.js"></script>
    <script src="js/ipCopy.js"></script>
    <script src="js/cards.js"></script>
    <?php
    if(isset($_SESSION['error'])){
        echo "<script>error('".$_SESSION['error']."', 2000)</script>";
        unset($_SESSION['error']);
    }
    if(strpos($_SERVER['REQUEST_URI'], 'success') == true){
        echo "<script>success('Спасибо за покупку!', 2000)</script>";
    }
    ?>
</body>

</html>