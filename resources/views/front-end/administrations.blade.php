@extends('layouts.app')
@section('title', 'Administrations')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

    @php
    $lang = App::getLocale();
@endphp
<section id="administartions" class="adm_block">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="300">
                <h2>Территориальные управления</h2><a href="#">Главная страница</a><span>Руководство</span>
            </div>
        </div>
    </div>
    @foreach($organs as $organ)
        <div class="item" data-aos="fade-up" data-aos-delay="200">
            <div class="medium_container flex_row">
                <div class="left flex_row_end_cen">
                    <div class="img flex_col_cen_cen">
                        <img src="{{ asset('storage/') .'/'. $organ->organ_photo}}" alt="" class="circle">
                    </div>
                    <div class="info flex_col">
                        <a href="tel:{{ $organ->phone_number }}" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/telephone.svg') }}" alt="">
                            {{ $organ->phone_number }}
                        </a>
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/faks.svg') }}" alt="">
                            {{ $organ->fax_number }}
                        </a>
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/www.svg') }}" alt="">
                            {{ $organ->email  }}
                        </a>
                        <a href="#" class="flex_row">
                            <img src="{{ asset('front-end/media/img/svg/a.svg') }}" alt="">
                            {{ $organ->exat_standart_uz }}
                        </a>
                    </div>
                </div>
                <div class="right flex_col">
                    <a href="{{ route('frontAdmContact') }}">
                        <h3>
                            @if($lang == 'uz')
                                {{ $organ->organ_name_uz }}
                            @elseif($lang == 'en')
                                {{ $organ->organ_name_en }}
                            @elseif($lang == 'ru')
                                {{ $organ->organ_name_ru }}
                            @elseif($lang == 'cyrl')
                                {{ $organ->organ_name_cyrl }}
                            @endif
                        </h3>
                        <span class="name">
                            Начальник отдела:
                            @foreach($organ->workers as $worker)
                                @if($worker->rank_id  == 1)
                                    @if($lang == 'uz')
                                        {{ $worker->worker_name_uz }}
                                    @elseif($lang == 'en')
                                        {{ $worker->worker_name_en }}
                                    @elseif($lang == 'ru')
                                        {{ $worker->worker_name_ru }}
                                    @elseif($lang == 'cyrl')
                                        {{ $worker->worker_name_cyrl }}
                                    @endif
                                @endif
                            @endforeach
                        </span>
                    </a>
                    <div class="flex_row">
                        <div class="flex_col"><span>Новости: </span><span>Вакансии: </span><span>Активность:</span>
                        </div>
                        <div class="flex_col statistica"><span>900</span>  <span>3</span>  <span>22%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>

@endsection