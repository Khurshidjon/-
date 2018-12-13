@extends('layouts.app')
@section('title', 'news_single')
@section('content')
    @php
        $lang = App::getLocale();
        $one = \App\NewsLike::where('news_id', $post->id)->where('like_one', 1)->count();
        $two = \App\NewsLike::where('news_id', $post->id)->where('like_two', 2)->count();
        $three = \App\NewsLike::where('news_id', $post->id)->where('like_three', 3)->count();
    @endphp
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="news_single" class="shablon2_news">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="200">
                <h2>
                    @if($lang == 'uz')
                        {!! $post->title_uz !!}
                    @elseif($lang == 'cyrl')
                        {!! $post->title_cyrl !!}
                    @elseif($lang == 'ru')
                        {!! $post->title_ru !!}
                    @elseif($lang == 'en')
                        {!! $post->title_en !!}
                    @endif
                </h2>
                <a href="{{ route('frontIndex') }}">Главная страница</a><span>Новости</span>
            </div>
        </div>
    </div>
    <div class="medium_container">
        <div class="main_container block flex_row">
            <div class="left_block">
                @if($lang == 'uz')
                    {!! $post->body_uz !!}
                @elseif($lang == 'cyrl')
                    {!! $post->body_cyrl !!}
                @elseif($lang == 'ru')
                    {!! $post->body_ru !!}
                @elseif($lang == 'en')
                    {!! $post->body_en !!}
                @endif
                <p class="text_r">
                    @if($lang == 'uz')
                        {!! $post->meta_keywords_uz !!}
                    @elseif($lang == 'cyrl')
                        {!! $post->meta_keywords_cyrl !!}
                    @elseif($lang == 'ru')
                        {!! $post->meta_keywords_ru !!}
                    @elseif($lang == 'en')
                        {!! $post->meta_keywords_en !!}
                    @endif
                </p>
                <div class="flex_row_beet_cen">
                    <div class="flex_row">
                        <div class="news_time flex_row__cen">
                            <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>{!! $post->created_at->format('d F Y') !!}</span>
                        </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">{!! $post->featured !!}</span>
                    </div>
                    <div class="flex_row">
                        <a href="#" class="read_more">
                            <div class="share">
                                <img src="{{ asset('front-end/media/img/svg/share.svg') }}" alt=""><span>Поделитесь с друзями:</span>
                            </div>
                        </a>
                        <a href="#" class="read_more">
                            <div class="print">
                                <img src="{{ asset('front-end/media/img/svg/print.svg') }}" alt=""><span>Распечатать</span>
                            </div>
                        </a>
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
                <div class="rating flex_row_beet_cen">
                    <h5>Ваше отношение</h5>
                    <div class="item flex_col_cen best" id="likeITEM" data-url="{{ route('like.news')}}" data-postID="{{ $post->id }}">
                        <img src="{{ asset('front-end/media/img/svg/sticker5.svg') }}" alt="">
                        <button type="button" class="like_button" data-like="1">Отлично</button> <span id="one_likes">{{ $one }}</span>
                    </div>
                    <div class="item flex_col_cen">
                        <img src="{{ asset('front-end/media/img/svg/sticker4.svg') }}" alt="">
                        <button type="button" class="like_button" data-like="2">Интересно</button> <span id="two_likes">{{ $two }}</span>
                    </div>
                    <div class="item flex_col_cen">
                        <img src="{{ asset('front-end/media/img/svg/sticker2.svg') }}" alt="">
                        <button type="button" class="like_button" data-like="3">Скучный</button> <span id="three_likes">{{ $three }}</span>
                    </div>
                </div>
                <div id="news">
                    <h3>Тематические материалы</h3>
                    <div class="floor2 flex_row flex_wrap">
                        <div class="item">
                            <div class="shadow_box flex_col_cen">
                                <img src="{{ asset('front-end/media/img/news1.png') }}" alt="" class="circle">
                                <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                                    <div class="news_time flex_row__cen">
                                        <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="shadow_box flex_col_cen">
                                <img src="{{ asset('front-end/media/img/news1.png') }}" alt="" class="circle">
                                <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                                    <div class="news_time flex_row__cen">
                                        <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="shadow_box flex_col_cen">
                                <img src="{{ asset('front-end/media/img/news1.png') }}" alt="" class="circle">
                                <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                                    <div class="news_time flex_row__cen">
                                        <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="shadow_box flex_col_cen">
                                <img src="{{ asset('front-end/media/img/news1.png') }}" alt="" class="circle">
                                <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                                    <div class="news_time flex_row__cen">
                                        <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="shadow_box flex_col_cen">
                                <img src="{{ asset('front-end/media/img/news1.png') }}" alt="" class="circle">
                                <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                                    <div class="news_time flex_row__cen">
                                        <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="shadow_box flex_col_cen">
                                <img src="{{ asset('front-end/media/img/news1.png') }}" alt="" class="circle">
                                <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                                    <div class="news_time flex_row__cen">
                                        <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="shadow_box flex_col_cen">
                                <img src="{{ asset('front-end/media/img/news1.png') }}" alt="" class="circle">
                                <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                                    <div class="news_time flex_row__cen">
                                        <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
            <div class="right_block">
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="200"><a href="#">Пресс-релиз</a>  <a href="#">Анонсы и тендеры</a>  <a href="#">Видео галерея</a>  <a href="#">Фото галерея</a>  <a href="#" class="active">Новости</a>  <a href="#">Публикации</a>  <a href="#">Аккредитация</a>  <a href="#">представителей СМИ</a>
                    <a
                            href="#">Аналитические данные</a> <a href="#">Показатели отрасли</a>
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