@extends('layouts.app')
@section('title', 'About us')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

    <section id="about_us">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="300">
                <h2>Об агентсве</h2><a href="{{ route('frontIndex') }}">Главная страница</a><span>Об агентсве</span>
            </div>
        </div>
    </div>
    <div class="medium_container">
        <div class="main_container block flex_row_beet_start">
            <div class="left_block">
                <div class="flex_row_end doc">
                    <div class="share">
                        <img src="{{ asset('front-end/media/img/svg/share.svg') }}" alt=""><a href="#" class="read_more">Поделитесь с друзями:</a>
                    </div>
                    <div class="print">
                        <img src="{{ asset('front-end/media/img/svg/print.svg') }}" alt=""><a href="#" class="read_more">Распечатать</a>
                    </div>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, numquam, voluptatum. Quod incidunt tempore minima! Hic dolorem porro odit at ut, dolores ducimus pariatur corporis harum sapiente magnam quisquam! Velit.
                        <br>
                        <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur esse fuga sit suscipit iure laborum laudantium autem fugit deserunt, voluptate vitae at veniam. Repellendus ipsam qui, odit debitis!</p>
                    <h2>Структура</h2>
                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut saepe dolorum,Ab aut saepe dolorum, consequatur doloribus maiores.</p>
                </div>
                <div class="structure flex_col">
                    <div class="big_c"><span>UzStandart Logo</span>
                    </div><span class="sub_big_c">Узбекское агентство стандартизации, метрологии и сертификации</span>
                    <div class="items flex_row floor1">
                        <div class="item">
                            <div class="img flex_col_cen_cen">
                                <img src="{{ asset('front-end/media/img/svg/cityscape.svg') }}" alt="">
                            </div><span class="sub_circle">ООО "Комфорт интернет сервис" Сариосиё</span>
                        </div>
                        <div class="item">
                            <div class="img flex_col_cen_cen">
                                <img src="{{ asset('front-end/media/img/svg/cityscape.svg') }}" alt="">
                            </div><span class="sub_circle">Завод Шеробод Гранит</span>
                        </div>
                        <div class="item">
                            <div class="img flex_col_cen_cen">
                                <img src="{{ asset('front-end/media/img/svg/cityscape.svg') }}" alt="">
                            </div><span class="sub_circle">ООО "Фабулло строй сервис" Жаркургон</span>
                        </div>
                        <div class="item">
                            <div class="img flex_col_cen_cen">
                                <img src="{{ asset('front-end/media/img/svg/cityscape.svg') }}" alt="">
                            </div><span class="sub_circle">ООО "Комфорт интернет сервис" Термиз</span>
                        </div>
                        <div class="item">
                            <div class="img flex_col_cen_cen">
                                <img src="{{ asset('front-end/media/img/svg/cityscape.svg') }}" alt="">
                            </div><span class="sub_circle">ООО "Мемор Архитектура сервис" Термиз</span>
                        </div>
                    </div>
                    <div class="items flex_row floor2">
                        <div class="item">
                            <div class="img flex_col_cen_cen">
                                <img src="{{ asset('front-end/media/img/svg/cityscape.svg') }}" alt="">
                            </div><span class="sub_circle">ООО "Комфорт интернет сервис" Сариосиё</span>
                        </div>
                        <div class="item">
                            <div class="img flex_col_cen_cen">
                                <img src="{{ asset('front-end/media/img/svg/cityscape.svg') }}" alt="">
                            </div><span class="sub_circle">Завод Шеробод Гранит</span>
                        </div>
                        <div class="item">
                            <div class="img flex_col_cen_cen">
                                <img src="{{ asset('front-end/media/img/svg/cityscape.svg') }}" alt="">
                            </div><span class="sub_circle">ООО "Фабулло строй сервис" Жаркургон</span>
                        </div>
                        <div class="item">
                            <div class="img flex_col_cen_cen">
                                <img src="{{ asset('front-end/media/img/svg/cityscape.svg') }}" alt="">
                            </div><span class="sub_circle">ООО "Комфорт интернет сервис" Термиз</span>
                        </div>
                        <div class="item">
                            <div class="img flex_col_cen_cen">
                                <img src="{{ asset('front-end/media/img/svg/cityscape.svg') }}" alt="">
                            </div><span class="sub_circle">ООО "Мемор Архитектура сервис" Термиз</span>
                        </div>
                    </div>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam saepe veritatis incidunt exercitationem neque officia sed, atque, aperiam repellendus libero quidem velit, similique eos dicta.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium obcaecati veritatis quasi sapiente impedit, itaque atque vero deserunt rem quam quisquam nobis at, nihil corrupti necessitatibus pariatur assumenda inventore
                        ducimus iusto? Ipsam adipisci, laudantium tenetur!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores praesentium in rerum iusto hic aliquam debitis neque provident error incidunt facilis eos qui totam nobis nesciunt ipsum sunt repudiandae quod doloremque unde sint
                        officia minima, perferendis nam. Harum, at sint! Saepe, consequatur est fugiat quas quo nobis tempore officia ipsum.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, nihil laudantium sapiente similique, omnis a.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias est soluta totam amet labore odio. Ut adipisci itaque asperiores eveniet animi similique.</li>
                </div>
                <div class="history">
                    <h2>История развития</h2>
                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut saepe dolorum,Ab aut saepe dolorum, consequatur doloribus maiores.</p>
                    <div class="slider_history flex_col">
                        <div class="slider-top flex_row_beet_cen">
                            <div class="year">1996</div>
                            <div class="year">1997</div>
                            <div class="year">1998</div>
                            <div class="year">1999</div>
                            <div class="year">2000</div>
                            <div class="year">2001</div>
                            <div class="year">2002</div>
                            <div class="year">2003</div>
                            <div class="year">2002</div>
                            <div class="year">2003</div>
                        </div>
                        <div class="slider-bottom">
                            <div class="slider">
                                <p>Losicing elit. Temporibus, ipsam, est. Corporis quam debitis sunt accusamus molestias eaque, voluptatem expedita.
                                    <br>
                                    <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis tempora est, ad quas sapiente saepe laboriosam hic, exercitationem ducimus magni, asperiores expedita illo nisi ea impedit distinctio ratione facilis.
                                    Delectus aut quis, explicabo natus molestias et aliquid libero neque similique, dolor, quibusdam. Quo quod natus maiores reiciendis aspernatur, odio ea. 1996</p>
                            </div>
                            <div class="slider">
                                <p>Lorem, est. Corporis quam debitis sunt accusamus molestias Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi necessitatibus a incidunt, maxime dolore commodi. eaque, voluptatem expedita. 1997
                                    <br>
                                    <br>
                                </p>
                            </div>
                            <div class="slider">
                                <p>Lorem sit amet, consectetur adipisicing elit. T Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque eum nesciunt architecto necessitatibus placeat enim, animi assumenda quasi earum asperiores deleniti reiciendis!
                                    Quibusdam provident porro similique accusamus iste architecto velit error ab quod nisi repellat minus, tenetur facilis earum, enim? emporibus, ipsam, est. Corporis quam debitis sunt accusamus molestias eaque, voluptatem
                                    expedita.
                                    <br>
                                    <br>aliquid libero neque similique, dolor, quibusdam. Quo quod natus maiores reiciendis aspernatur, odio ea. 1998</p>
                            </div>
                            <div class="slider">
                                <p>Loing elit. Temporibus, ipsam, est. Corporis quam debitis sunt accusamus molestias eaque, voluptatem expedita.
                                    <br>
                                    <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia vel ab doloribus possimus culpa, nisi ea reprehenderit accusamus distinctio minima! Quisquam in voluptatibus iusto quibusdam quis, possimus quos quaerat
                                    optio inventore. Velit eaque laboriosam nostrum. abo natus molestias et aliquid libero neque similique, dolor, quibusdam. Quo quod natus maiores reiciendis aspernatur, odio ea.</p>
                            </div>
                            <div class="slider">
                                <p>Lorem elit. Temporibus, ipsam, est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolor omnis cum tempore reprehenderit iure, asperiores similique in sint itaque est commodi repellat facilis porro
                                    corporis necessitatibus obcaecati, delectus atque! Quidem, explicabo ipsam! Corporis quam debitis sunt accusamus molestias eaque, voluptatem expedita.
                                    <br>
                                    <br>
                                </p>
                            </div>
                            <div class="slider">
                                <p>Lorem elit. Temporibus, ipsam, est. Corporis quam debitis sunt accusamus molestias eaque, voluptatem expedita.
                                    <br>
                                    <br>Lorexplicabo natus molestias et Lorem ipsum dolor sit amet, consectetur adipisicing elit. In assumenda accusamus facere iste, aliquam, earum suscipit quos, distinctio laboriosam exercitationem optio fuga. aliquid
                                    libero neque similique, dolor, quibusdam. Quo quod natus maiores reiciendis aspernatur, odio ea.</p>
                            </div>
                            <div class="slider">
                                <p>Lorem amet, consectetur adipisicing elit. Temporibus, ipsam, est. Corporis quam debitis sunt accusamus molestias eaque, voluptatem expedita.
                                    <br>
                                    <br>Lorexplicabo natus molestias et aliquid libero neque similique, dolor, quibusdam. Quo quod natus maiores reiciendis aspernatur, odio ea.</p>
                            </div>
                            <div class="slider">
                                <p>Lorem ipsum ipisicing elit. Temporibus, ipsam, est. Corporis quam debitis sunt accusamus molestias eaque, voluptatem expedita.
                                    <br>
                                    <br>Lorexplicabo natus molestias et aliquid libero neque similique, dolor, quibusdam. Quo quod natus maiores reiciendis aspernatur, odio ea.</p>
                            </div>
                            <div class="slider">
                                <p>Loremectetur adipisicing elit. Temporibus, ipsam, est. Corporis quam debitis sunt accusamus molestias eaque, voluptatem expedita.
                                    <br>
                                    <br>Lorexplicabo natus molestias et aliquid libero neque similique, dolor, quibusdam. Quo quod natus maiores reiciendis aspernatur, odio ea.</p>
                            </div>
                            <div class="slider">
                                <p>Lorem ipsumonsectetur adipisicing elit. Temporibus, ipsam, est. Corporis quam debitis sunt accusamus molestias eaque, voluptatem expedita.
                                    <br>
                                    <br>Lorem ipsum doloebo natus molestias et aliquid libero neque similique, dolor, quibusdam. Quo quod natus maiores reiciendis aspernatur, odio ea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <p>a) Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, numquam, voluptatum. Quod incidunt tempore minima! Hic dolorem porro odit at ut, dolores ducimus pariatur corporis harum sapiente magnam quisquam! Velit.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur esse fuga sit suscipit iure laborum laudantium autem fugit deserunt, voluptate vitae at veniam. Repellendus ipsam qui, odit debitis!</p>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam saepe veritatis incidunt exercitationem neque officia sed, atque, aperiam repellendus libero quidem velit, similique eos dicta.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium obcaecati veritatis quasi sapiente impedit, itaque atque vero deserunt rem quam quisquam nobis at, nihil corrupti necessitatibus pariatur assumenda inventore
                            ducimus iusto? Ipsam adipisci, laudantium tenetur!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores praesentium in rerum iusto hic aliquam debitis neque provident error incidunt facilis eos qui totam nobis nesciunt ipsum sunt repudiandae quod doloremque unde
                            sint officia minima, perferendis nam. Harum, at sint! Saepe, consequatur est fugiat quas quo nobis tempore officia ipsum.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, nihil laudantium sapiente similique, omnis a.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias est soluta totam amet labore odio. Ut adipisci itaque asperiores eveniet animi similique.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam saepe veritatis incidunt exercitationem neque officia sed, atque, aperiam repellendus libero quidem velit, similique eos dicta.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium obcaecati veritatis quasi sapiente impedit, itaque atque vero deserunt rem quam quisquam nobis at, nihil corrupti necessitatibus pariatur assumenda inventore
                            ducimus iusto? Ipsam adipisci, laudantium tenetur!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores praesentium in rerum iusto hic aliquam debitis neque provident error incidunt facilis eos qui totam nobis nesciunt ipsum sunt repudiandae quod doloremque unde
                            sint officia minima, perferendis nam. Harum, at sint! Saepe, consequatur est fugiat quas quo nobis tempore officia ipsum.</li>
                        <p>b) Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, numquam, voluptatum. Quod incidunt tempore minima! Hic dolorem porro odit at ut, dolores ducimus pariatur corporis harum sapiente magnam quisquam! Velit.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur esse fuga sit suscipit iure laborum laudantium autem fugit deserunt, voluptate vitae at veniam. Repellendus ipsam qui, odit debitis!</p>
                        <br>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam saepe veritatis incidunt exercitationem neque officia sed, atque, aperiam repellendus libero quidem velit, similique eos dicta.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium obcaecati veritatis quasi sapiente impedit, itaque atque vero deserunt rem quam quisquam nobis at, nihil corrupti necessitatibus pariatur assumenda inventore
                            ducimus iusto? Ipsam adipisci, laudantium tenetur!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores praesentium in rerum iusto hic aliquam debitis neque provident error incidunt facilis eos qui totam nobis nesciunt ipsum sunt repudiandae quod doloremque unde
                            sint officia minima, perferendis nam. Harum, at sint! Saepe, consequatur est fugiat quas quo nobis tempore officia ipsum.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, nihil laudantium sapiente similique, omnis a.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias est soluta totam amet labore odio. Ut adipisci itaque asperiores eveniet animi similique.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam saepe veritatis incidunt exercitationem neque officia sed, atque, aperiam repellendus libero quidem velit, similique eos dicta.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium obcaecati veritatis quasi sapiente impedit, itaque atque vero deserunt rem quam quisquam nobis at, nihil corrupti necessitatibus pariatur assumenda inventore
                            ducimus iusto? Ipsam adipisci, laudantium tenetur!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores praesentium in rerum iusto hic aliquam debitis neque provident error incidunt facilis eos qui totam nobis nesciunt ipsum sunt repudiandae quod doloremque unde
                            sint officia minima, perferendis nam. Harum, at sint! Saepe, consequatur est fugiat quas quo nobis tempore officia ipsum.</li>
                        <p>c) Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, numquam, voluptatum. Quod incidunt tempore minima! Hic dolorem porro odit at ut, dolores ducimus pariatur corporis harum sapiente magnam quisquam! Velit.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur esse fuga sit suscipit iure laborum laudantium autem fugit deserunt, voluptate vitae at veniam. Repellendus ipsam qui, odit debitis!</p>
                        <br>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam saepe veritatis incidunt exercitationem neque officia sed, atque, aperiam repellendus libero quidem velit, similique eos dicta.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium obcaecati veritatis quasi sapiente impedit, itaque atque vero deserunt rem quam quisquam nobis at, nihil corrupti necessitatibus pariatur assumenda inventore
                            ducimus iusto? Ipsam adipisci, laudantium tenetur!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores praesentium in rerum iusto hic aliquam debitis neque provident error incidunt facilis eos qui totam nobis nesciunt ipsum sunt repudiandae quod doloremque unde
                            sint officia minima, perferendis nam. Harum, at sint! Saepe, consequatur est fugiat quas quo nobis tempore officia ipsum.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, nihil laudantium sapiente similique, omnis a.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias est soluta totam amet labore odio. Ut adipisci itaque asperiores eveniet animi similique.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam saepe veritatis incidunt exercitationem neque officia sed, atque, aperiam repellendus libero quidem velit, similique eos dicta.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium obcaecati veritatis quasi sapiente impedit, itaque atque vero deserunt rem quam quisquam nobis at, nihil corrupti necessitatibus pariatur assumenda inventore
                            ducimus iusto? Ipsam adipisci, laudantium tenetur!</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores praesentium in rerum iusto hic aliquam debitis neque provident error incidunt facilis eos qui totam nobis nesciunt ipsum sunt repudiandae quod doloremque unde
                            sint officia minima, perferendis nam. Harum, at sint! Saepe, consequatur est fugiat quas quo nobis tempore officia ipsum.</li>
                    </div>
                </div>
            </div>
            <div class="right_block">
                <div class="category flex_col_start" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('frontAboutUs') }}" class="active">Общая информация</a>
                    <a href="{{ route('frontAdmStructure') }}">Вышестоящий орган</a>
                    <a href="{{ route('frontLeadership') }}">Руководство</a>
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
                    <button type="button" class="vote">Голосовать</button>
                    <span class="down_up"><img src="{{ asset('front-end/media/img/svg/down_up.svg') }}" alt=""></span>
                </div>
                <div class="adv_banner desk">
                    <img src="{{ asset('front-end/media/img/reklama1.png') }}" alt="" data-aos="fade-up" data-aos-delay="300">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
