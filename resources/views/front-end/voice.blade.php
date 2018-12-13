<div class="voice_question">
        <h6>СОЦОПРОС</h6>
    <p>{!! $question->questions !!}</p>
    <form action="">
        <label class="flex_row__cen item">
            <input type="radio" name="questItem" value="4"><span class="bb"></span> Отличный</label>
        <label class="flex_row__cen item">
            <input type="radio" name="questItem" value="3"><span class="bb"></span> Хороший</label>
        <label class="flex_row__cen item">
            <input type="radio" name="questItem" value="2"><span class="bb"></span> Ужасный</label>
        <label class="flex_row__cen item">
            <input type="radio" name="questItem" value="1"><span class="bb"></span> Можно улучшить</label>
    </form>
    <button type="button" class="vote" data-url="{{ route('service.voice') }}" data-id="{{ $question->id }}">Голосовать</button>

    <span class="down_up view_voice" data-url="{{ route('voice.service') }}">
        <img src="{{ asset('front-end/media/img/svg/down_up.svg') }}" alt="">
    </span>
</div>
