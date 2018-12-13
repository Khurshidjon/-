@extends('layouts.app')
@section('title', 'Leadership')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="leadership">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="300">
                <h2>Руководство</h2><a href="index.html">Главная страница</a><span>Руководство</span>
            </div>
        </div>
    </div>
    <div class="medium_container">
        <div class="main_container block flex_row">
            <div class="left_block">
                <div class="box">
                    <div class="passport flex_row">
                        <img src="{{ asset('front-end/media/img/person.png') }}" alt="">
                        <div class="info flex_col">
                            <div class="flex_col resp"><span class="position">Генеральный директор</span>  <span class="name">Каримов Абдухамид Уткурович</span>
                            </div>
                            <div class="phone flex_row_beet_cen"><span class="icon1 icon">Телефон:</span><span class="f_s">+998(371) 202-00-11</span>
                            </div>
                            <div class="reception flex_row_beet_cen"><span class="icon2 icon">Приемные дни:</span><span class="f_s">Вт. Чг. с 08-00 до 11-00</span>
                            </div>
                            <div class="mail flex_row_beet_cen"><span class="icon3 icon">Электронная почта:</span><span class="f_s">uzst@standart.uz</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab_passport_1">
                        <div class="tab-nav"><a href="#" data-tab="tab-1" class="active">Трудовая деятельность</a>  <a href="#" data-tab="tab-2">Должностные обязанности</a>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi dolores rerum, aliquid culpa est, fuga ea laboriosam in soluta odit! Eaque id, quos architecto cupiditate temporibus, sapiente molestias cumque distinctio
                                ab vitae repellendus, nam! Laboriosam inventore nulla impedit ut aut! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum,
                                animi, ea, commodi, velit quo accusamus tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur
                                voluptatem, excepturi? ipsum dolor sit amet, consectetur adipisicing elit. Iure tempora, ullam impedit officiis quisquam illo laudantium minus, totam est maxime. Distinctio mollitia minima voluptatibus, iste fugiat
                                itaque dignissimos consequuntur ipsam facere cum tenetur nostrum obcaecati voluptas blanditiis velit? Maiores repellat deleniti dolores quisquam facere blanditiis explicabo itaque libero pariatur! Sunt. Lorem ipsum
                                dolor sit amet, cons nulla impedit ut aut! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum, animi, ea, commodi,
                                velit quo accusamus tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur voluptatem,
                                excepturi? ipsum dolor sit amet, consectetur adipisicing elit. Iure tempora, ullam impedit officiis quisquam illo laudantium minus, totam est maxime. Distinctio mollitia</div>
                            <div class="tab-pane" id="tab-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure tempora, ullam impedit officiis quisquam illo laudantium minus, totam est maxime. Distinctio mollitia minima voluptatibus, iste fugiat itaque dignissimos consequuntur
                                ipsam facere cum tenetur nostrum obcaecati voluptas blanditiis velit? Maiores repellat deleniti dolores quisquam facere blanditiis explicabo itaque libero pariatur! Sunt. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum, animi, ea, commodi, velit quo accusamus tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam
                                laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur voluptatem, excepturi? iis velit? Maiores repellat deleniti dolores quisquam facere blanditiis explicabo itaque
                                libero pariatur! Sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum, animi, ea, commodi, velit quo accusamus
                                tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur voluptat</div>
                            <div class="load_more flex_col">
                                <div class="overlay"></div>
                                <div class="overlay1"></div>
                                <div class="line flex_col_cen_cen">
                                    <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="passport flex_row">
                        <img src="{{ asset('front-end/media/img/person.png') }}" alt="">
                        <div class="info flex_col">
                            <div class="flex_col resp"><span class="position">Генеральный директор</span>  <span class="name">Каримов Абдухамид Уткурович</span>
                            </div>
                            <div class="phone flex_row_beet_cen"><span class="icon1 icon">Телефон:</span><span class="f_s">+998(371) 202-00-11</span>
                            </div>
                            <div class="reception flex_row_beet_cen"><span class="icon2 icon">Приемные дни:</span><span class="f_s">Вт. Чг. с 08-00 до 11-00</span>
                            </div>
                            <div class="mail flex_row_beet_cen"><span class="icon3 icon">Электронная почта:</span><span class="f_s">uzst@standart.uz</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab_passport_1">
                        <div class="tab-nav"><a href="#" data-tab="tab-3" class="active">Трудовая деятельность</a>  <a href="#" data-tab="tab-4">Должностные обязанности</a>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi dolores rerum, aliquid culpa est, fuga ea laboriosam in soluta odit! Eaque id, quos architecto cupiditate temporibus, sapiente molestias cumque distinctio
                                ab vitae repellendus, nam! Laboriosam inventore nulla impedit ut aut! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum,
                                animi, ea, commodi, velit quo accusamus tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur
                                voluptatem, excepturi? ipsum dolor sit amet, consectetur adipisicing elit. Iure tempora, ullam impedit officiis quisquam illo laudantium minus, totam est maxime. Distinctio mollitia minima voluptatibus, iste fugiat
                                itaque dignissimos consequuntur ipsam facere cum tenetur nostrum obcaecati voluptas blanditiis velit? Maiores repellat deleniti dolores quisquam facere blanditiis explicabo itaque libero pariatur! Sunt. Lorem ipsum
                                dolor sit amet, cons nulla impedit ut aut! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum, animi, ea, commodi,
                                velit quo accusamus tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur voluptatem,
                                excepturi? ipsum dolor sit amet, consectetur adipisicing elit. Iure tempora, ullam impedit officiis quisquam illo laudantium minus, totam est maxime. Distinctio mollitia</div>
                            <div class="tab-pane" id="tab-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure tempora, ullam impedit officiis quisquam illo laudantium minus, totam est maxime. Distinctio mollitia minima voluptatibus, iste fugiat itaque dignissimos consequuntur
                                ipsam facere cum tenetur nostrum obcaecati voluptas blanditiis velit? Maiores repellat deleniti dolores quisquam facere blanditiis explicabo itaque libero pariatur! Sunt. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum, animi, ea, commodi, velit quo accusamus tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam
                                laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur voluptatem, excepturi? iis velit? Maiores repellat deleniti dolores quisquam facere blanditiis explicabo itaque
                                libero pariatur! Sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nobis amet quas maxime assumenda eum deserunt. Culpa itaque molestiae obcaecati laborum, animi, ea, commodi, velit quo accusamus
                                tempora veritatis officia. Ipsum, ratione, architecto! Dolores minus, ullam laborum sit iusto fugiat unde aperiam nam vel aliquid, at animi, odit. Error neque dolor, eius consequatur voluptat</div>
                            <div class="load_more flex_col">
                                <div class="overlay"></div>
                                <div class="overlay1"></div>
                                <div class="line flex_col_cen_cen">
                                    <img src="{{ asset('front-end/media/img/svg/downarrow.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_row_cen_end">
                    <div class="share">
                        <img src="{{ asset('front-end/media/img/svg/share.svg') }}" alt=""><a href="#" class="read_more">Поделитесь с друзями:</a>
                    </div>
                    <div class="print">
                        <img src="{{ asset('front-end/media/img/svg/print.svg') }}" alt=""><a href="#" class="read_more">Распечатать</a>
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
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('frontAboutUs') }}" >Общая информация</a>
                    <a href="{{ route('frontAdmStructure') }}">Вышестоящий орган</a>
                    <a href="{{ route('frontLeadership') }}" class="active">Руководство</a>
                    <a href="{{ route('frontCenterApparat') }}">Центральный аппарат</a>
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