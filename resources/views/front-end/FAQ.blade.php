@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="FAQ">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="300">
                <h2>База знаний (FAQ)</h2><a href="{{ route('frontIndex') }}">Главная страница</a><span>FAQ</span>
            </div>
            <div data-aos="fade-left" data-aos-delay="400">
                <button type="button" class="ask_ques">Задать вопрос</button>
            </div>
        </div>
    </div>
    <div class="medium_container">
        <div class="main_container block flex_row">
            <div class="left_block">
                <div class="search flex_row_beet_cen">
                    <input type="search" placeholder="Поиск по база знаний">
                    <div class="category">
                        <select class="chosenSelect">
                            <option disabled="disabled" selected="selected" hidden>Категория</option>
                            <option class="opt">Начало работы на сайте</option>
                            <option class="opt">Регистрация и авторизация</option>
                            <option class="opt">Что делать после регистрации</option>
                            <option class="opt">Безопасная сделка</option>
                            <option class="opt">Начало работы на сайте</option>
                            <option class="opt">Регистрация и авторизация</option>
                            <option class="opt">Что делать после регистрации</option>
                            <option class="opt">Безопасная сделка</option>
                        </select>
                    </div>
                    <button type="button">ОК</button>
                </div>
                <div class="importan_qs flex_col_start">
                    <h4>Важные вопросы<span>147</span></h4><a href="#">Пошаговая инструксия новичкам</a>  <a href="#">Описание системы рейтинга</a>  <a href="#">Если вы столкнулись с мошенничеством</a>  <a href="#">Закладка портфолио</a>  <a href="#">Пошаговая инструксия новичкам-работадателям</a>
                    <a
                            href="#">Как ответить на опубликовинный проект</a> <a href="#">Закладка информация</a>  <a href="#">Личная страница</a>  <a href="#">Пошаговая инструксия новичкам-работадателям</a>  <a href="#">Описание системы рейтинга</a>
                </div>
                <div class="flex_row_cen adv_banner_block">
                    <div class="adv_banner ph">
                        <img src="{{ asset('front-end/media/img/reklama1.png') }}" alt="">
                    </div>
                    <div class="adv_banner ph">
                        <img src="{{ asset('front-end/media/img/reklama2.png') }}" alt="">
                    </div>
                </div>
                <div class="last_qs flex_col_start">
                    <h4>Новые вопросы<span>147</span></h4>
                    <a href="{{ route('frontFaqPost') }}">Пошаговая инструксия новичкам</a>
                    <a href="{{ route('frontFaqPost') }}">Описание системы рейтинга</a>
                    <a href="{{ route('frontFaqPost') }}">Если вы столкнулись с мошенничеством</a>
                    <a href="{{ route('frontFaqPost') }}">Закладка портфолио</a>
                    <a href="{{ route('frontFaqPost') }}">Пошаговая инструксия новичкам-работадателям</a>
                    <a href="{{ route('frontFaqPost') }}">Как ответить на опубликовинный проект</a>
                    <a href="{{ route('frontFaqPost') }}">Закладка информация</a>
                    <a href="{{ route('frontFaqPost') }}">Личная страница</a>
                    <a href="{{ route('frontFaqPost') }}">Пошаговая инструксия новичкам-работадателям</a>
                    <a href="{{ route('frontFaqPost') }}">Описание системы рейтинга</a>
                </div>
                <div class="static">
                    <h4>Статистика</h4>
                    <div class="items flex_row_beet_cen">
                        <div class="item flex_col_cen_cen">
                            <div class="circle flex_col_cen_cen"><span class="counter" style="opacity:0">290</span>
                            </div><span>Всего вопросов</span>
                        </div>
                        <div class="item flex_col_cen_cen">
                            <div class="circle flex_col_cen_cen"><span class="counter" style="opacity:0">500</span>
                            </div><span>Всего вопросов</span>
                        </div>
                        <div class="item flex_col_cen_cen">
                            <div class="circle flex_col_cen_cen"><span class="counter" style="opacity:0">430</span>
                            </div><span>Всего вопросов</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_block">
                <h5 data-aos="fade-up" data-aos-delay="300">Категории</h5>
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Начало работы на сайте <span>4</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Регистрация и авторизация <span>23</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Воостановление доступа<span>5</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Что делать после регистрации<span>3</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Общие вопроси по сайту<span>6</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Сотрудничество на сайте<span>3</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Безопасная сделка<span>7</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Общие вопроси <span>8</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Процесс сотрудничества <span>5</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Страница финансы <span>2</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Безопасная сделка <span>7</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Общие вопроси <span>8</span></a>
                    <a href="{{ route('frontFAQ') }}" class="flex_row_beet_cen">Процесс сотрудничества <span>5</span></a>
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('front-end/media/img/reklama1.png') }}" alt="">
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('front-end/media/img/reklama2.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection