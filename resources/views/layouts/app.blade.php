<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('gerb.png') }} "/>
    <link rel="stylesheet" href="{{ asset('front-end/styles/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/preloaderNews.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/styles/main.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="{{ asset('front-end/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('js/responsivevoice.js') }}"></script>
    <script src="{{ asset('js/readMoreNews.js') }}"></script>
    <script src="{{ asset('js/like_bos.js') }}"></script>
    <script src="{{ asset('js/voice.js') }}"></script>
    @php
        $lang = App::getLocale();

        if ($lang == 'uz'){
            $week = ['Yakshanba', 'Dushanba', 'Seshanba', 'Chorshanba', 'Payshanba', 'Juma', 'Shanba'];
            $years = ['Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'Iyun', 'Iyul', 'Avgust', 'Sentabr', 'Oktabr', 'Noyabr', 'Dekabr'];
        }elseif ($lang == 'ru'){
            $week = [ 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
            $years = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
        }elseif($lang == 'en'){
            $week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            $years = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        }elseif($lang == 'cyrl'){
            $week = ['Якшанба', 'Душанба', 'Сешанба', 'Чоршанба', 'Пайшанба', 'Жума', 'Шанба'];
            $years = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
        }
    @endphp
    {{--<script src='https://code.responsivevoice.org/responsivevoice.js'></script>--}}
    <script>
        $(function () {
            $('#pogoda').on('click', function () {
                // $.ajax({
                //     dataType: 'JSON',
                //     url: 'https://samples.openweathermap.org/data/2.5/weather?q=Tashkent,uz&appid=efebd9ab9418d10f3087ac3270c19dfc',
                //     success: function (data) {
                //         document.write("JSON uploaded");
                //     }
                // });
                $.getJSON("https://samples.openweathermap.org/data/2.5/weather?q=Tashkent,uz&appid=efebd9ab9418d10f3087ac3270c19dfc",function(json){
                    document.write(json);
                });
            });
        });
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('dynamicClock').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>
    <style>
        #getText{
            background-color: #2b6bd3;
            color: #fff;
            position: fixed;
            margin-left: 85%;
            top: 85%;
            z-index: 10;
        }
    </style>
</head>

<body onload="startTime()">
<div class="right_G gadget flex_col_cen">
    <div class="item1 flex_row">
        <a href="#">
            <img src="{{ asset('front-end/media/img/svg/right_G_1.svg') }}" alt="">
        </a>
        <div class="item1_info flex_row_cen_cen">+998 (71) 123-45-67</div>
    </div>
    <div class="item2 flex_row">
        <a href="#">
            <img src="{{ asset('front-end/media/img/svg/right_G_2.svg') }}" alt="">
        </a>
        <div class="item2_info flex_col__start"><span>Отправте своё писмо на наше электронную почту.</span>  <a href="#">UzStandart@gmail.com</a>
            <div class="toFix">
                <input type="text" placeholder="Закрепите док файл">
                <button>Закрепить</button>
            </div>
            <button class="send">Отправить</button>
        </div>
    </div>
    <div class="item3 flex_row">
        <a href="#">
            <img src="{{ asset('front-end/media/img/svg/right_G_3.svg') }}" alt="">
        </a>
        <div class="item3_info flex_col__start"><span>Оставте своё сообшение</span>
            <textarea name="" cols="30" rows="10"></textarea>
            <button class="send">Оставить</button>
        </div>
    </div>
    <div class="item4 flex_row">
        <a href="#">
            <img src="{{ asset('front-end/media/img/svg/right_G_4.svg') }}" alt="">
        </a>
        <div class="item4_info flex_row_cen_cen">Форум</div>
    </div>
</div>
<div class="left_G gadget" id = "getIt">
    <div class="scroll">
        <div class="wrap wrap_0 flex_row">
            <div class="nav_link">
                <img src="{{ asset('front-end/media/img/svg/left_G_1.svg') }}" alt="">
            </div>
            <div class="nav_content"></div>
        </div>
        <div class="wrap wrap_1 flex_row">
            <div class="nav_link">
                <img src="{{ asset('front-end/media/img/svg/left_G_2.svg') }}" alt="">
            </div>
            <div class="nav_content">
                <div class="item">
                    <input type="text" placeholder="Поиск по сайту">
                    <div>
                        <img src="{{ asset('front-end/media/img/svg/search.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap wrap_2 flex_row">
            <div class="nav_link">
                <img src="{{ asset('front-end/media/img/svg/left_G_3.svg') }}" alt="">
            </div>
            <div class="nav_content">
                <div class="item">
                    <button class="sign_btn">Подписатся на пуш уведомления</button>
                    <input type="text" placeholder="E-mail">
                    <button class="send_btn">Отправить</button>
                </div>
            </div>
        </div>
        <div class="wrap wrap_3 flex_row">
            <div class="nav_link">
                <img src="{{ asset('front-end/media/img/svg/left_G_4.svg') }}" id="pogoda" alt=""><span>36</span>
            </div>
            <div class="nav_content">
                <div class="item">
                    <div class="row1 flex_row_beet_cen">
                        <div class="flex_row_beet_cen" style="width:60%"><span>Утром</span>
                            <div class="temp"><span>+8 &deg; C</span>  <span><img src="{{ asset('front-end/media/img/svg/left_G_4.svg') }}" alt=""></span>
                            </div>
                        </div>
                        <div style="width:40%"><span>Давление: 1034гПа</span>
                        </div>
                    </div>
                    <div class="row1 flex_row_beet_cen" >
                        <div class="flex_row_beet_cen" style="width:60%"><span>Днем</span>
                            <div class="temp"><span>+22 &deg; C</span>  <span><img src="{{ asset('front-end/media/img/svg/left_G_4.svg') }}" alt=""></span>
                            </div>
                        </div>
                        <div style="width:40%"><span>Влажность: 85%</span>
                        </div>
                    </div>
                    <div class="row1 flex_row_beet_cen">
                        <div class="flex_row_beet_cen" style="width:60%"><span>Вечером</span>
                            <div class="temp"><span>+16 &deg; C</span>  <span><img src="{{ asset('front-end/media/img/svg/left_G_4.svg') }}" alt=""></span>
                            </div>
                        </div>
                        <div style="width:40%"><span>Ветер: 10км/час</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap wrap_4 currency flex_row">
            <div class="nav_link">USD <span>8136.43</span>
            </div>
            <div class="nav_content">
                <div class="item flex_row_beet_cen">
                    <img src="{{ asset('front-end/media/img/chart_line_small.png') }}" alt="" style="min-width:60%; max-height: 40px">
                    <div style="min-width:40%" class="flex_row_beet_cen"><span>RUB<br>142.37</span>  <span>GBP<br>10996.71</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap wrap_5 currency flex_row">
            <div class="nav_link">EUR <span>8136.43</span>
            </div>
            <div class="nav_content">
                <div class="item flex_row_beet_cen">
                    <img src="{{ asset('front-end/media/img/chart_line_small.png') }}" alt="" style="min-width:60%; max-height: 40px">
                    <div style="min-width:40%" class="flex_row_beet_cen"><span>CNY<br>1250.54</span>  <span>JPY<br>72.23</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap wrap_6 flex_row">
            <div class="nav_link">
                <img src="{{ asset('front-end/media/img/svg/left_G_8.svg') }}" alt="">
            </div>
            <div class="nav_content">
                <div class="item flex_row_beet_cen">
                    <div class="flex_row_beet_cen" style="width:60%;padding-right:10px"><span>CE</span>  <span>C</span>  <span><img src="{{ asset('front-end/media/img/svg/backspace-arrow.svg') }}" alt=""></span><span class="plus">+</span>
                    </div>
                    <input type="text" placeholder="0" style="width:40%">
                </div>
            </div>
        </div>
        <div class="wrap wrap_7 flex_row">
            <div class="nav_link">
                <img src="{{ asset('front-end/media/img/svg/worlwide.svg') }}" alt="">
            </div>
            <div class="nav_content">
                <div class="item">
                    <img src="{{ asset('front-end/media/img/svg/soc_g.svg') }}" alt="">
                    <img src="{{ asset('front-end/media/img/svg/soc_fbook.svg') }}" alt="">
                    <img src="{{ asset('front-end/media/img/svg/soc_inst.svg') }}" alt="">
                    <img src="{{ asset('front-end/media/img/svg/soc_twit.svg') }}" alt="">
                    <img src="{{ asset('front-end/media/img/svg/soc_in.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="min_menu">
        <div class="medium_container flex_row_beet_cen">
            <div class="res_icon flex_row">
                <a href="#">
                    <img src="{{ asset('front-end/media/img/svg/house-outline.svg') }}" alt="" style="height:22px">
                </a>
                <a href="#">
                    <img src="{{ asset('front-end/media/img/svg/smartphone-call.svg') }}" alt="" style="height:21px">
                </a>
                <a href="#">
                    <img src="{{ asset('front-end/media/img/svg/chat.svg') }}" alt="" style="height:22px">
                </a>
                <a href="#">
                    <img src="{{ asset('front-end/media/img/svg/flag.svg') }}" alt="" style="height:22px">
                </a>
            </div>
            <div class="menu">
                <ul class="flex_row_cen">
                    <li class="active"><a href="{{ route('frontIndex') }}">главная</a>
                    </li>
                    <li><a href="#" class="mob">мобилная версия</a>
                    </li>
                    <li><a href="#">форум</a>
                    </li>
                    <li><a href="#">государственные символы</a>
                    </li>
                </ul>
            </div>
            <div class="date_time flex_row_cen">
                <span>
                    {{ date('d') .' '. $years[date('n')-1] .' '. date('Y') .' '. $week[date('w')]}}
                </span>
                <span class="line"></span>
                <span>
                    {{ __('pages.dynamicClock') }}
                    <span id="dynamicClock"></span>
                </span>
            </div>
            <div class="language">
                <div class="languagE">
                    <a href="{{route('locale', ['locale' => 'uz'])}}" class="{{ ($lang == 'uz')?'act': ''}}">UZB</a>
                    <a href="{{route('locale', ['locale' => 'cyrl'])}}" class="{{ ($lang == 'cyrl')?'act': ''}}">ЎЗБ</a>
                    <a href="{{route('locale', ['locale' => 'ru'])}}" class="{{ ($lang == 'ru')?'act': ''}}">РУС</a>
                    <a href="{{route('locale', ['locale' => 'en'])}}" class="{{ ($lang == 'en')?'act': ''}}">ENG</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <img src="{{ asset('front-end/media/img/flag.png') }}" alt="" class="flag">
        <div class="medium_container flex_row_beet_cen">
            <div class="logo flex_row_cen">
                <a href="{{ route('frontIndex') }}" class="flex_row_cen">
                    <img src="{{ asset('front-end/media/img/gerb.png') }}" alt="">
                    <div class="tt flex_col">
                        <h2>{!! __('pages.logoName')  !!}</h2><span>{!! __('pages.logoSubName') !!}</span>
                    </div>
                </a>
            </div>
            <div class="phone flex_col">
                <div class="fl1">Телефон доверия</div>
                <div class="fl2"><a href="#">(998 71)<span>150-23-00</span></a>
                </div>
                <div class="fl3"><a href="#">Открыть телефонную книгу</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <div class="medium_container">
            <ul class="flex_row__cen mainMenu">
                <li>
                    <a href="{{ route('frontIndex') }}" class="nav-item">Главная</a>
                </li>
                <li class="dropdown_parent">
                    <a href="{{ route('frontAboutUs') }}" class="nav-item">О нас</a>
                    <ul class="dropdown">
                        <div class="flex_col">
                            <h6>Деятельность</h6>
                            <div class="items flex_row">
                                <div class="item flex_col">
                                    <a href="{{ route('frontAboutUs') }}"><span></span>Общая информация</a>
                                    <a href="{{ route('frontAdmStructure') }}"><span></span>Вышестоящий орган</a>
                                    <a href="{{ route('frontLeadership') }}"><span></span>Руководство</a>
                                    <a href="{{ route('frontCenterApparat') }}"><span></span>Центральный аппарат</a>
                                    <a href="{{ route('frontAdminsitration') }}"><span></span>Территориальные управления</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown_parent">
                    <a href="#" class="nav-item">Деятельность</a>
                    <ul class="dropdown">
                        <div class="flex_col">
                            <h6>Деятельность</h6>
                            <div class="items flex_row">
                                <div class="item flex_col">
                                    <a href="#" style="color: red"><span></span>Техническое регулирование</a>
                                    <a href="#" style="color: red"><span></span>Семинары руководства агентства «Узстандарт»</a>
                                    <a href="#" style="color: red"><span></span>Cтандартизация</a>
                                    <a href="{{ route('frontMetrology') }}"><span></span>Метрология</a>
                                    <a href="#" style="color: red"><span></span>Сертификация</a>
                                    <a href="#" style="color: red"><span></span>Система менеджмента</a>
                                    <a href="#" style="color: red"><span></span>Переподготовка кадров</a>
                                </div>
                                <div class="item flex_col">
                                    <a href="#" style="color: red"><span></span>Бюро по экспорту Качество</a>
                                    <a href="#" style="color: red"><span></span>Государственный контроль</a>
                                    <a href="#" style="color: red"><span></span>Штриховое кодирование</a>
                                    <a href="#" style="color: red"><span></span>Положение о профилактической работе по критериям оценки</a>
                                    <a href="#" style="color: red"><span></span>Научная работа</a>
                                    <a href="#" style="color: red"><span></span>Межведомственное взаимодействие</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown_parent"><a href="#" class="nav-item">Документы</a>
                    <ul class="dropdown">
                        <div class="flex_col">
                            <h6>Документы</h6>
                            <div class="items flex_row">
                                <div class="item flex_col">
                                    <a href="{{ route('frontLaws') }}"><span></span>Законы Республики Узбекистан</a>
                                    <a href="{{ route('frontLaws') }}"><span></span>Указы и постановления Президента Республики Узбекистан</a>
                                    <a href="{{ route('frontLaws') }}"><span></span>Постановления и распоряжения Кабинета Министров</a>
                                    <a href="{{ route('frontLaws') }}"><span></span>Другие нормативно-правовые акты</a>
                                </div>
                                <div class="item flex_col">
                                    <a href="{{ route('frontLaws') }}"><span></span>Документы, утратившие силу</a>
                                    <a href="{{ route('frontLaws') }}"><span></span>Нормативные документы Агентства</a>
                                    <a href="{{ route('frontLaws') }}"><span></span>Проекты нормативно-правовых актов</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown_parent">
                    <a href="{{ route('frontPressService') }}" class="nav-item">Служба новостей</a>
                    <ul class="dropdown">
                        <div class="flex_col">
                            <h6>Пресс новостей</h6>
                            <div class="items flex_row">
                                <div class="item flex_col">
                                    <a href="{{ route('frontPressService') }}"><span></span>Пресс-релиз</a>
                                    <a href="{{ route('frontNews') }}"><span></span>Новости</a>
                                    <a href="{{ route('frontGallery') }}"><span></span>Фото галерея</a>
                                    <a href="{{ route('frontVideoBlog') }}"><span></span>Видео галерея</a>
                                    <a href="{{ route('frontTender') }}"><span></span>Анонсы и тендеры</a>
                                    <a href="{{ route('frontFAQ') }}"><span></span>Часто задаваемые вопросы</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown_parent">
                    <a href="#" class="nav-item">Услуги</a>
                    <ul class="dropdown">
                        <div class="flex_col">
                            <h6>Э-Правительство</h6>
                            <div class="items flex_row">
                                <div class="item flex_col">
                                    <a href="#" style="color: red"><span></span>Обращения граждан</a>
                                    <a href="{{ route('frontVacancy') }}"><span></span>Вакансии</a>
                                    <a href="#" style="color: red"><span></span>Вопрос - ответ</a>
                                    <a href="#" style="color: red"><span></span>Интерактивные услуги</a>
                                    <a href="#" style="color: red"><span></span>Прейскуранты</a>
                                    <a href="#" style="color: red"><span></span>Государственные услуги</a>
                                </div>
                                <div class="item flex_col">
                                    <a href="#" style="color: red"><span></span>В помощь экспортеру</a>
                                    <a href="#" style="color: red"><span></span>В помощь потребителю</a>
                                    <a href="#" style="color: red"><span></span>В помощь предпринимателю</a>
                                    <a href="{{ route('frontOpeningData') }}"><span></span>Открытые данные</a>
                                    <a href="#" style="color: red"><span></span>Порядок исполнения запросов</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown_parent"><a href="#" class="nav-item">Э-Правительство</a>
                    <ul class="dropdown">
                        <div class="flex_col">
                            <h6>Э-Правительство</h6>
                            <div class="items flex_row">
                                <div class="item flex_col">
                                    <a href="#" style="color: red"><span></span>Электронное правительство</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown_parent">
                    <a href="#" class="nav-item">Контакты</a>
                    <ul class="dropdown">
                        <div class="flex_col">
                            <h6>Контакты</h6>
                            <div class="items flex_row">
                                <div class="item flex_col">
                                    <a href="{{ route('frontWorkDays') }}"><span></span>График проведения приема граждан</a>
                                    <a href="#" style="color: red"><span></span>Телефоны доверия</a>
                                    <a href="#" style="color: red"><span></span>Обращение к генеральному директору</a>
                                    <a href="{{ route('frontFeedback') }}"><span></span>Контакты</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
            </ul>
            <div class="menubar">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M491.318,235.318H20.682C9.26,235.318,0,244.577,0,256s9.26,20.682,20.682,20.682h470.636

                                c11.423,0,20.682-9.259,20.682-20.682C512,244.578,502.741,235.318,491.318,235.318z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M491.318,78.439H20.682C9.26,78.439,0,87.699,0,99.121c0,11.422,9.26,20.682,20.682,20.682h470.636

									c11.423,0,20.682-9.26,20.682-20.682C512,87.699,502.741,78.439,491.318,78.439z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M491.318,392.197H20.682C9.26,392.197,0,401.456,0,412.879s9.26,20.682,20.682,20.682h470.636

									c11.423,0,20.682-9.259,20.682-20.682S502.741,392.197,491.318,392.197z" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</header>
<div class="overlayWidgets"></div>
    @yield('content')
<div id="footerLenta">
    <div class="overlay"></div>
    <div class="medium_container flex_row_beet_cen lenta">
        <div class="box1">
            <div class="logo flex_row_cen">
                <img src="{{ asset('front-end/media/img/gerb.png') }}" alt="">
                <div class="tt flex_col">
                    <h2>Агентство &laquo;узстандарт&raquo;</h2><span>Узбекское агентство стандартизации,<br>метрологии и сертификации</span>
                </div>
            </div>
        </div>
        <div class="box2 flex_col"><span>Онлай ......................... 11</span>  <span>Хосты сегодня ...... 166</span>  <span>Хосты всего ............. 44823</span>
        </div>
    </div>
</div>
<footer class="flex_col">
    <div class="footer_t">
        <div class="medium_container flex_row items">
            <div class="item col1 flex_col">
                <div class="adress flex_col">
                    <div class="title">Контакты</div><span>100049, Ташкент</span>  <span>Метро: станция Беруни</span>  <span>Автобусы: № 14,10,88,131</span>  <span>"Standart" бекати</span>  <span>Фараби, 333 &laquo;А&raquo;</span>  <span>E-mail: uzst@standart.uz</span>
                </div>
                <div class="socialIcons flex_row__cen">
                    <span><img src="{{ asset('front-end/media/img/svg/twitter.svg') }}" alt=""> </span>
                    <span><img src="{{ asset('front-end/media/img/svg/facebook.svg') }}" alt=""> </span>
                    <span><img src="{{ asset('front-end/media/img/svg/telegram.svg') }}" alt=""> </span>
                    <span><img src="{{ asset('front-end/media/img/svg/youtube.svg') }}" alt=""> </span>
                </div>
                <div class="text">
                    <p>При полном или частичном использовании и цитировании материалов, опубликованных на данном сайте, ссылка на официальный сайт агентства "Узстандарт" обязательна</p>
                </div>
            </div>
            <div class="item col2 flex_col">
                <div class="title">Весь сайт</div>
                <a href="#">Общая информация</a>
                <a href="#">Организационная структура</a>
                <a href="#">Руководство</a>
                <a href="#">Территорыальные управления</a>
                <a href="#">Подведомственные предприятия</a>
                <a href="#">Вышестоящий орган</a>
                <a href="#">Центральный аппарат</a> <a href="#">Совет</a>
            </div>
            <div class="item col2 padd_T flex_col">
                <a href="#">Законы Республики Узбекистан</a>
                <a href="#">Указы и постановления Президента</a>
                <a href="#">Постановления Кабинета Министров</a>
                <a href="#">Другие нормативно-правовые акты</a>
                <a href="#">Документы утратившие силу</a>
            </div>
            <div class="item col2 padd_T flex_col">
                <a href="#">Техническое регулирование</a>
                <a href="#">Стандартизация</a>
                <a href="#">Сертификация</a>
                <a href="#">Качество</a>
                <a href="#">Штриховое кодирование</a>
                <a href="#">Государственный надзор</a>
                <a href="#">Научные работы</a>
            </div>
        </div>
    </div>
    <div class="footer_b">
        <div class="medium_container flex_row_beet_cen"><span>2011-{{ date('Y') }} Агентсво "Узстандарт"</span>
            <div class="flex_row_cen_cen footer_icon">
                <a href="#">
                    <img src="{{ asset('front-end/media/img/f_logo1.png') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('front-end/media/img/f_logo2.png') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('front-end/media/img/f_logo3.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('front-end/scripts/bootstrap.min.js') }}"></script>
<script src="{{ asset('front-end/scripts/vendor.min.js') }}"></script>
<script src="{{ asset('front-end/scripts/main.js') }}"></script>
<script>
    $(window).on("load",function(){AOS.init({duration:700,once:!0})})
</script>
<script>
    $(window).on("load",function(){$(window).width()<767&&$(".chosen-select").chosen({disable_search_threshold:10})})
</script>
</body>
</html>