@extends('layouts.app')
@section('title', 'Documents')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="document_page" class="shablon2_news">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="300">
                <h2>Страница с документами для загрузки</h2><a href="{{ route('frontIndex') }}">Главная страница</a><span>Документы</span>
            </div>
        </div>
    </div>
    <div class="medium_container">
        <div class="main_container block flex_row">
            <div class="left_block">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga optio ratione magni, repellat doloremque ipsam ducimus in, perspiciatis. Quo, nostrum assumenda. Molestiae nobis aperiam, possimus rem animi tempore expedita, reiciendis
                        laborum quia odio sequi magni laudantium quo ullam dignissimos incidunt eum quam iure perferendis est corporis repellat iusto culpa. Sint neque cumque labore accusantium consectetur quas, eos omnis ab saepe blanditiis esse
                        est qui consequatur.</p>
                </div>
                <div class="download_doc flex_row_beet_cen">
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    </div>
                    <div class="icon_pdf flex_row_cen_end"><a href="#">Скачать</a>  <span>200 kb .pdf <img src="{{ asset('front-end/media/img/svg/pdf.svg') }}" alt=""></span>
                    </div>
                </div>
                <div class="download_doc flex_row_beet_cen">
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quo nemo esse excepturi exercitationem doloremque praesentium qui neque ipsam animi?</p>
                    </div>
                    <div class="icon_pdf flex_row_cen_end"><a href="#">Скачать</a>  <span>200 kb .pdf <img src="{{ asset('front-end/media/img/svg/pdf.svg') }}" alt=""></span>
                    </div>
                </div>
                <div class="download_doc flex_row_beet_cen">
                    <div class="text">
                        <p>Lorem ipsumlorem5 dolor sit amet, consectetur adipisicing elit. Quaerat quo nemo esse excepturi exercitationem doloremque praesentium qui neque ipsam animi?</p>
                    </div>
                    <div class="icon_pdf flex_row_cen_end"><a href="#">Скачать</a>  <span>200 kb .pdf <img src="{{ asset('front-end/media/img/svg/pdf.svg') }}" alt=""></span>
                    </div>
                </div>
                <div class="download_doc flex_row_beet_cen">
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat qutur adipisicing elit. Quaerao nemo esse excepturi exercitationem doloremque praesentium qui neque ipsam animi?</p>
                    </div>
                    <div class="icon_pdf flex_row_cen_end"><a href="#">Скачать</a>  <span>200 kb .pdf <img src="{{ asset('front-end/media/img/svg/pdf.svg') }}" alt=""></span>
                    </div>
                </div>
                <div class="download_doc flex_row_beet_cen">
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetu ipsam animi?</p>
                    </div>
                    <div class="icon_pdf flex_row_cen_end"><a href="#">Скачать</a>  <span>200 kb .pdf <img src="{{ asset('front-end/media/img/svg/pdf.svg') }}" alt=""></span>
                    </div>
                </div>
                <div class="download_doc flex_row_beet_cen">
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quo nemo esse excepturi exercitationem doloremque praesentium qui neque ipsam animi?</p>
                    </div>
                    <div class="icon_pdf flex_row_cen_end"><a href="#">Скачать</a>  <span>200 kb .pdf <img src="{{ asset('front-end/media/img/svg/pdf.svg') }}" alt=""></span>
                    </div>
                </div>
                <div class="download_doc flex_row_beet_cen">
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quo nemo esse excepturi exercitationem doloremque praesentium qui neque ipsam animi?</p>
                    </div>
                    <div class="icon_pdf flex_row_cen_end"><a href="#">Скачать</a>  <span>200 kb .pdf <img src="{{ asset('front-end/media/img/svg/pdf.svg') }}" alt=""></span>
                    </div>
                </div>
                <div class="download_doc flex_row_beet_cen">
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quo nemo esse excepturi exercitationem doloremque praesentium qui neque ipsam animi?</p>
                    </div>
                    <div class="icon_pdf flex_row_cen_end"><a href="#">Скачать</a>  <span>200 kb .pdf <img src="{{ asset('front-end/media/img/svg/pdf.svg') }}" alt=""></span>
                    </div>
                </div>
                <div class="flex_row_beet_cen padd_tx20">
                    <div class="flex_row">
                        <div class="news_time flex_row__cen">
                            <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>02 Май 2018</span>
                        </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">2000</span>
                    </div>
                    <div class="flex_row">
                        <div class="print">
                            <img src="{{ asset('front-end/media/img/svg/print.svg') }}" alt=""><a href="#" class="read_more">Распечатать</a>
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
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="300"><a href="#">Пресс-релиз</a>  <a href="#">Анонсы и тендеры</a>  <a href="#">Видео галерея</a>  <a href="#">Фото галерея</a>  <a href="#" class="active">Новости</a>  <a href="#">Публикации</a>  <a href="#">Аккредитация</a>  <a href="#">представителей СМИ</a>
                    <a
                            href="#">Аналитические данные</a> <a href="#">Показатели отрасли</a>
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('front-end/media/img/reklama1.png') }}" alt="">
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('front-end/media/img/reklama2.png') }}" alt="">
                </div>
                <div class="social_survey desk" data-aos="fade-up" data-aos-delay="300">
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