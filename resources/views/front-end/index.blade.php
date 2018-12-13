@extends('layouts.app')
@section('title', 'INDEX')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

    <div class="overlayWidgets"></div>
<section id="index">
    <div class="slidBanner flex_rows">
        <div class="item" style="background-image:url('{{ asset("front-end/media/img/sliderBanner1.png")}}')">
            <div class="overlay"></div>
            <div class="medium_container" style="z-index:1;position:relative">
                <h1>Мы создаем и контралируем<br>стандарты и регламенты</h1>
            </div>
        </div>
        <div class="item" style="background-image:url('{{ asset("front-end/media/img/sliderBanner1.png")}}')">
            <div class="overlay"></div>
            <div class="medium_container" style="z-index:1;position:relative">
                <h1>Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit.</h1>
            </div>
        </div>
        <div class="item" style="background-image:url('{{ asset("front-end/media/img/sliderBanner1.png")}}')">
            <div class="overlay"></div>
            <div class="medium_container" style="z-index:1;position:relative">
                <h1>Lorem ipsum dolor sit amet.<br>Lorem ipsum.</h1>
            </div>
        </div>
        <div class="item" style="background-image:url('{{ asset("front-end/media/img/sliderBanner1.png")}}')">
            <div class="overlay"></div>
            <div class="medium_container" style="z-index:1;position:relative">
                <h1>Lorem ipsum dolor sit amet.<br>Lorem ipsum.</h1>
            </div>
        </div>
    </div>

    <div class="home_page_sub_slider">
        <div class="medium_container flex_col">
            <div class="sub_slider owl-carousel owl-theme">
                <div class="sub_block" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="sub_1"><h4>Стандартизация</h4></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                </div>

                <div class="sub_block" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="sub_1 col_2"><h4>Стандартизация</h4></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                </div>

                <div class="sub_block" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="sub_1 col_3"><h4>Стандартизация</h4></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                </div>

                <div class="sub_block" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="sub_1 col_4"><h4>Стандартизация</h4></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                    <div class="sub2"><a href="#"><p>Законодательные и нормативно-правовые основы</p></a></div>
                </div>
            </div>
            <a href="#" class="sub_slider_btn">Показать все меню</a>
        </div>
    </div>
    <div id="news">
        <div class="bigLine"></div>
        <div class="bgWhite">
            <div class="medium_container flex_col_cen_cen" data-aos="zoom-in" data-aos-delay="400">
                <div class="floor1 flex_row">
                    <div class="col1 flex_col">
                        <div>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/news.png') }}" alt="" style="width:100%">
                            </a>
                            <a href="#">
                                <p>Первоначальная экологическая экспертиза, Планотвода земли и переселения</p>
                            </a>
                        </div>
                        <div class="ftr flex_row_beet_cen"><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg')}}" alt="">34</span>
                            <div class="news_time flex_row_cen_end">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg')}}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="col2">
                        <div class="item"><a href="#">Первоначальная экологическая экспертиза, Планотвода земли и переселения</a>
                            <div class="news_time flex_row_cen_end">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg')}}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                        <div class="item"><a href="#">Первоначальная экологическая экспертиза, Планотвода земли и переселения</a>
                            <div class="news_time flex_row_cen_end">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg')}}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                        <div class="item"><a href="#">В соответствии с Инвестиционной программой Республики Узбекистан на 2016 год</a>
                            <div class="news_time flex_row_cen_end">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg')}}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                        <div class="item"><a href="#">Первоначалная экологическоя экспертиза Планотвода земли пересленя</a>
                            <div class="news_time flex_row_cen_end">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg')}}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="col2 col3">
                        <div class="item"><a href="#">Внимание и доверие вдохновляют на достижение новых рубежей</a>
                            <div class="news_time flex_row_cen_end">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg')}}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                        <div class="item"><a href="#">Первоначалная экологическоя экспертиза Планотвода земли пересленя</a>
                            <div class="news_time flex_row_cen_end">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg')}}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                        <div class="item"><a href="#">Продукция семейного предпринимательства – на экспорт</a>
                            <div class="news_time flex_row_cen_end">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg')}}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                        <div class="item"><a href="#">Первоначалная экологическоя экспертиза Планотвода земли пересленя</a>
                            <div class="news_time flex_row_cen_end">
                                <img src="{{ asset('front-end/media/img/svg/clock.svg')}}" alt=""> <span>02 Май 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="floor2 flex_row_beet_cen flex_wrap">
                    @foreach($posts as $post)
                    <div class="item" data-aos="fade-right">
                        <div class="shadow_box flex_row_cen">
                            <img src="{{ asset('storage/') . '/' . $post->image}}" alt="">
                            <div class="content flex_col">
                                <a href="{{ route('frontNewsSingle', $post) }}">{!! $post->title_uz !!}</a>
                                <div class="news_time flex_row__cen">
                                    <img src="{{ asset('front-end/media/img/svg/clock.svg')}}" alt=""> <span>02 Май 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="main_btn" data-aos="zoom-in"><a href="{{ route('frontNews') }}" class="flex_row_beet_cen"><span>Показать все</span><div class="elip flex_col_cen_cen"><img src="{{ asset('front-end/media/img/svg/right-arrow.svg')}}" alt=""></div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="advantage">
        <div class="medium_container flex_row_beet flex_wrap">
            <div class="item flex_col_beet" data-aos="fade-right" data-aos-delay="300">
                <div class="tt"><span>Информация по странам по экспорту продукциипо экспорту продукциипо экспорту продукцииИнформация по странам по экспорту продукции</span>
                </div>
                <a href="#" style="z-index:5">
                    <div class="main_btn flex_row_beet_cen"><span>Мы вам покажем</span>
                        <div class="elip flex_col_cen_cen">
                            <img src="{{ asset('front-end/media/img/svg/right-arrow.svg')}}" alt="">
                        </div>
                    </div>
                </a>
                <div class="overlay"></div>
                <div class="advImg">
                    <img src="{{ asset('front-end/media/img/advantage1.png')}}" alt="">
                </div>
            </div>
            <div class="item flex_col_beet" data-aos="fade-right" data-aos-delay="350">
                <div class="tt"><span>Информация по странам по экспорту продукции</span>
                </div>
                <a href="#" style="z-index:5">
                    <div class="main_btn flex_row_beet_cen"><span>Мы вам покажем</span>
                        <div class="elip flex_col_cen_cen">
                            <img src="{{ asset('front-end/media/img/svg/right-arrow.svg')}}" alt="">
                        </div>
                    </div>
                </a>
                <div class="overlay"></div>
                <div class="advImg">
                    <img src="{{ asset('front-end/media/img/advantage2.png')}}" alt="">
                </div>
            </div>
            <div class="item flex_col_beet" data-aos="fade-right" data-aos-delay="400">
                <div class="tt"><span>Информация по странам по экспорту продукции</span>
                </div>
                <a href="#" style="z-index:5">
                    <div class="main_btn flex_row_beet_cen"><span>Мы вам покажем</span>
                        <div class="elip flex_col_cen_cen">
                            <img src="{{ asset('front-end/media/img/svg/right-arrow.svg')}}" alt="">
                        </div>
                    </div>
                </a>
                <div class="overlay"></div>
                <div class="advImg">
                    <img src="{{ asset('front-end/media/img/advantage3.png')}}" alt="">
                </div>
            </div>
            <div class="item flex_col_beet" data-aos="fade-right" data-aos-delay="450">
                <div class="tt"><span>Информация по странам по экспорту продукции</span>
                </div>
                <a href="#" style="z-index:5">
                    <div class="main_btn flex_row_beet_cen"><span>Мы вам покажем</span>
                        <div class="elip flex_col_cen_cen">
                            <img src="{{ asset('front-end/media/img/svg/right-arrow.svg')}}" alt="">
                        </div>
                    </div>
                </a>
                <div class="overlay"></div>
                <div class="advImg">
                    <img src="{{ asset('front-end/media/img/advantage4.png')}}" alt="">
                </div>
            </div>
            <div class="item flex_col_beet" data-aos="fade-right" data-aos-delay="500">
                <div class="tt"><span>Информация по странам по экспорту продукции</span>
                </div>
                <a href="#" style="z-index:5">
                    <div class="main_btn flex_row_beet_cen"><span>Мы вам покажем</span>
                        <div class="elip flex_col_cen_cen">
                            <img src="{{ asset('front-end/media/img/svg/right-arrow.svg')}}" alt="">
                        </div>
                    </div>
                </a>
                <div class="overlay"></div>
                <div class="advImg">
                    <img src="{{ asset('front-end/media/img/advantage5.png')}}" alt="">
                </div>
            </div>
            <div class="item flex_col_beet" data-aos="fade-right" data-aos-delay="550">
                <div class="tt"><span>Информация по странам по экспо странам по экспорту продукции</span>
                </div>
                <a href="#" style="z-index:5">
                    <div class="main_btn flex_row_beet_cen"><span>Мы вам покажем</span>
                        <div class="elip flex_col_cen_cen">
                            <img src="{{ asset('front-end/media/img/svg/right-arrow.svg') }}" alt="">
                        </div>
                    </div>
                </a>
                <div class="overlay"></div>
                <div class="advImg">
                    <img src="{{ asset('front-end/media/img/advantage6.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="home_page_second_slider">
        <div class="title" data-aos="zoom-in" data-aos-delay="300">ПРОЕКТЫ АГЕНТСТВА</div>
        <div class="medium_container">
            <div>
                <div class="home_second_slider owl-carousel owl-theme">
                    <div class="second_slider_frame" data-aos="fade-up" data-aos-delay="500">
                        <div class="second_slider_circl">
                            <img src="{{ asset('front-end/media/img/35.png')}}" alt="">
                        </div>
                        <p>КАТАЛОГ СТАНДАРТОВ РЕСПУБЛИКИ УЗБЕКИСТАН</p>
                        <a href="#" class="btn-6">
                            <div>Подробнее</div><span></span>
                        </a>
                    </div>
                    <div class="second_slider_frame" data-aos="fade-up" data-aos-delay="600">
                        <div class="second_slider_circl">
                            <img src="{{ asset('front-end/media/img/26.png')}}" alt="">
                        </div>
                        <p>КАТАЛОГ СТАНДАРТОВ РЕСПУБЛИКИ УЗБЕКИСТАН</p>
                        <a href="#" class="btn-6">
                            <div>Подробнее</div><span></span>
                        </a>
                    </div>
                    <div class="second_slider_frame" data-aos="fade-up" data-aos-delay="700">
                        <div class="second_slider_circl">
                            <img src="{{ asset('front-end/media/img/29.png')}}" alt="">
                        </div>
                        <p>КАТАЛОГ СТАНДАРТОВ РЕСПУБЛИКИ УЗБЕКИСТАН</p>
                        <a href="#" class="btn-6">
                            <div>Подробнее</div><span></span>
                        </a>
                    </div>
                    <div class="second_slider_frame" data-aos="fade-up" data-aos-delay="800">
                        <div class="second_slider_circl">
                            <img src="{{ asset('front-end/media/img/30.png') }}" alt="">
                        </div>
                        <p>КАТАЛОГ СТАНДАРТОВ РЕСПУБЛИКИ УЗБЕКИСТАН</p>
                        <a href="#" class="btn-6">
                            <div>Подробнее</div><span></span>
                        </a>
                    </div>
                    <div class="second_slider_frame">
                        <div class="second_slider_circl">
                            <img src="{{ asset('front-end/media/img/35.png') }}" alt="">
                        </div>
                        <p>КАТАЛОГ СТАНДАРТОВ РЕСПУБЛИКИ УЗБЕКИСТАН</p>
                        <a href="#" class="btn-6">
                            <div>Подробнее</div><span></span>
                        </a>
                    </div>
                    <div class="second_slider_frame">
                        <div class="second_slider_circl">
                            <img src="{{ asset('front-end/media/img/35.png') }}" alt="">
                        </div>
                        <p>КАТАЛОГ СТАНДАРТОВ РЕСПУБЛИКИ УЗБЕКИСТАН</p>
                        <a href="#" class="btn-6">
                            <div>Подробнее</div><span></span>
                        </a>
                    </div>
                    <div class="second_slider_frame">
                        <div class="second_slider_circl">
                            <img src="{{ asset('front-end/media/img/35.png') }}" alt="">
                        </div>
                        <p>КАТАЛОГ СТАНДАРТОВ РЕСПУБЛИКИ УЗБЕКИСТАН</p>
                        <a href="#" class="btn-6">
                            <div>Подробнее</div><span></span>
                        </a>
                    </div>
                    <div class="second_slider_frame">
                        <div class="second_slider_circl">
                            <img src="{{ asset('front-end/media/img/35.png') }}" alt="">
                        </div>
                        <p>КАТАЛОГ СТАНДАРТОВ РЕСПУБЛИКИ УЗБЕКИСТАН</p>
                        <a href="#" class="btn-6">
                            <div>Подробнее</div><span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="questions">
        <div class="blueBg"></div>
        <div class="medium_container flex_row_beet_start questions" data-aos="zoom-in-up" data-aos-delay="300" data-aos-offset="300">
            <div class="col1 flex_col">
                <div class="title">А вы знаете что такое эталон времени</div>
                <form action="">
                    <label class="flex_row__cen item">
                        <input type="radio" name="questItem"><span class="bb"></span> Да знаю</label>
                    <label class="flex_row__cen item">
                        <input type="radio" name="questItem"><span class="bb"></span> Не могу спомнить</label>
                    <label class="flex_row__cen item">
                        <input type="radio" name="questItem"><span class="bb"></span> К сожилению</label>
                    <label class="flex_row__cen item">
                        <input type="radio" name="questItem"><span class="bb"></span> Буду изучать</label>
                </form>
                <button>Голосовать сейчас</button>
            </div>
            <div class="col2 flex_col">
                <div class="title">Информировать Вас новостями агентсва?</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim animi itaque sapiente eligendi iste optio veritatis excepturi, ea, consectetur facere!</p>
                <div class="subscribe">
                    <input type="text" placeholder="Введите e-mail">
                    <button class="flex_col_cen_cen">
                        <svg width="20px" height="18px" viewBox="0 0 17 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>28</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-2955.000000, -1858.000000)" fill="#FFFFFF">
                                    <polygon id="28" points="2955 1872.398 2971.801 1865.199 2955 1858 2955 1863.602 2967 1865.199 2955 1866.801"></polygon>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="flex_row_beet_end last_pro"><span>Последнее<br>обновление сайта</span>  <span>29 Апрель 2017</span>
                </div>
            </div>
            <div class="col3 flex_col">
                <div class="title">Часто задаваемые вопросы</div>
                <a href="news.html">
                    <div class="ques flex_row__cen">
                        <div class="icon flex_col_cen_cen">?</div><span>Как известно, предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть</span>
                    </div>
                </a>
                <a href="news.html">
                    <div class="ques flex_row__cen">
                        <div class="icon flex_col_cen_cen">?</div><span>Как известно, предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть</span>
                    </div>
                </a>
                <a href="news.html">
                    <div class="ques flex_row__cen">
                        <div class="icon flex_col_cen_cen">?</div><span>Как известно, предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть</span>
                    </div>
                </a>
                <a href="news.html">
                    <div class="ques flex_row__cen">
                        <div class="icon flex_col_cen_cen">?</div><span>Как известно, предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть</span>
                    </div>
                </a>
                <a href="news.html">
                    <div class="ques flex_row__cen">
                        <div class="icon flex_col_cen_cen">?</div><span>Как известно, предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть</span>
                    </div>
                </a>
                <a href="news.html">
                    <div class="ques flex_row__cen">
                        <div class="icon flex_col_cen_cen">?</div><span>Как известно, предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть предвыборные лозунги отражают самую суть</span>
                    </div>
                </a>
                <div class="buttons flex_row_cen_end"><a href="#">База знаний</a>  <a href="#">Задать вопрос</a>
                </div>
            </div>
        </div>
    </div>
    <div class="scrollll">
        <div id="charts">
            <div class="medium_container" data-aos="zoom-in" data-aos-delay="300">
                <div class="slider-chart slider-tab-nav slider-nav" data-aos="zoom-in" data-aos-delay="300">
                    <div class="item">Интерактывные
                        <div class="ellipse"></div>
                    </div>
                    <div class="item">Электронное правительство
                        <div class="ellipse"></div>
                    </div>
                    <div class="item">Открытые данные
                        <div class="ellipse"></div>
                    </div>
                    <div class="item">Статистика и отчеты
                        <div class="ellipse"></div>
                    </div>
                    <div class="item">Электронные документы
                        <div class="ellipse"></div>
                    </div>
                </div>
                <div class="slider-for" data-aos="zoom-in" data-aos-delay="300">
                    <div class="chart_1 chart">
                        <canvas id="chart_1"></canvas>
                    </div>
                    <div class="chart_2 chart">
                        <canvas id="chart_2"></canvas>
                    </div>
                    <div class="chart_3 chart">
                        <canvas id="chart_3"></canvas>
                    </div>
                    <div class="chart_4 chart">
                        <canvas id="chart_4"></canvas>
                    </div>
                    <div class="chart_5 chart">
                        <canvas id="chart_5"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="homePageSlid4" style="background-color:#e1f7fa" data-aos="zoom-in" data-aos-delay="300">
        <div class="medium_container">
            <div class="title">
                <h3>Полезные ссылки и партнеры</h3>
                <p>Вы можете ознакомится с нашими партнерими и узнать чеми они зантмаются и еще мы предлагаем вам посмотреть полезных ссылок</p>
            </div>
            <div class="slidItems flex_col">
                <div class="item" data-aos="zoom-in" data-aos-delay="600">
                    <div>
                        <img src="{{ asset('front-end/media/img/44copy.png') }}" alt="">
                    </div>
                    <p>2017-год, год диалога с народом и игтересом человека</p>
                </div>
                <div class="item" data-aos="zoom-in" data-aos-delay="700">
                    <div>
                        <img src="{{ asset('front-end/media/img/43copy.png') }}" alt="">
                    </div>
                    <p>2017-год, год диалога с народом и игтересом человека</p>
                </div>
                <div class="item" data-aos="zoom-in" data-aos-delay="800">
                    <div>
                        <img src="{{ asset('front-end/media/img/42copy.png') }}" alt="">
                    </div>
                    <p>2017-год, год диалога с народом и игтересом человека</p>
                </div>
                <div class="item" data-aos="zoom-in" data-aos-delay="900">
                    <div>
                        <img src="{{ asset('front-end/media/img/39copy.png') }}" alt="">
                    </div>
                    <p>2017-год, год диалога с народом и игтересом человека</p>
                </div>
                <div class="item" data-aos="zoom-in" data-aos-delay="1000">
                    <div>
                        <img src="{{ asset('front-end/media/img/44copy.png') }}" alt="">
                    </div>
                    <p>2017-год, год диалога с народом и игтересом человека</p>
                </div>
                <div class="item">
                    <div>
                        <img src="{{ asset('front-end/media/img/44copy.png') }}" alt="">
                    </div>
                    <p>2017-год, год диалога с народом и игтересом человека</p>
                </div>
                <div class="item">
                    <div>
                        <img src="{{ asset('front-end/media/img/43copy.png') }}" alt="">
                    </div>
                    <p>2017-год, год диалога с народом и игтересом человека</p>
                </div>
            </div>
            <div class="arrows" style="position:absolute;opacity:0;left:-100px">
                <div class="leftArr">Left</div>
                <div class="rightArr">Left</div>
            </div>
        </div>
    </div>
</section>
@endsection