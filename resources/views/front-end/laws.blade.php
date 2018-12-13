@extends('layouts.app')
@section('title', 'Laws')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="laws_page">
    <div class="small_banner calendar">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="300">
                <h2>Законы Республики Узбекистан</h2><a href="{{ route('frontIndex') }}">Главная страница</a><span>Законы Республики Узбекистан</span>
            </div>
            <div class="filter flex_row__cen" data-aos="fade-left" data-aos-delay="300">
                <h6>Фильтр</h6>
                <input type="text" class="datepicker-here dtpAir">
                <input type="text" class="datepicker-here dtpAirr">
                <button type="button">OK</button>
            </div>
        </div>
    </div>
    <div class="medium_container">
        <div class="main_container block flex_row">
            <div class="left_block" data-aos="fade-right" data-aos-delay="300">
                <div class="wrap flex_row">
                    <div class="flex_row_beet_cen left">
                        <a href="{{ route('frontDocuments') }}" class="text">Закон Республики Узбекистан "О государственныхон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государ закупках"</a>
                        <div class="flex_col_end">
                            <a href="#" class="down_file flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/downloading.svg') }}" alt=""><span>Скачать</span>
                            </a> <span class="size">237.59 КВ</span>
                        </div>
                    </div>
                    <div class="download flex_row">
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/doc.svg') }}" alt="">
                        </a>
                        <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="" class="down">
                        <div class="other_format flex_row_beet_cen flex_wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/zip.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pdf2.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/xlsx.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pptx.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="flex_row_beet_cen left">
                        <a href="{{ route('frontDocuments') }}" class="text">Закон Республики Узбекистан "О государственныхон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государ закупках"</a>
                        <div class="flex_col_end">
                            <a href="#" class="down_file flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/downloading.svg') }}" alt=""><span>Скачать</span>
                            </a> <span class="size">237.59 КВ</span>
                        </div>
                    </div>
                    <div class="download flex_row">
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/doc.svg') }}" alt="">
                        </a>
                        <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="" class="down">
                        <div class="other_format flex_row_beet_cen flex_wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/zip.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pdf2.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/xlsx.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pptx.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="flex_row_beet_cen left">
                        <a href="{{ route('frontDocuments') }}" class="text">Закон Республики Узбекистан "О государственныхон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государ закупках"</a>
                        <div class="flex_col_end">
                            <a href="#" class="down_file flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/downloading.svg') }}" alt=""><span>Скачать</span>
                            </a> <span class="size">237.59 КВ</span>
                        </div>
                    </div>
                    <div class="download flex_row">
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/doc.svg') }}" alt="">
                        </a>
                        <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="" class="down">
                        <div class="other_format flex_row_beet_cen flex_wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/zip.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pdf2.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/xlsx.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pptx.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="flex_row_beet_cen left">
                        <a href="{{ route('frontDocuments') }}" class="text">Закон Республики Узбекистан "О государственныхон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государ закупках"</a>
                        <div class="flex_col_end">
                            <a href="#" class="down_file flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/downloading.svg') }}" alt=""><span>Скачать</span>
                            </a> <span class="size">237.59 КВ</span>
                        </div>
                    </div>
                    <div class="download flex_row">
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/doc.svg') }}" alt="">
                        </a>
                        <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="" class="down">
                        <div class="other_format flex_row_beet_cen flex_wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/zip.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pdf2.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/xlsx.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pptx.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="flex_row_beet_cen left">
                        <a href="{{ route('frontDocuments') }}" class="text">Закон Республики Узбекистан "О государственныхон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государ закупках"</a>
                        <div class="flex_col_end">
                            <a href="#" class="down_file flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/downloading.svg') }}" alt=""><span>Скачать</span>
                            </a> <span class="size">237.59 КВ</span>
                        </div>
                    </div>
                    <div class="download flex_row">
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/doc.svg') }}" alt="">
                        </a>
                        <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="" class="down">
                        <div class="other_format flex_row_beet_cen flex_wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/zip.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pdf2.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/xlsx.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pptx.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="flex_row_beet_cen left">
                        <a href="{{ route('frontDocuments') }}" class="text">Закон Республики Узбекистан "О государственныхон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государ закупках"</a>
                        <div class="flex_col_end">
                            <a href="#" class="down_file flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/downloading.svg') }}" alt=""><span>Скачать</span>
                            </a> <span class="size">237.59 КВ</span>
                        </div>
                    </div>
                    <div class="download flex_row">
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/doc.svg') }}" alt="">
                        </a>
                        <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="" class="down">
                        <div class="other_format flex_row_beet_cen flex_wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/zip.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pdf2.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/xlsx.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pptx.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="flex_row_beet_cen left">
                        <a href="{{ route('frontDocuments') }}" class="text">Закон Республики Узбекистан "О государственныхон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государ закупках"</a>
                        <div class="flex_col_end">
                            <a href="#" class="down_file flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/downloading.svg') }}" alt=""><span>Скачать</span>
                            </a> <span class="size">237.59 КВ</span>
                        </div>
                    </div>
                    <div class="download flex_row">
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/doc.svg') }}" alt="">
                        </a>
                        <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="" class="down">
                        <div class="other_format flex_row_beet_cen flex_wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/zip.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pdf2.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/xlsx.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pptx.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="flex_row_beet_cen left">
                        <a href="{{ route('frontDocuments') }}" class="text">Закон Республики Узбекистан "О государственныхон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государ закупках"</a>
                        <div class="flex_col_end">
                            <a href="#" class="down_file flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/downloading.svg') }}" alt=""><span>Скачать</span>
                            </a> <span class="size">237.59 КВ</span>
                        </div>
                    </div>
                    <div class="download flex_row">
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/doc.svg') }}" alt="">
                        </a>
                        <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="" class="down">
                        <div class="other_format flex_row_beet_cen flex_wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/zip.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pdf2.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/xlsx.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pptx.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="flex_row_beet_cen left">
                        <a href="{{ route('frontDocuments') }}" class="text">Закон Республики Узбекистан "О государственныхон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государ закупках"</a>
                        <div class="flex_col_end">
                            <a href="#" class="down_file flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/downloading.svg') }}" alt=""><span>Скачать</span>
                            </a> <span class="size">237.59 КВ</span>
                        </div>
                    </div>
                    <div class="download flex_row">
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/doc.svg') }}" alt="">
                        </a>
                        <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="" class="down">
                        <div class="other_format flex_row_beet_cen flex_wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/zip.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pdf2.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/xlsx.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pptx.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="wrap flex_row">
                    <div class="flex_row_beet_cen left">
                        <a href="{{ route('frontDocuments') }}" class="text">Закон Республики Узбекистан "О государственныхон Республики Узбекистан "О государон Республики Узбекистан "О государон Республики Узбекистан "О государон Республн Республикин Республикин Республикин Республикин Республикин Республикин ики Узбекистан "О государ закупках"</a>
                        <div
                                class="flex_col_end">
                            <a href="#" class="down_file flex_row__cen">
                                <img src="{{ asset('front-end/media/img/svg/downloading.svg') }}" alt=""><span>Скачать</span>
                            </a> <span class="size">237.59 КВ</span>
                        </div>
                    </div>
                    <div class="download flex_row">
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/doc.svg') }}" alt="">
                        </a>
                        <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="" class="down">
                        <div class="other_format flex_row_beet_cen flex_wrap">
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/zip.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pdf2.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/xlsx.svg') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front-end/media/img/svg/pptx.svg') }}" alt="">
                            </a>
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
                        <button type="button" class="vote">Голосовать</button> <span class="down_up"><img src="{{ asset('front-end/media/img/svg/down_up.svg') }}" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="right_block">
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="300"><a href="#" class="active">Законы Республики Узбекистан</a>  <a href="#">Указы и постонавления Президента Республики Узбекистан</a>  <a href="#">Постонавления и распоряжения Кабинета</a>  <a href="#">Законы Республики Узбекистан</a>  <a href="#">Указы и постонавления Президента Республики Узбекистан</a>
                    <a
                            href="#">Постонавления и распоряжения Кабинета</a> <a href="#">Аналитические данные</a>
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