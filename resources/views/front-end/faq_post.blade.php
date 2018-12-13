@extends('layouts.app')
@section('title', 'FAQ_POST')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="FAQ" class="F_POST">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="300">
                <h2>База знаний (FAQ)</h2><a href="#">Главная страница</a><span>FAQ</span>
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
                <div class="answ_ques flex_col">
                    <div class="ques">
                        <h6>Вопрос: Как мне связатся с директором Узстандарт?</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod ad fugit alias expedita. Pariatur repellat odit esse quaerat dolor repudiandae earum nisi maiores ab iure qui rem quis eveniet provident impedit, eius saepe unde
                            alias nostrum. Libero deleniti, nihil tenetur consequuntur, ratione error animi quidem, reprehenderit sunt dolore necessitatibus debitis iure qui. Sequi delectus, qui ad fugiat quia. Provident, animi.</p>
                    </div>
                    <div class="answ">
                        <h6>Ответ:</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint vel nihil libero facilis impedit quasi perspiciatis odio deleniti. Magnam placeat voluptatem quia! Error accusamus quia vitae. Possimus sit deleniti doloribus animi
                            soluta eveniet, nobis ducimus at, quam harum excepturi corporis, optio consectetur quaerat repudiandae, obcaecati culpa reiciendis quas! Praesentium corporis quibusdam magni provident asperiores commodi minus deleniti consequuntur
                            ad architecto voluptatem nisi officiis repellat sequi ipsam nesciunt recusandae ut, reiciendis, dolores rem ratione cupiditate sapiente perspiciatis neque? Ducimus, cumque modi.
                            <br>
                            <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, sapiente possimus, amet beatae itaque dolore non et vero ex. Eligendi, enim, explicabo! Iure amet, suscipit quo assumenda officia placeat eos officiis quam
                            neque earum aperiam, consequatur reprehenderit vitae facere! Totam alias ipsa maiores exercitationem doloribus ipsum possimus dolorum, voluptatem praesentium perspiciatis libero aperiam obcaecati ducimus explicabo quis.
                            Assumenda, repellendus, ipsa!
                            <br>
                            <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ab earum molestiae, nulla odio nesciunt itaque, sequi in dolore voluptas numquam natus optio reprehenderit quo ipsum aspernatur accusantium placeat porro.</p>
                    </div>
                </div>
                <div class="flex_row_cen adv_banner_block">
                    <div class="adv_banner ph">
                        <img src="media/img/reklama1.png" alt="">
                    </div>
                    <div class="adv_banner ph">
                        <img src="media/img/reklama2.png" alt="">
                    </div>
                </div>
                <div class="importan_qs flex_col_start">
                    <h4>Другие вопросы по теме<span>147</span></h4><a href="#">Пошаговая инструксия новичкам</a>  <a href="#">Описание системы рейтинга</a>  <a href="#">Если вы столкнулись с мошенничеством</a>  <a href="#">Закладка портфолио</a>  <a href="#">Пошаговая инструксия новичкам-работадателям</a>
                    <a
                            href="#">Как ответить на опубликовинный проект</a> <a href="#">Закладка информация</a>  <a href="#">Личная страница</a>  <a href="#">Пошаговая инструксия новичкам-работадателям</a>  <a href="#">Описание системы рейтинга</a>
                </div>
            </div>
            <div class="right_block">
                <h5 data-aos="fade-up" data-aos-delay="300">Категории</h5>
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="300"><a href="#" class="flex_row_beet_cen">Начало работы на сайте <span>4</span></a>  <a href="#" class="flex_row_beet_cen">Регистрация и авторизация <span>23</span></a>  <a href="#" class="flex_row_beet_cen">Воостановление доступа<span>5</span></a>
                    <a
                            href="#" class="flex_row_beet_cen">Что делать после регистрации<span>3</span>
                    </a> <a href="#" class="flex_row_beet_cen">Общие вопроси по сайту<span>6</span></a>  <a href="#" class="flex_row_beet_cen">Сотрудничество на сайте<span>3</span></a>  <a href="#" class="flex_row_beet_cen">Безопасная сделка<span>7</span></a>
                    <a
                            href="#" class="flex_row_beet_cen">Общие вопроси <span>8</span>
                    </a> <a href="#" class="flex_row_beet_cen">Процесс сотрудничества <span>5</span></a>  <a href="#" class="flex_row_beet_cen">Страница финансы <span>2</span></a>  <a href="#" class="flex_row_beet_cen">Безопасная сделка <span>7</span></a>
                    <a
                            href="#" class="flex_row_beet_cen">Общие вопроси <span>8</span>
                    </a> <a href="#" class="flex_row_beet_cen">Процесс сотрудничества <span>5</span></a>
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="300">
                    <img src="media/img/reklama1.png" alt="">
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="300">
                    <img src="media/img/reklama2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection