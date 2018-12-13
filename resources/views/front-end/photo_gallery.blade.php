@extends('layouts.app')
@section('title', 'photo_gallery')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="gallery_page" class="photo_gallery">
    <div class="small_banner calendar">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="200">
                <h2>Фотогалерея</h2><a href="index.html">Главная страница</a><span>Фотогалерея</span>
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
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/news_10.jpg') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/news_10.jpg') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/news_10.jpg') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/news_10.jpg') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/news_11.jpg') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/news_11.jpg') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/news2.jpg') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/news2.jpg') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
                </div>
                <div class="flex_col_cen_cen box">
                    <a href="{{ asset('front-end/media/img/galereya3.png') }}" data-lightbox="roadtrip" class="light_box">
                        <img src="{{ asset('front-end/media/img/galereya3.png') }}" alt="">
                    </a><span>Визит делегации KOICA</span>
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
                        <button type="button" class="vote">Голосовать</button> <span class="down_up"><img src="{{ asset('front-end/media/img/svg/down_up.svg') }}" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="right_block">
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="200">
                    <a href="#">Пресс-релиз</a>
                    <a href="#">Анонсы и тендеры</a>
                    <a href="{{ route('frontVideoBlog') }}">Видео галерея</a>
                    <a href="{{ route('frontGallery') }}" class="active">Фото галерея</a>
                    <a href="{{ route('frontNews') }}">Новости</a>
                    <a href="#">Публикации</a>
                    <a href="#">Аккредитация</a>
                    <a href="#">представителей СМИ</a>
                    <a href="#">Аналитические данные</a> <a href="#">Показатели отрасли</a>
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('front-end/media/img/reklama1.png') }}" alt="">
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