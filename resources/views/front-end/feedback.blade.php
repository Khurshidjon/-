@extends('layouts.app')
@section('title', 'Feedback')
@section('content')
    <script>
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Female');
            });
        })
    </script>
    <button class="btn" id="getText"><i class="fas fa-volume-up"></i></button>

<section id="Сontact" class="feedback">
    <div class="small_banner">
        <div class="bg_shape"></div>
        <div class="medium_container flex_row_beet_cen">
            <div class="content" data-aos="fade-right" data-aos-delay="300">
                <h2>Обратный связь и контакты агентсвы</h2><a href="#">Главная страница</a><span>Контакты</span>
            </div>
        </div>
    </div>
    <div class="medium_container" data-aos="fade-up" data-aos-delay="300">
        <div class="block1">
            <h3>Центральный аппарат:</h3>
            <div class="items flex_row">
                <div class="item flex_col"><span class="title">Адрес:</span>  <span>100049, Ташкент. Метро: станция Беруни "Standart" bekati Фараби, 333 "A"</span>  <span>Ориентир: Станция - Беруний (ташкент метро)</span>  <span>Автобусы: № 14,10,88,131</span>
                </div>
                <div class="item flex_col"><span class="title">Телефон:</span>  <span>Горячая линия: <span class="f16">150-23-00</span></span> <span>Канцелярия: <span class="f16">(998-71) 246-37-78</span></span> <span>Тел/Факс: <span class="f16">(998-71) 246-17-63</span></span>
                </div>
                <div class="item flex_col"><span class="title">Режим работы:</span>  <span>Понедельник - пятница: 09:00 - 18:00</span>  <span>Обедный перерыв 13:00 - 14:00</span>  <span>Суббота - воскресеные: Выходные</span>
                </div>
            </div>
        </div>
        <div class="block2 flex_row">
            <div class="map">
                <h3>Карта проезда:</h3>
                <div id="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d5990.9847946267!2d69.212859!3d41.34165!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x38ae8c0d9292dd17%3A0x779a829653dc94d1!2zIk8nenN0YW5kYXJ0IiBhZ2VudGxpZ2ksIDMzM0EgRmFyb2JpIGtvJ2NoYXNpLCDQotC-0YjQutC10L3RgiAxMDAwNDksINCj0LfQsdC10LrQuNGB0YLQsNC9!3m2!1d41.341589299999995!2d69.2118931!5e0!3m2!1suz!2s!4v1465987421151" width="540" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="form">
                <h3>Контактная форма</h3>
                <form action="" class="validate-form">
                    <div class="items flex_row_beet_cen">
                        <div class="item flex_col__start">
                            <input type="text" id="name" placeholder="Имя" autocomplete="off" class="empty">
                            <label for="name"><span>Имя</span>
                            </label>
                        </div>
                        <div class="item flex_col__start">
                            <input type="text" id="surname" placeholder="Фамилия" autocomplete="off" class="empty">
                            <label for="surname"><span>Фамилия</span>
                            </label>
                        </div>
                        <div class="item flex_col__start">
                            <input type="email" id="mail" placeholder="E-mail" autocomplete="off" class="empty">
                            <label for="mail"><span>E-mail</span>
                            </label>
                        </div>
                    </div>
                    <div class="area flex_col">
                        <textarea name="" id="text_area" placeholder="Сообщения" autocomplete="off"></textarea>
                        <label for="text_area"><span>Сообщения</span>
                        </label>
                    </div>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function initMap(){var n=new google.maps.LatLng(41.2912094,69.3213418),e=new google.maps.Map(document.getElementById("map"),{center:n,zoom:14}),o=new google.maps.Marker({position:n,map:e,animation:google.maps.Animation.DROP});function t(){null!=o.getAnimation()?o.setAnimation(null):o.setAnimation(google.maps.Animation.BOUNCE)}google.maps.event.addListenerOnce(e,"idle",function(){t(),setTimeout(t,1500)})}
</script>


@endsection