<style>
    .progress{
        padding-bottom: 5px !important;
        background-color: white;
    }
    .progress-bar{
        border-radius: 5px !important;
        color: #000000 !important;
    }
    .fa-check{
        color: green;
    }
</style>
<h6>СОЦОПРОС</h6>
<p>Оставьте свое мнения об электронных услугах агентство &laquoУзстандарт&raquo</p>
<small id="four">{!! round(($voice_four / $all_voice)* 100) !!}% - Отличный ({{ $voice_four }} / {{ $all_voice }}) </small><i class="fas fa-check"></i>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {!! round(($voice_four/$all_voice)*100) !!}%" aria-valuenow="{!! ($voice_four / $all_voice)* 100 !!}" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<small id="three">{!! round(($voice_three / $all_voice)* 100) !!}% - Хороший ({{ $voice_three }} / {{ $all_voice }}) </small><i class="fas fa-check"></i>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {!! ($voice_three / $all_voice)* 100 !!}%" aria-valuenow="{!! ($voice_three / $all_voice)* 100 !!}" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<small id="two">{!! round(($voice_two / $all_voice)* 100) !!}% - Ужасный ({{ $voice_two }} / {{ $all_voice }}) </small><i class="fas fa-check"></i>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {!! round(($voice_two / $all_voice)*100) !!}%" aria-valuenow="{!! ($voice_two / $all_voice)* 100 !!}" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<small id="one">{{ round(($voice_one / $all_voice)* 100) }}% - Можно улучшить ({{ $voice_one }} / {{ $all_voice }}) </small><i class="fas fa-check"></i>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: {!! round(($voice_one / $all_voice)* 100) !!}%" aria-valuenow="{!! ($voice_one / $all_voice)* 100 !!}" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<script>
        var one = Math.round('{{ ($voice_one / $all_voice) * 100 }}');
        var two = '{{ $voice_two }}';
        var three = '{{ $voice_three }}';
        var four = '{{ $voice_four }}';

        $('#one').text(one + '% - Можно улучшить');
</script>