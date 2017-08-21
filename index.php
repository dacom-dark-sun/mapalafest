
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CryptoFest</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    -->
    <link href="css/style.css?v=2" rel="stylesheet">
</head>

<body>


<header class="header">

    <div class="header-smoke-1"><img src="assets/img/layer-1.png" alt=""></div>
    <div class="header-smoke-2"><img src="assets/img/layer-2.png" alt=""></div>
    <div class="header-smoke-3"><img src="assets/img/layer-3.png" alt=""></div>
    <div class="header-smoke-4"><img src="assets/img/layer-4.png" alt=""></div>

    <div class="header-container">

        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-6 ">
                        <div class="header-hashtags">#MAPALAFEST<br>#CRYPTOFEST</div>
                    </div>
                    <div class="col-auto">
                        <div class="red header-top__place">CRYPTOFEST Ekaterinburg</div>
                        <div class="blue header-top__dates">16, 17 сентября</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-content">
            <div class="container">
                <div class="header-title">
                    <h1>
                  <div class="size-60">ФЕДЕРАЛЬНЫЙ</div>
                  <div class="size-92">КРИПТОФЕСТИВАЛЬ</div>
                </h1>
                    <i class="header-title__year">2017</i>
                </div>
                <div class="header-lead">
                    <p>Совмести обучение Цифровой Экономике <br> с духовным развитием и активным отдыхом</p>
                    <button class="btn btn-red mt-3" data-toggle="modal" data-target="#exampleModal">Участвовать</button>
                </div>
            </div>
        </div>

    </div>

</header>


<section class="sticky-nav">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-auto col-fix">
                <div class="sticky-nav__logo">
                    <h1>CRYPTOFEST</h1>
                    <p>Ekaterinburg</p>
                </div>
            </div>
            <div class="col col-lg-3">
                <div class="sticky-nav__date">
                    <p>Первый федеральный ФЕСТИВАЛЬ КРИПТОВАЛЮТ <br> <span>16, 17</span> СЕНТЯБРЯ</p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <ul class="sticky-nav__menu d-flex">
                    <li><a href="#map" class="smooth-scroll">Карта фестиваля</a></li>
                    <li><a href="#who-welcome">Для кого этот фестиваль</a></li>
                    <li><a href="#section partners">Спонсоры и партнеры</a></li>
                    <li><a href="#address-map">Как добраться</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="map" id="map">
    <div class="container">
        <div class="map-title text-center">
            <h1>Интерактивная карта фестиваля</h1>
            <p>наведите на красную область и узнай что там будет</p>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-auto">
                <div class="map-current row main_scena" style="">
                    <img src="img/4.svg" alt="">
                    <div class="text-center map-current__title">Главная сцена</div>
                    <p>Лекции о цифровой экономике, криптовалютах и будущем, которое уже здесь.</p>

   
                </div>

                <div class="map-current row tanspol" style="">
                    <img src="img/2.svg" alt="">
                    <div class="text-center map-current__title ">Танцпол</div>
                    <p>Качественная этническая и электронная музыка расслабят после получения потока информации</p>

                </div>

                <div class="map-current row children_place" style="">
                    <img src="img/1.svg" alt="">
                    <div class="text-center map-current__title ">Детская площадка</div>
                    <p>Дети проведут время с детьми и под присмотром, пока взрослые учатся или отдыхают.</p>
   
                </div>

                <div class="map-current row market" style="">
                    <img src="img/5.svg" alt="">
                    <div class="text-center map-current__title ">Ярмарка</div>
                    <p class = "market">Ярмарка мастеров еды и искусств</p>
   
                </div>

                <div class="map-current row man_games" style="">
                    <img src="img/3.svg" alt="">
                    <div class="text-center map-current__title ">Мужские игры</div>
                    <p class = "man_games">Соревнования между мужчинами, командные и индивидуальные</p>
                </div>




            </div>
            <div class="col-12 col-lg">
                <div class="map__map" style="">
                    <span class="map__map1-text">детская площадка</span>
                     <img class= "img-in-oval img-in-oval5" src="img/1.svg" alt="">
   

                    <span class="map__map2-text">танцпол</span>
                    <img class= "img-in-oval img-in-oval1" src="img/2.svg" alt="">
                    <span class="oval1"></span>

                    <span class="map__map3-text">мужские игры</span>
                    <img class= "img-in-oval img-in-oval2" src="img/3.svg" alt="">
                    <span class="oval2"></span>


                    <span class="map__map4-text">главная сцена</span>
                    <img class= "img-in-oval img-in-oval3" src="img/4.svg" alt="">
                    <span class="oval3"></span>

                    <span class="map__map5-text">ярмарка</span>
                    <img class= "img-in-oval img-in-oval4" src="img/5.svg" alt="">
                    <span class="oval4"></span>

                    <span class="map__map6-text">вход</span>
                    <img src="img/ilustration5.svg" alt="Карта">
                    <span class="oval5"></span>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="who-welcome" id="who-welcome">
    <div class="container">

        <div class="who-welcome__title text-center">
            <h1>Кого мы ждем?</h1>
        </div>

        <div class="row no-gutters who-welcome-item">
            <div class="col-12 col-xs-12 col-lg-8 guests">
                
                <img class="img_hide" src="img/4.jpg" alt="">
                <div class="who-welcome-item__content">
                      <h4>СТУДЕНТОВ</h4>
                      <h6>Твое будущее - здесь</h6>
                      <p>Ты сможешь найти себя в новом мире, если в старом тебе места нет.</p>
               
                </div>
               
            </div>
        </div>

        <div class="row no-gutters justify-content-end who-welcome-item">
            <div class="col-12 col-xs-12 col-lg-8 guests">
                <div class="row row-reset justify-content-between">

                  <div class="who-welcome-item__content col">
                    <h4>ПРЕДПРИНИМАТЕЙ</h4>
                    <h6>Возможности для бизнеса</h6>
                    <p>Как применить новые технологии в бизнесе и открыть новые рынки в Голубом Океане Цифровой Экономики.</p>
                  </div>

                  <div class="col-auto">
                      <img class="img_hide" src="img/6.jpg" alt="">
                  </div>

                </div>
            </div>
        </div>

        <div class="row no-gutters who-welcome-item">
            <div class="col-12 col-xs-12 col-lg-8 guests">
                <img class= "img_hide" src="img/5.jpg" alt="">
                <div class="who-welcome-item__content">
                    <h4>IT-специалистов</h4>
                    <h6>Твое время пришло</h6>
                    <p>Люди идут в новый Золотой Век, скорость движения - зависит от твоих 10 пальцев и головы. </p>
                </div>
                <div class="guests3">
                </div>
            </div>
        </div>

<div class="row no-gutters justify-content-end who-welcome-item">
            <div class="col-12 col-xs-12 col-lg-8 guests">
                <div class="row row-reset justify-content-between">

                  <div class="who-welcome-item__content col">
                    <h4>Всех, кто в ТРЕНДЕ</h4>
                    <h6>Слышал о криптовалютах?</h6>
                    <p>Ты увидишь реальное применение, соприкоснешься с новыми технологиями и поймешь, зачем это нужно.</p>
                  </div>

                  <div class="col-auto">
                      <img class= "img_hide" src="img/7.jpg" alt="">
                  </div>

                </div>
            </div>
        </div>
    </div>




</section>


<section class="plan">
    <div class="">
    <div class="plan__title text-center">
            <h1 style="color: #292b2c">Стань частью цифрового сообщества</h1>
        </div>
        <div class="row text-center align-items-stretch">
            <div class="plan-standart col-xs-12 col-lg-6">
                <h1>Включено:</h1>
                <ul>
                    <li><span>10 часов лекций от спикеров со всей страны</span></li>
                    <li><span>Горячий танцпол с разносторонней музыкой</span></li>
                    <li><span>100 FestCoins, которые можно потратить на сувениры или еду</span></li>
                    <li><span>Мастер-классы по йоге, альтернативной медицине, педагогике, и многие другие</span></li>
                    <li><span>Веревочный парк, мужские игры и соревнования</span></li>
                    <li><span>Ярмарка мастеров</span></li>
                    <li><span>Место для установки палатки</span></li>
                 </ul>
                <div class="plan__price">1000 RUB</div>

                <button class="btn btn-red mt-3" data-toggle="modal" data-target="#exampleModal">Участвовать</button>
                <div class="timer" style="padding-top: 20px; display: none">
                    <script src="http://megatimer.ru/s/a4588676d206f933ee3a6a8d16e9f9ab.js"></script>  
                    <p> до увеличения цены</p>  
                </div>
            </div>
            <div class="plan-vip col-xs-12 col-lg-6">
                <h1>Не включено, или за доп. плату:</h1>
                <ul>
                    <li><span>-- Питание</span></li>
                    <li><span>-- Место отдыха в VIP-домике</span></li>
                    <li><span>-- Персональные консультации бизнесу</span></li>
                    <li><span>-- Экскурсии по парку</span></li>
                    
                </ul>
            
            </div>
        </div>
            
        </div>
    </div>
</section>
<section class="section partners" id="section partners">
    <div class="container">
        <div class="section-title">Наши партнеры и спонсоры</div>
        <div class="row align-items-center justify-content-center friends">
            <div class="col-auto col-fix partners-item mb-3">
                <img src="img/mapala-logo.png" alt="">
            </div>
            <div class="col-auto col-fix partners-item mb-3">
                <img src="img/dacom-logo.png" alt="">
            </div>
            <div class="col-auto col-fix partners-item mb-3">
                <img src="img/golos-share.png" alt="">
            </div>

        </div>
    </div>
</section>


<section class="address-map" id="address-map">
    <h1 class="section-title">Как добраться</h1>
    <center><h6>Территория Парка Сказов, пос. Арамиль, в атмосфере сказочных декораций и уникального ансамбля русского зодчества.</h6></center><br>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad726a4d12e5192fc6eea0364addf8c29b7a9c98dc6f89182f4f2f75a6f155b69&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
</section>


<footer class="footer">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <div class="col-12 mb-3 col-md-auto col-fix">
                <div class="footer-hashtags">#MAPALAFEST
                    <br>#CRYPTOFEST</div>
            </div>

            <div class="col-12 mb-3 col-md-3">
                <div class="footer__first">Первый федеральный ФЕСТИВАЛЬ КРИПТОВАЛЮТ <span>16, 17</span> СЕНТЯБРЯ</div>
            </div>

            <div class="col-12 mb-3 col-md"></div>

            <div class="col-12 mb-3 col-md-3">
                <div class="footer__powered-by">При поддержке сообщества <a target="_blank" href="https://mapala.net">DACom Mapala</a></div>
            </div>

        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <form class="order-form inputs">
                    <label class="input">
                        <div class="input-title">Имя участника (nickname)</div>
                        <input type="text" placeholder="Только латинские буквы">
                    </label>
                    <label class="input">
                        <div class="input-title">Введите свой пароль</div>
                        <input type="password" placeholder="Пароль">
                    </label>

                    <label class="input">
                        <div class="input-title">Введите свой Email</div>
                        <input type="email" placeholder="Email">
                    </label>
                    <div class="input">
                        <div class="input-title">Количество</div>
                             <input class="kolvo" type="number" min="1" value="1" style="max-width: 50px">
                    </div>
                    <div class="input">
                        <div class="input-title">Стоимость</div>
                        <span class="cost">1000</span>₽
                    </div>
                    <div class="input payment-methods radio-btns">
                        <div class="input-title">Выберите способ оплаты</div>
                        <div class="payment-methods__methods">
                            <label class="payment-methods__item payment-methods__card radio-btn">
                                <input type="radio" name="payment-methods" value="VISA/MasterCard" id="paymentCardRadio" checked>
                                <span class="radio-btn__btn"></span>
                            </label>
                            <label class="payment-methods__item payment-methods__bitcoin radio-btn">
                                <input type="radio" name="payment-methods" value="Bitcoin" id="paymentBitcoinRadio">
                                <span class="radio-btn__btn"></span>
                            </label>
                        </div>
                    </div>
                    <div class="pt-3" id="paymentCard" class="order-form-footer">
                        <input type="submit" class="btn btn-red" value="Оплатить">
                    </div>
                </form>
                <div class="pt-3" id="paymentBitcoin" style="display: none;" class="order-form-footer payment-bitcoin">
                    <div class="payment-bitcoin__title">Oтправьте BTC на персональный адрес:</div>
                    <button class="payment-bitcoin__copy-btn copyBitcoinNum" onclick="copy('#bitcoinNum')"></button>
                    <div class="payment-bitcoin__number bitcoinNum" id="bitcoinNum">1BoatSLRHtKNngkdXEeobR76b53LETtpyT</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js?v=2"></script>
</body>
</html>


<script>
$(".oval5").hover(function(){
    $(".map-current").hide();
    $(".children_place").show();
})

$(".oval1").hover(function(){
    $(".map-current").hide();
    $(".tanspol").show();
})

$(".oval2").hover(function(){
    $(".map-current").hide();
    $(".man_games").show();
})


$(".oval3").hover(function(){
    $(".map-current").hide();
    $(".main_scena").show();
})

$(".oval4").hover(function(){
    $(".map-current").hide();
    $(".market").show();
})


$('a.smooth-scroll').on('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top + 20
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
});


$("input[type='number']").bind("input", function() {
    var kolvo = $(".kolvo").val();
    $(".cost").text(kolvo * 1000);
});



</script>


