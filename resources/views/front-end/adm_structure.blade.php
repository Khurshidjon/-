@extends('layouts.app')
@section('title', 'adm_structure')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="adm_structure" class="adm_block">
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
            <div class="left flex_row_end_cen" data-aos="fade-right" data-aos-delay="400">
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
            <div class="right flex_col" data-aos="fade-left" data-aos-delay="400">
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
    <div class="medium_container" data-aos="fade-up" data-aos-delay="200">
        <div class="main_container flex_row">
            <div class="left_block" id="leadership">
                <div class="box">
                    <div class="passport flex_row">
                        <img src="{{ asset('front-end/media/img/person.png') }}" alt="">
                        <div class="info flex_col">
                            <div class="flex_col resp"><span class="position">Генеральный директор</span>  <span class="name">Каримов Абдухамид Уткурович</span>
                            </div>
                            <div class="phone flex_row_beet_cen"><span class="icon1 icon">Телефон:</span><span class="f_s">+998(371) 202-00-11</span>
                            </div>
                            <div class="reception flex_row_beet_cen"><span class="icon2 icon">Приемные дни:</span><span class="f_s">Вт. Чг. с 08-00 до 11-00</span>
                            </div>
                            <div class="mail flex_row_beet_cen"><span class="icon3 icon">Электронная почта:</span><span class="f_s">uzst@standart.uz</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab_passport_1">
                        <div class="tab-nav"><a href="#" data-tab="tab-1" class="active">Трудовая деятельность</a>  <a href="#" data-tab="tab-2">Должностные обязанности</a>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi dolores rerum, aliquid culpa est, fuga ea laboriosam in soluta odit! Eaque id, quos architecto cupiditate temporibus, sapiente molestias cumque distinctio
                                ab vitae repellendus, nam! Laboriosam inventore nulla impedit ut aut! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum,
                                animi, ea, commodi, velit quo accusamus tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur
                                voluptatem, excepturi? ipsum dolor sit amet, consectetur adipisicing elit. Iure tempora, ullam impedit officiis quisquam illo laudantium minus, totam est maxime. Distinctio mollitia minima voluptatibus, iste fugiat
                                itaque dignissimos consequuntur ipsam facere cum tenetur nostrum obcaecati voluptas blanditiis velit? Maiores repellat deleniti dolores quisquam facere blanditiis explicabo itaque libero pariatur! Sunt. Lorem ipsum
                                dolor sit amet, cons nulla impedit ut aut! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum, animi, ea, commodi,
                                velit quo accusamus tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur voluptatem,
                                excepturi? ipsum dolor sit amet, consectetur adipisicing elit. Iure tempora, ullam impedit officiis quisquam illo laudantium minus, totam est maxime. Distinctio mollitia</div>
                            <div class="tab-pane" id="tab-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure tempora, ullam impedit officiis quisquam illo laudantium minus, totam est maxime. Distinctio mollitia minima voluptatibus, iste fugiat itaque dignissimos consequuntur
                                ipsam facere cum tenetur nostrum obcaecati voluptas blanditiis velit? Maiores repellat deleniti dolores quisquam facere blanditiis explicabo itaque libero pariatur! Sunt. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum, animi, ea, commodi, velit quo accusamus tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam
                                laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur voluptatem, excepturi? iis velit? Maiores repellat deleniti dolores quisquam facere blanditiis explicabo itaque
                                libero pariatur! Sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum, animi, ea, commodi, velit quo accusamus
                                tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur voluptat</div>
                            <div class="load_more flex_col">
                                <div class="overlay"></div>
                                <div class="overlay1"></div>
                                <div class="line flex_col_cen_cen">
                                    <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="">
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