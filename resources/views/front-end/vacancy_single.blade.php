@extends('layouts.app')
@section('title', 'vacancy_single')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

    <section id="vacancy_single">
    <div class="small_banner calendar">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="200">
                <h2>Вакансия</h2><a href="index.html">Главная страница</a><span>Вакансия</span>
            </div>
            <div class="filter flex_row__cen" data-aos="fade-left" data-aos-delay="200">
                <h6>Фильтр</h6>
                <input type="text" class="datepicker-here dtpAir">
                <input type="text" class="datepicker-here dtpAirr">
                <button type="button">OK</button>
            </div>
        </div>
    </div>
    <div class="medium_container">
        <div class="main_container block flex_row">
            <div class="left_block">
                <div class="vacancy2">
                    <div class="content flex_col">
                        <div class="content_block1 flex_row__start">
                            <h3>Специалист : Специалист электротехнической лаборатории, ГП Бекабадский ЦИС</h3><a href="#" class="send abs">Отправить резюме</a>
                        </div>
                        <div class="left">
                            <ul>
                                <li>Необходимый стаж:</li>
                                <li>Занятость:</li>
                                <li>Образование:</li>
                                <li>Дата публикации:</li>
                                <li>Заработная плата:</li>
                            </ul>
                            <ul style="padding-left:25px">
                                <li>3–6 лет</li>
                                <li>Полная</li>
                                <li>Высшее</li>
                                <li>2016-11-16</li>
                                <li>584 272 so'm</li>
                            </ul>
                        </div>
                        <h2>Основные обязанности:</h2>
                        <li>Мониторинг, контроль и анализ работы торговых систем</li>
                        <li>Ежедневная аналитика крипто-валютных рынков</li>
                        <li>Мониторинг текущей ситуации на Мировых фондовых, сырьевых, валютных площадках для дальнейшего принятия аналитических заключений</li>
                        <li>Консультирование по вопросам инвестирования</li>
                        <li>Эффективное управление инвестиционным фондом</li>
                        <li>Отчетность по проведенной аналитике</li>
                        <h2>Условия:</h2>
                        <li>график работы 5-2, с 8.30-17.30,</li>
                        <li>оформление по ТК.</li>
                        <li>уровень оплаты определяется с успешным кандидатом</li>
                        <li>возможность карьерного роста</li>
                        <p class="text">Специалист органа в своей деятельности должен работать согласно Законами РУз «О стандартизации», « О метрологии», « О сертификации», «О защите прав потребителей», «О качестве и безопасности продукции» Постановлений К.М. № 318
                            от 6 июля 2004 г. и № 122 от 28 апреля 2011 г.,№ 483-1 от 30 августа 1997 г.</p>
                    </div>
                    <div class="vocation">
                        <h2>Отправте ваше резюме на наше електонную почту и ждите звонка ми вам перезвоним</h2>
                        <form action="" class="flex_col">
                            <input type="text" placeholder="Ф.И.О">
                            <input type="text" placeholder="Электронная почта">
                            <input type="text" placeholder="Телефон">
                            <div class="link_img">
                                <input type="text" placeholder="Файл" class="fayl">
                                <a href="#"></a>
                            </div>
                            <div class="link"><a href="#" class="send">Отправить резюме</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="right_block">
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="200"><a href="#" class="active">Законы Республики Узбекистан</a>  <a href="#">Указы и постонавления Президента Республики Узбекистан</a>  <a href="#">Постонавления и распоряжения Кабинета</a>  <a href="#">Законы Республики Узбекистан</a>  <a href="#">Указы и постонавления Президента Республики Узбекистан</a>
                    <a
                            href="#">Постонавления и распоряжения Кабинета</a> <a href="#">Аналитические данные</a>
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="200">
                    <img src="media/img/reklama1.png" alt="">
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="200">
                    <img src="media/img/reklama2.png" alt="">
                </div>
                <div class="social_survey desk" data-aos="fade-up" data-aos-delay="200">
                    <h6>СОЦОПРОС</h6>
                    <p>Оставьте свое мнения об электронных услугах агентство &laquoУзстандарт&raquo</p>
                    <form action="">
                        <label class="flex_row__cen item">
                            <input type="radio" name="questItem"><span class="bb"></span> Отличный</label>
                        <label class="flex_row__cen item">
                            <input type="radio" name="questItem"><span class="bb"></span> Хороший</label>
                        <label class="flex_row__cen item">
                            <input type="radio" name="questItem"><span class="bb"></span> Ужасный</label>
                        <label class="flex_row__cen item">
                            <input type="radio" name="questItem"><span class="bb"></span> Можно улучшить</label>
                    </form>
                    <button type="button" class="vote">Голосовать</button> <span class="down_up"><img src="media/img/svg/down_up.svg" alt=""></span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection