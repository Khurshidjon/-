@extends('layouts.app')
@section('title', 'News')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        });
    </script>
    @php
         use App\Voice;
             $lang = App::getLocale();
    @endphp
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="news_page">
    <div class="small_banner calendar">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="200">
                <h2>Новости</h2><a href="{{ route('frontIndex') }}">Главная страница</a><span>Новости</span>
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
                <div class="big_box flex_col_start">
                    <div class="img">
                        <a href="#">
                            <img src="{{ asset('front-end/media/img/news_big.png') }}" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <a href="#" class="title">В законодательной палате Олий Мажлиса образован Комитет по вопросам охраны здоровья граждан</a>
                        <p>В Послании Олий Мажлису от 22 декабря 2017года Президент особой критике подверг услуги, оказываемые населению учреждениями системы здравоохранения, которые не отвечают требованиям времени. Отмечена целесообразование того, чтобы
                            в...</p>
                        <div class="flex_row_beet_cen">
                            <div class="flex_row">
                                <div class="news_time flex_row__cen">
                                    <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">2000</span>
                            </div><a href="#" class="read_more">Читать подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col_2">
                    <div class="boxes flex_row">
                        @foreach($postsTwice as $post)
                            <div class="big_box flex_col_start">
                                <div class="img">
                                    <a href="{{ route('frontNewsSingle', ['post'=>$post]) }}">
                                        <img src="{{ asset('storage') . '/' . $post->image }}" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    @if($lang == 'uz')
                                        <a href="{{ route('frontNewsSingle', ['post'=>$post]) }}" class="title">{!! $post->title_uz !!}</a>
                                        <p>{!! str_limit($post->description_uz, 200) !!}</p>
                                    @elseif($lang == 'cyrl')
                                        <a href="{{ route('frontNewsSingle', ['post'=>$post]) }}" class="title">{!! $post->title_cyrl !!}</a>
                                        <p>{!! str_limit($post->description_cyrl, 200) !!}</p>
                                    @elseif($lang == 'ru')
                                        <a href="{{ route('frontNewsSingle', ['post'=>$post]) }}" class="title">{!! $post->title_ru !!}</a>
                                        <p>{!! str_limit($post->description_cyrl, 200) !!}</p>
                                    @elseif($lang == 'en')
                                        <a href="{{ route('frontNewsSingle', ['post'=>$post]) }}" class="title">{!! $post->title_en !!}</a>
                                        <p>{!! str_limit($post->description_en, 200) !!}</p>
                                    @endif
                                    <div class="flex_row_beet_cen">
                                        <div class="flex_row">
                                            <div class="news_time flex_row__cen">
                                                <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>{!! $post->created_at->format('d F Y') !!}</span>
                                            </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">{!! $post->featured !!}</span>
                                        </div><a href="{{ route('frontNewsSingle', ['post'=>$post]) }}" class="read_more">Читать подробнее</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                    <div class="boxes flex_col load_more_items" data-skip="{{ $skip }}">
                            @include('front-end.news-render', ['posts' => $posts])
                    </div>
                </div>
                <button type="button" class="load_more" data-url="{{ route('frontLoadMoreNews') }}">Загрузить еще</button>
                <div class="container-preloader">
                    <div class="bubbles">
                        <div class="bubble">
                            <div class="circle"></div>
                        </div>
                        <div class="bubble">
                            <div class="circle"></div>
                        </div>
                        <div class="bubble">
                            <div class="circle"></div>
                        </div>
                        <div class="bubble">
                            <div class="circle"></div>
                        </div>
                        <div class="bubble">
                            <div class="circle"></div>
                        </div>
                        <div class="bubble">
                            <div class="circle"></div>
                        </div>
                        <div class="bubble">
                            <div class="circle"></div>
                        </div>
                        <div class="bubble">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                @if($question)
                <div class="social_survey ph">
                    {!! $social_survey !!}
                </div>
                @endif
            </div>
            <div class="right_block">
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="200">
                    <a href="#">Пресс-релиз</a>
                    <a href="#">Анонсы и тендеры</a>
                    <a href="{{ route('frontVideoBlog') }}">Видео галерея</a>
                    <a href="{{ route('frontGallery') }}">Фото галерея</a>
                    <a href="{{ route('frontNews') }}" class="active">Новости</a>
                    <a href="#">Публикации</a>
                    <a href="#">Аккредитация</a>
                    <a href="#">представителей СМИ</a>
                    <a href="#">Аналитические данные</a>
                    <a href="#">Показатели отрасли</a>
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('front-end/media/img/reklama1.png') }}" alt="">
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('front-end/media/img/reklama2.png') }}" alt="">
                </div>
                @if($question)
                    <div class="social_survey desk" data-aos="fade-up" data-aos-delay="200">
                        {!! $social_survey !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection