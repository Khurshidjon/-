@extends('layouts.app')
@section('title', 'Apparat')
@section('content')
    @php
        $lang = App::getLocale();
        $d = 0;
        $f = 0;
    @endphp
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="apparat">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="300">
                <h2>Центральный аппарат</h2><a href="{{ route('frontIndex') }}">Главная страница</a><span>Центральный аппарат</span>
            </div>
        </div>
    </div>
    <div class="medium_container">
        <div class="main_container flex_row">
            <div class="left_block">
                @foreach($workers as $worker)
                    @php
                        $d++;
                        $f++;
                    @endphp
                    <div class="block">
                        <div class="passport flex_row__start">
                            <img src="{{ asset('storage/') .'/'. $worker->worker_photo}}" alt="" class="person">
                            <div class="info flex_col">
                                @if($lang == 'uz')
                                    <span class="name">{{ $worker->worker_name_uz }}</span>
                                    <span class="position">{{ $worker->rank_name_uz }}</span>
                                @elseif($lang == 'en')
                                    <span class="name">{{ $worker->worker_name_en }}</span>
                                    <span class="position">{{ $worker->rank_name_en }}</span>
                                @elseif($lang == 'ru')
                                    <span class="name">{{ $worker->worker_name_ru }}</span>
                                    <span class="position">{{ $worker->rank_name_ru }}</span>
                                @elseif($lang == 'cyrl')
                                    <span class="name">{{ $worker->worker_name_cyrl }}</span>
                                    <span class="position">{{ $worker->rank_name_cyrl }}</span>
                                @endif
                                <div class="flex_row_beet_cen">
                                    <div class="phone flex_col__start">
                                        <div class="icon flex_col">
                                            <img src="{{ asset('front-end/media/img/svg/phone.svg') }}" alt=""><span>Телефон:</span>
                                        </div>
                                        <span class="f_s"><a href="tel:{{ $worker->phone_number }}">{{ $worker->phone_number }}</a></span>
                                    </div>
                                    <div class="reception flex_col__start">
                                        <div class="icon flex_col">
                                            <img src="{{ asset('front-end/media/img/svg/priyom.svg') }}" alt=""><span>Приемные дни:</span>
                                        </div><span class="f_s">Вт. Чг. с 08-00 до 11-00</span>
                                    </div>
                                    <div class="mail flex_col__start">
                                        <div class="icon flex_col">
                                            <img src="{{ asset('front-end/media/img/svg/mail.svg') }}" alt=""><span>Электронная почта:</span>
                                        </div>
                                        <span class="f_s"><a href="mailto:{{ $worker->worker_email }}">{{ $worker->worker_email }}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab1">
                            <div class="tab-nav flex_row">
                                    <a href="#" data-tab="tab-{{ $d }}">Должностные обязанности</a>
                                    <a href="#" data-tab="tab-{{ $d += 1 }}">Биография</a>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="tab-{{ $f }}">
                                    @if($lang == 'uz')
                                        {{ $worker->commitment_uz }}
                                    @elseif($lang == 'en')
                                        {{ $worker->commitment_en }}
                                    @elseif($lang == 'ru')
                                        {{ $worker->commitment_ru }}
                                    @elseif($lang == 'cyrl')
                                        {{ $worker->commitment_cyrl }}
                                    @endif
                                </div>
                                <div class="tab-pane" id="tab-{{ $f += 1 }}">
                                    @if($lang == 'uz')
                                        {{ $worker->biography_uz }}
                                    @elseif($lang == 'en')
                                        {{ $worker->biography_en }}
                                    @elseif($lang == 'ru')
                                        {{ $worker->biography_ru }}
                                    @elseif($lang == 'cyrl')
                                        {{ $worker->biography_cyrl }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('frontAboutUs') }}">Общая информация</a>
                    <a href="{{ route('frontAdmStructure') }}">Вышестоящий орган</a>
                    <a href="{{ route('frontLeadership') }}">Руководство</a>
                    <a href="{{ route('frontCenterApparat') }}" class="active">Центральный аппарат</a>
                    <a href="{{ route('frontAdminsitration') }}">Территориальные управления</a>
                </div>
                <div class="adv_banner desk" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('front-end/media/img/reklama3.png') }}" alt="">
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