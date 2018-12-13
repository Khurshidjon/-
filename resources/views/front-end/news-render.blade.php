@foreach($posts as $post)
<div class="big_box flex_row take_and_skip">
    <div class="img">
        <a href="{{ route('frontNewsSingle', ['id' => $post->id]) }}">
            <img src="{{ Voyager::image( $post->image ) }}" alt="">
        </a>
    </div>
    <div class="content">
        @if($lang == 'uz')
            <a href="{{ route('frontNewsSingle', ['id' => $post->id]) }}" class="title">{{ $post->title_uz }}</a>
            <p>{!!  $post->excerpt  !!}</p>
        @elseif($lang == 'cyrl')
            <a href="{{ route('frontNewsSingle', ['id'=>$post]) }}" class="title">{!! $post->title_cyrl !!}</a>
            <p>{!! str_limit($post->description_cyrl, 200) !!}</p>
        @elseif($lang == 'ru')
            <a href="{{ route('frontNewsSingle', ['id'=>$post]) }}" class="title">{!! $post->title_ru !!}</a>
            <p>{!! str_limit($post->description_cyrl, 200) !!}</p>
        @elseif($lang == 'en')
            <a href="{{ route('frontNewsSingle', ['id'=>$post]) }}" class="title">{!! $post->title_en !!}</a>
            <p>{!! str_limit($post->description_en, 200) !!}</p>
        @endif
        <div class="flex_row_beet_cen">
            <div class="flex_row">
                <div class="news_time flex_row__cen">
                    <img src="{{ asset('front-end/media/img/svg/clock.svg') }}" alt=""> <span>{{ $post->created_at->format('d F Y') }}</span>
                </div><span class="view"><img src="{{ asset('front-end/media/img/svg/eye.svg') }}" alt="">{!! $post->featured !!}</span>
            </div><a href="{{ route('frontNewsSingle', ['id' => $post->id]) }}" class="read_more">Читать подробнее</a>
        </div>
    </div>
</div>
@endforeach

