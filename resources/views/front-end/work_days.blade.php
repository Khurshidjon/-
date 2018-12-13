@extends('layouts.app')
@section('title', 'work_day')
@section('content')

    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

    <section id="work_days">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="200">
                <h2>Контакты</h2><a href="index.html">Главная страница</a><span>Контакты</span>
            </div>
        </div>
    </div>
    <div class="medium_container">
        <div class="main_container block flex_row">
            <div class="left_block">
                <h5>График приёма граждан руководством узбекского агентсва стандартизации, метрологии и сертификации</h5>
                <div class="wrap flex_col"><span class="name">Каримов Абдухамид Уткурович</span>  <span class="position">Генеральный директор</span>
                    <div class="timing">
                        <div>График приёма граждан</div>
                        <div class="flex_row_beet_cen table">
                            <div class="flex_col_cen">
                                <div class="day white">Пн</div><span>Нет приема</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Вт</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Ср</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Чт</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Пт</div><span>Нет приема</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Сб</div><span>Выходной</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Вс</div><span>Выходной</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_col"><span class="name">Каримов Абдухамид Уткурович</span>  <span class="position">Генеральный директор</span>
                    <div class="timing">
                        <div>График приёма граждан</div>
                        <div class="flex_row_beet_cen table">
                            <div class="flex_col_cen">
                                <div class="day white">Пн</div><span>Нет приема</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Вт</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Ср</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Чт</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Пт</div><span>Нет приема</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Сб</div><span>Выходной</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Вс</div><span>Выходной</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_col"><span class="name">Каримов Абдухамид Уткурович</span>  <span class="position">Генеральный директор</span>
                    <div class="timing">
                        <div>График приёма граждан</div>
                        <div class="flex_row_beet_cen table">
                            <div class="flex_col_cen">
                                <div class="day white">Пн</div><span>Нет приема</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Вт</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Ср</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Чт</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Пт</div><span>Нет приема</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Сб</div><span>Выходной</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Вс</div><span>Выходной</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_col"><span class="name">Каримов Абдухамид Уткурович</span>  <span class="position">Генеральный директор</span>
                    <div class="timing">
                        <div>График приёма граждан</div>
                        <div class="flex_row_beet_cen table">
                            <div class="flex_col_cen">
                                <div class="day white">Пн</div><span>Нет приема</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Вт</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Ср</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day black">Чт</div><span>08:00	- 11:00</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Пт</div><span>Нет приема</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Сб</div><span>Выходной</span>
                            </div>
                            <div class="flex_col_cen">
                                <div class="day white">Вс</div><span>Выходной</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_row_cen adv_banner_block">
                    <div class="adv_banner ph">
                        <img src="{{ asset('front-end/media/img/reklama2.png') }}" alt="">
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
                        <button type="button" class="vote">Голосовать</button> <span class="down_up"><img src="{{ asset('front-end/media/img/svg/down_up.svg') }}" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="right_block">
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="200"><a href="#" class="active">График проведения приема граждан</a>  <a href="#">Телефон доверия</a>  <a href="#">Постонавления и распоряжения Кабинета</a>  <a href="#">Обращения генералному директору</a>  <a href="#">Контакты</a>
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('front-end/media/img/reklama2.png') }}" alt="">
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
                    <button type="button" class="vote">Голосовать</button> <span class="down_up"><img src="{{ asset('front-end/media/img/svg/down_up.svg') }}" alt=""></span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection