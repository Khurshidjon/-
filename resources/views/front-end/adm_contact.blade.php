@extends('layouts.app')
@section('title', 'adm_contact')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="adm_contact" class="adm_block">
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
            <div class="left flex_row_end_cen" data-aos="fade-right" data-aos-delay="200">
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
            <div class="right flex_col" data-aos="fade-left" data-aos-delay="200">
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
    <div class="flex_row__cen block">
        <form action="" data-aos="fade-right" data-aos-delay="200" class="validate-form">
            <h3>Связаться с нами</h3>
            <div class="flex_col__start name_inp" style="position:relative;margin-bottom:50px">
                <input type="text" id="name" placeholder="Ф.И.О" autocomplete="off" class="empty">
                <label for="name"><span>Ф.И.О</span>
                </label>
            </div>
            <div class="flex_row_beet_cen flex_wrap">
                <div class="flex_col__start phone_inp" style="position:relative;margin-bottom:50px">
                    <input type="number" id="surname" placeholder="Телефон" autocomplete="off" class="empty">
                    <label for="surname"><span>Телефон</span>
                    </label>
                </div>
                <div class="flex_col__start mail_inp" style="position:relative;margin-bottom:50px">
                    <input type="email" id="mail" placeholder="E-mail" autocomplete="off" class="empty">
                    <label for="mail"><span>E-mail</span>
                    </label>
                </div>
            </div>
            <div class="area flex_col" style="position:relative;margin-bottom:50px">
                <textarea name="" id="text_area" placeholder="Сообщения" autocomplete="off"></textarea>
                <label for="text_area"><span>Сообщения</span>
                </label>
            </div>
            <button class="btn_elip">Отправить</button>
        </form>
        <div id="map2" data-aos="fade-left" data-aos-delay="200"></div>
    </div>
</section>
<script>
    function initMap(){var n=new google.maps.LatLng(41.2912094,69.3213418),e=new google.maps.Map(document.getElementById("map2"),{center:n,zoom:12}),o=new google.maps.Marker({position:n,map:e,animation:google.maps.Animation.DROP});function t(){null!=o.getAnimation()?o.setAnimation(null):o.setAnimation(google.maps.Animation.BOUNCE)}google.maps.event.addListenerOnce(e,"idle",function(){t(),setTimeout(t,1500)})}
</script>
@endsection