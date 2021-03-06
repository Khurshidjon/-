@extends('layouts.app')
@section('title', 'meterology')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="metrology_page">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row__cen">
            <div class="content" data-aos="fade-right">
                <h2>Метрология</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit amet libero tenetur minima officiis corporis ullam, vero? Laudantium ducimus fuga, laborum molestiae optio fugit, placeat magni esse reprehenderit adipisci repellendus,
                    itaque ab incidunt sint eveniet amet sapiente nobis eligendi quod iure laborum molestiae optio fugit, placeat magni esse reprehenderit adipisci repellendus, itaque ab incidunt sint eveniet amet sapiente nobis eligendi quod iure
                    nisi eum cupiditate. Rerum omnis, sit ut officia minima?</p>
            </div>
            <img src="{{ asset('front-end/media/img/metrology_page/minBannerImage.png') }}" alt="" data-aos="fade-left">
        </div>
    </div>
    <div class="labaratory" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="700">
        <div class="medium_container">
            <div class="items flex_row flex_wrap">
                <div class="item">
                    <a href="index.html">
                        <div class="text">
                            <p>Лаборатория измерений массы</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="index.html">
                        <div class="text">
                            <p>Лаборатория измерений радиотехническое величин и ионизирующих излучени</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="index.html">
                        <div class="text">
                            <p>Лаборатория измерений давления и расхода</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="index.html">
                        <div class="text">
                            <p>Открытые данные по метрологии</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="index.html">
                        <div class="text">
                            <p>Открытые данные по метрологии</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="index.html">
                        <div class="text">
                            <p>Лаборатория измерений массы</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="news">
        <div class="medium_container">
            <h3>Новости Метрологии</h3>
            <div class="floor2 flex_row flex_wrap">
                <div class="item">
                    <div class="shadow_box flex_row_cen">
                        <img src="{{ asset('front-end/media/img/news1.png') }}" alt="">
                        <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                            <div class="news_time flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box flex_row_cen">
                        <img src="{{ asset('front-end/media/img/news1.png') }}" alt="">
                        <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                            <div class="news_time flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box flex_row_cen">
                        <img src="{{ asset('front-end/media/img/news1.png') }}" alt="">
                        <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                            <div class="news_time flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box flex_row_cen">
                        <img src="{{ asset('front-end/media/img/news1.png') }}" alt="">
                        <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                            <div class="news_time flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box flex_row_cen">
                        <img src="{{ asset('front-end/media/img/news1.png') }}" alt="">
                        <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                            <div class="news_time flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box flex_row_cen">
                        <img src="{{ asset('front-end/media/img/news1.png') }}" alt="">
                        <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                            <div class="news_time flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box flex_row_cen">
                        <img src="{{ asset('front-end/media/img/news1.png') }}" alt="">
                        <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                            <div class="news_time flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box flex_row_cen">
                        <img src="{{ asset('front-end/media/img/news1.png') }}" alt="">
                        <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                            <div class="news_time flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box flex_row_cen">
                        <img src="{{ asset('front-end/media/img/news1.png') }}" alt="">
                        <div class="content flex_col"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                            <div class="news_time flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="FAQ">
        <div class="medium_container flex_row">
            <div class="questions">
                <div class="title">Часто задаваемые вопросы по метрологии</div>
                <a href="#">
                    <div class="ques flex_row__cen">
                        <div class="icon flex_col_cen_cen">?</div><span>Как известно, предвыборные лозунги отражают самую суть как известно, предвыборные лозунги как известно, предвыборные лозунги</span>
                    </div>
                </a>
                <a href="#">
                    <div class="ques flex_row__cen">
                        <div class="icon flex_col_cen_cen">?</div><span>Как известно, предвыборные лозунги отражают известно, предвыборные лозунги известно, предвыборные лозунги самую суть</span>
                    </div>
                </a>
                <a href="#">
                    <div class="ques flex_row__cen">
                        <div class="icon flex_col_cen_cen">?</div><span>Как известно, предвыборные лозунги отражают самую предвыборные лозунги отражаюп редвыборные лозунги отражаютт суть</span>
                    </div>
                </a>
                <a href="#">
                    <div class="ques flex_row__cen">
                        <div class="icon flex_col_cen_cen">?</div><span>Как известно, предвыборные лозунги отражают самую предвыборные лозунги отражаюп редвыборные лозунги отражаютт суть</span>
                    </div>
                </a>
                <div class="buttons flex_row_start"><a href="#">База знаний</a>  <a href="#">Задать вопрос</a>
                </div>
            </div>
        </div>
        <div class="slider_metrology">
            <div class="items">
                <div class="item flex_col_cen_cen">
                    <div class="circle flex_col_cen_cen">
                        <img src="{{ asset('front-end/media/img/slid_img.png') }}" alt="">
                    </div><a href="news.html">Подача электронной заявки на изготовления</a>
                </div>
                <div class="item flex_col_cen_cen">
                    <div class="circle flex_col_cen_cen">
                        <img src="{{ asset('front-end/media/img/slid_img.png') }}" alt="">
                    </div><a href="news.html">Подача электронной заявки на изготовления</a>
                </div>
                <div class="item flex_col_cen_cen">
                    <div class="circle flex_col_cen_cen">
                        <img src="{{ asset('front-end/media/img/slid_img.png') }}" alt="">
                    </div><a href="news.html">Подача электронной заявки на изготовления</a>
                </div>
                <div class="item flex_col_cen_cen">
                    <div class="circle flex_col_cen_cen">
                        <img src="{{ asset('front-end/media/img/slid_img.png') }}" alt="">
                    </div><a href="news.html">Подача электронной заявки на изготовления</a>
                </div>
                <div class="item flex_col_cen_cen">
                    <div class="circle flex_col_cen_cen">
                        <img src="{{ asset('front-end/media/img/slid_img.png') }}" alt="">
                    </div><a href="news.html">Подача электронной заявки на изготовления</a>
                </div>
                <div class="item flex_col_cen_cen">
                    <div class="circle flex_col_cen_cen">
                        <img src="{{ asset('front-end/media/img/slid_img.png') }}" alt="">
                    </div><a href="news.html">Подача электронной заявки на изготовления</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection