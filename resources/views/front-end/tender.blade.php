@extends('layouts.app')
@section('title', 'Tender')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="press_service" class="tender">
    <div class="small_banner calendar">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="200">
                <h2>Анонсы и тендеры</h2><a href="{{ route('frontIndex') }}">Главная страница</a><span>Анонсы и тендеры</span>
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
                <div class="wrap flex_row">
                    <div class="content"><a href="#">ГП "Узбекиский национальный институт метрологии" Агентсвто Узстандарт обявляет тендер</a>
                        <p>По мнению руководителя АО «Узавтосаноат» Шавката Умурзакова, основные проблемы связаны с деятельностью Асакинского завода в Андижанской области. Отмечается, что неспособность завода работать на полную мощность АО «Узавтосаноат»
                            Шавката Умурзакова,</p>
                        <div class="ftr">
                            <img src="media/img/svg/clock.svg" alt="" class="clock"> <span>18:00</span>
                            <img src="media/img/svg/eye.svg" alt="" class="eye"> <span>Просмотри: 1440</span>
                        </div>
                        <div class="lenta flex_col_cen"><span class="month">ноя.</span>  <span class="day">28</span>
                        </div>
                        <div class="date">28 ноября 2018г. - 30 ноября 2018г.</div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="content"><a href="#">ГП "Узбекиский национальный институт метрологии" Агентсвто Узстандарт обявляет тендер</a>
                        <p>По мнению руководителя АО «Узавтосаноат» Шавката Умурзакова, основные проблемы связаны с деятельностью Асакинского завода в Андижанской области. Отмечается, что неспособность завода работать на полную мощность АО «Узавтосаноат»
                            Шавката Умурзакова,</p>
                        <div class="ftr">
                            <img src="media/img/svg/clock.svg" alt="" class="clock"> <span>18:00</span>
                            <img src="media/img/svg/eye.svg" alt="" class="eye"> <span>Просмотри: 1440</span>
                        </div>
                        <div class="lenta flex_col_cen"><span class="month">ноя.</span>  <span class="day">28</span>
                        </div>
                        <div class="date">28 ноября 2018г. - 30 ноября 2018г.</div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="content"><a href="#">ГП "Узбекиский национальный институт метрологии" Агентсвто Узстандарт обявляет тендер</a>
                        <p>По мнению руководителя АО «Узавтосаноат» Шавката Умурзакова, основные проблемы связаны с деятельностью Асакинского завода в Андижанской области. Отмечается, что неспособность завода работать на полную мощность АО «Узавтосаноат»
                            Шавката Умурзакова,</p>
                        <div class="ftr">
                            <img src="media/img/svg/clock.svg" alt="" class="clock"> <span>18:00</span>
                            <img src="media/img/svg/eye.svg" alt="" class="eye"> <span>Просмотри: 1440</span>
                        </div>
                        <div class="lenta flex_col_cen"><span class="month">ноя.</span>  <span class="day">28</span>
                        </div>
                        <div class="date">28 ноября 2018г. - 30 ноября 2018г.</div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="content"><a href="#">ГП "Узбекиский национальный институт метрологии" Агентсвто Узстандарт обявляет тендер</a>
                        <p>По мнению руководителя АО «Узавтосаноат» Шавката Умурзакова, основные проблемы связаны с деятельностью Асакинского завода в Андижанской области. Отмечается, что неспособность завода работать на полную мощность АО «Узавтосаноат»
                            Шавката Умурзакова,</p>
                        <div class="ftr">
                            <img src="media/img/svg/clock.svg" alt="" class="clock"> <span>18:00</span>
                            <img src="media/img/svg/eye.svg" alt="" class="eye"> <span>Просмотри: 1440</span>
                        </div>
                        <div class="lenta flex_col_cen"><span class="month">ноя.</span>  <span class="day">28</span>
                        </div>
                        <div class="date">28 ноября 2018г. - 30 ноября 2018г.</div>
                    </div>
                </div>
                <div class="flex_row_cen adv_banner_block">
                    <div class="adv_banner ph">
                        <img src="media/img/reklama1.png" alt="">
                    </div>
                    <div class="adv_banner ph">
                        <img src="media/img/reklama2.png" alt="">
                    </div>
                    <div class="social_survey ph">
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