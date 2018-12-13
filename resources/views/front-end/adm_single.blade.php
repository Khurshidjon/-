@extends('layouts.app')
@section('title', 'adm_single')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

    <section id="news_page" class="adm_single adm_block">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="300">
                <h2>Территориальные управления</h2><a href="{{ route('frontIndex') }}">Главная страница</a><span>Руководство</span>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="medium_container flex_row">
            <div class="left flex_row_end_cen" data-aos="fade-right" data-aos-delay="500">
                <div class="img flex_col_cen_cen">
                    <img src="{{ asset('front-end/media/img/uzstand_build.png') }}" alt="" class="circle">
                </div>
                <div class="info flex_col">
                    <a href="#" class="flex_row">
                        <img src="{{ asset('front-end/media/img/svg/telephone.svg') }}" alt="">+998 (361) 222-66-33</a>
                    <a href="#" class="flex_row">
                        <img src="{{ asset('front-end/media/img/svg/faks.svg') }}" alt="">222-66-33</a>
                    <a href="#" class="flex_row">
                        <img src="{{ asset('front-end/media/img/svg/www.svg') }}" alt="">kkalpsmb@standart.uz</a>
                    <a href="#" class="flex_row">
                        <img src="{{ asset('front-end/media/img/svg/a.svg') }}" alt="">standart.rk@exat.uz</a>
                </div>
            </div>
            <div class="right flex_col" data-aos="fade-left" data-aos-delay="500">
                <h3>Каракалпакское управление стандартизации и метрологии</h3><span class="name">Начальник отдела: Исмаилов Узакбай Карлибаевич</span>
                <div class="flex_row">
                    <div class="flex_col"><span>Новости: </span><span>Вакансии: </span><span>Активность:</span>
                    </div>
                    <div class="flex_col statistica"><span>900</span>  <span>3</span>  <span>22%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex_row__cen medium_container addition_menu" data-aos="fade-up" data-aos-delay="300">
        <a href="{{ route('frontIndex') }}">
            <img src="{{ asset('front-end/media/img/svg/home_blue.svg') }}" alt="">
        </a>
        <a href="{{ route('frontAdmStructure') }}">Руководство</a>
        <a href="#">Структура</a>
        <a href="{{ route('frontAdmContact') }}">Контакт</a>
        <a href="{{ route('frontAdmSingle') }}">Новости</a>
        <a href="{{ route('frontVacancy') }}">Вакансии</a>
    </div>
    <div class="medium_container" data-aos="fade-up" data-aos-delay="300">
        <div class="main_container block flex_row">
            <div class="left_block">
                <div class="col_2">
                    <div class="boxes flex_row">
                        <div class="big_box flex_col_start">
                            <div class="img">
                                <a href="#">
                                    <img src="{{ asset('front-end/media/img/news_big.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content"><a href="#" class="title">В законодательной палате Олий Мажлиса образован Комитет по вопросам охраны здоровья граждан</a>
                                <p>В Послании Олий Мажлису от 22 декабря 2017года Президент особой критике подверг услуги, оказываемые населению учреждениями системы здравоохранения, которые не отвечают требованиям времени. Отмечена целесообразование
                                    того, чтобы в...</p>
                                <div class="flex_row_beet_cen">
                                    <div class="flex_row">
                                        <div class="news_time flex_row__cen">
                                            <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                        </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">2000</span>
                                    </div><a href="#" class="read_more">Читать подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="big_box flex_col_start">
                            <div class="img">
                                <a href="#">
                                    <img src="{{ asset('front-end/media/img/news_big.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content"><a href="#" class="title">В законодательной палате Олий Мажлиса образован Комитет по вопросам охраны здоровья граждан</a>
                                <p>В Послании Олий Мажлису от 22 декабря 2017года Президент особой критике подверг услуги, оказываемые населению учреждениями системы здравоохранения, которые не отвечают требованиям времени. Отмечена целесообразование
                                    того, чтобы в...</p>
                                <div class="flex_row_beet_cen">
                                    <div class="flex_row">
                                        <div class="news_time flex_row__cen">
                                            <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                        </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">2000</span>
                                    </div><a href="#" class="read_more">Читать подробнее</a>
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
                </div>
                <div class="col_1">
                    <div class="boxes flex_col">
                        <div class="big_box flex_row">
                            <div class="img">
                                <a href="#">
                                    <img src="{{ asset('front-end/media/img/news_big.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content"><a href="#" class="title">В законодательной палате Олий Мажлиса образован Комитет по вопросам охраны здоровья граждан</a>
                                <p>В Послании Олий Мажлису от 22 декабря 2017года Президент особой критике подверг услуги, оказываемые населению учреждениями системы здравоохранения, которые не отвечают требованиям времени. Отмечена целесообразование
                                    того, чтобы в...</p>
                                <div class="flex_row_beet_cen">
                                    <div class="flex_row">
                                        <div class="news_time flex_row__cen">
                                            <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                        </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">2000</span>
                                    </div><a href="#" class="read_more">Читать подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="big_box flex_row">
                            <div class="img">
                                <a href="#">
                                    <img src="{{ asset('front-end/media/img/news_big.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content"><a href="#" class="title">В законодательной палате Олий Мажлиса образован Комитет по вопросам охраны здоровья граждан</a>
                                <p>В Послании Олий Мажлису от 22 декабря 2017года Президент особой критике подверг услуги, оказываемые населению учреждениями системы здравоохранения, которые не отвечают требованиям времени. Отмечена целесообразование
                                    того, чтобы в...</p>
                                <div class="flex_row_beet_cen">
                                    <div class="flex_row">
                                        <div class="news_time flex_row__cen">
                                            <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                        </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">2000</span>
                                    </div><a href="#" class="read_more">Читать подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="big_box flex_row">
                            <div class="img">
                                <a href="#">
                                    <img src="{{ asset('front-end/media/img/news_big.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content"><a href="#" class="title">В законодательной палате Олий Мажлиса образован Комитет по вопросам охраны здоровья граждан</a>
                                <p>В Послании Олий Мажлису от 22 декабря 2017года Президент особой критике подверг услуги, оказываемые населению учреждениями системы здравоохранения, которые не отвечают требованиям времени. Отмечена целесообразование
                                    того, чтобы в...</p>
                                <div class="flex_row_beet_cen">
                                    <div class="flex_row">
                                        <div class="news_time flex_row__cen">
                                            <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                        </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">2000</span>
                                    </div><a href="#" class="read_more">Читать подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="big_box flex_row">
                            <div class="img">
                                <a href="#">
                                    <img src="{{ asset('front-end/media/img/news_big.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content"><a href="#" class="title">В законодательной палате Олий Мажлиса образован Комитет по вопросам охраны здоровья граждан</a>
                                <p>В Послании Олий Мажлису от 22 декабря 2017года Президент особой критике подверг услуги, оказываемые населению учреждениями системы здравоохранения, которые не отвечают требованиям времени. Отмечена целесообразование
                                    того, чтобы в...</p>
                                <div class="flex_row_beet_cen">
                                    <div class="flex_row">
                                        <div class="news_time flex_row__cen">
                                            <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                        </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">2000</span>
                                    </div><a href="#" class="read_more">Читать подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="load_more">Загрузить еще</button>
            </div>
            <div class="right_block">
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