@extends('layouts.app')
@section('title', 'Vacancy')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="vacancy">
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
                <div class="vacancy_content">
                    <div class="vacancy_text_block">
                        <div class="row">
                            <div class="col-md-8"><a href="{{ route('frontVacancySingle') }}" class="big_text">Специалист : Специалист электротехнической лаборатории, ГП Бекабадский ЦИС</a>
                                <p class="middle">Узбекское агентство стандартизации, метрологии и сертификации</p>
                                <p class="small">29.06.2017</p>
                            </div>
                            <div class="col-md-4 send">
                                <div class="link"><a href="#">Отправить резюме</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vacancy_text_block">
                        <div class="row">
                            <div class="col-md-8"><a href="{{ route('frontVacancySingle') }}" class="big_text">Специалист : Специалист электротехнической лаборатории, ГП Бекабадский ЦИС</a>
                                <p class="middle">Узбекское агентство стандартизации, метрологии и сертификации</p>
                                <p class="small">29.06.2017</p>
                            </div>
                            <div class="col-md-4 send">
                                <div class="link"><a href="#">Отправить резюме</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vacancy_text_block">
                        <div class="row">
                            <div class="col-md-8"><a href="{{ route('frontVacancySingle') }}" class="big_text">Специалист : Специалист электротехнической лаборатории, ГП Бекабадский ЦИС</a>
                                <p class="middle">Узбекское агентство стандартизации, метрологии и сертификации</p>
                                <p class="small">29.06.2017</p>
                            </div>
                            <div class="col-md-4 send">
                                <div class="link"><a href="#">Отправить резюме</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vacancy_text_block">
                        <div class="row">
                            <div class="col-md-8"><a href="{{ route('frontVacancySingle') }}" class="big_text">Специалист : Специалист электротехнической лаборатории, ГП Бекабадский ЦИС</a>
                                <p class="middle">Узбекское агентство стандартизации, метрологии и сертификации</p>
                                <p class="small">29.06.2017</p>
                            </div>
                            <div class="col-md-4 send">
                                <div class="link"><a href="#">Отправить резюме</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_row_cen adv_banner_block">
                    <div class="adv_banner ph">
                        <img src="{{ asset('front-end/media/img/reklama1.png') }}" alt="">
                    </div>
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
                        <button type="button" class="vote">Голосовать</button> <span class="down_up"><img src="{{ asset('front-end/media/img/svg/down_up.svg')}}" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="right_block">
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="200"><a href="#" class="active">Законы Республики Узбекистан</a>  <a href="#">Указы и постонавления Президента Республики Узбекистан</a>  <a href="#">Постонавления и распоряжения Кабинета</a>  <a href="#">Законы Республики Узбекистан</a>  <a href="#">Указы и постонавления Президента Республики Узбекистан</a>
                    <a
                            href="#">Постонавления и распоряжения Кабинета</a> <a href="#">Аналитические данные</a>
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('front-end/media/img/reklama1.png')}}" alt="">
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