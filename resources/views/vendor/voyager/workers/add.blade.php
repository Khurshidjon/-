@extends('voyager::master')
@section('content')
    <script src="{{ asset('js/app.js') }}"></script>

    @php
        $lang = App::getLocale();
    @endphp
    <style>
        textarea{
            resize: none;
        }
        select, textarea, input{
            margin-top: 15px !important;
        }
        .custom-select.is-invalid,.form-control.is-invalid,.was-validated .custom-select:invalid,.was-validated .form-control:invalid{border-color:#e3342f}.custom-select.is-invalid:focus,.form-control.is-invalid:focus,.was-validated .custom-select:invalid:focus,.was-validated .form-control:invalid:focus{border-color:#e3342f;-webkit-box-shadow:0 0 0 .2rem rgba(227,52,47,.25);box-shadow:0 0 0 .2rem rgba(227,52,47,.25)}.custom-select.is-invalid~.invalid-feedback,.custom-select.is-invalid~.invalid-tooltip,.form-control-file.is-invalid~.invalid-feedback,.form-control-file.is-invalid~.invalid-tooltip,.form-control.is-invalid~.invalid-feedback,.form-control.is-invalid~.invalid-tooltip,.was-validated .custom-select:invalid~.invalid-feedback,.was-validated .custom-select:invalid~.invalid-tooltip,.was-validated .form-control-file:invalid~.invalid-feedback,.was-validated .form-control-file:invalid~.invalid-tooltip,.was-validated .form-control:invalid~.invalid-feedback,.was-validated .form-control:invalid~.invalid-tooltip{display:block}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#e3342f}.form-check-input.is-invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-tooltip,.was-validated .form-check-input:invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid~.custom-control-label,.was-validated .custom-control-input:invalid~.custom-control-label{color:#e3342f}.custom-control-input.is-invalid~.custom-control-label:before,.was-validated .custom-control-input:invalid~.custom-control-label:before{background-color:#f2a29f}.custom-control-input.is-invalid~.invalid-feedback,.custom-control-input.is-invalid~.invalid-tooltip,.was-validated .custom-control-input:invalid~.invalid-feedback,.was-validated .custom-control-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid:checked~.custom-control-label:before,.was-validated .custom-control-input:invalid:checked~.custom-control-label:before{background-color:#e9605c}.custom-control-input.is-invalid:focus~.custom-control-label:before,.was-validated .custom-control-input:invalid:focus~.custom-control-label:before{-webkit-box-shadow:0 0 0 1px #f8fafc,0 0 0 .2rem rgba(227,52,47,.25);box-shadow:0 0 0 1px #f8fafc,0 0 0 .2rem rgba(227,52,47,.25)}.custom-file-input.is-invalid~.custom-file-label,.was-validated .custom-file-input:invalid~.custom-file-label{border-color:#e3342f}.custom-file-input.is-invalid~.custom-file-label:after,.was-validated .custom-file-input:invalid~.custom-file-label:after{border-color:inherit}.custom-file-input.is-invalid~.invalid-feedback,.custom-file-input.is-invalid~.invalid-tooltip,.was-validated .custom-file-input:invalid~.invalid-feedback,.was-validated .custom-file-input:invalid~.invalid-tooltip{display:block}.custom-file-input.is-invalid:focus~.custom-file-label,.was-validated .custom-file-input:invalid:focus~.custom-file-label{-webkit-box-shadow:0 0 0 .2rem rgba(227,52,47,.25);box-shadow:0 0 0 .2rem rgba(227,52,47,.25)}
        .invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#e3342f}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.7875rem;line-height:1.6;color:#fff;background-color:rgba(227,52,47,.9);border-radius:.25rem}.custom-select.is-invalid,.form-control.is-invalid,.was-validated .custom-select:invalid,.was-validated .form-control:invalid{border-color:#e3342f}.custom-select.is-invalid:focus,.form-control.is-invalid:focus,.was-validated .custom-select:invalid:focus,.was-validated .form-control:invalid:focus{border-color:#e3342f;-webkit-box-shadow:0 0 0 .2rem rgba(227,52,47,.25);box-shadow:0 0 0 .2rem rgba(227,52,47,.25)}.custom-select.is-invalid~.invalid-feedback,.custom-select.is-invalid~.invalid-tooltip,.form-control-file.is-invalid~.invalid-feedback,.form-control-file.is-invalid~.invalid-tooltip,.form-control.is-invalid~.invalid-feedback,.form-control.is-invalid~.invalid-tooltip,.was-validated .custom-select:invalid~.invalid-feedback,.was-validated .custom-select:invalid~.invalid-tooltip,.was-validated .form-control-file:invalid~.invalid-feedback,.was-validated .form-control-file:invalid~.invalid-tooltip,.was-validated .form-control:invalid~.invalid-feedback,.was-validated .form-control:invalid~.invalid-tooltip{display:block}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#e3342f}.form-check-input.is-invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-tooltip,.was-validated .form-check-input:invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid~.custom-control-label,.was-validated .custom-control-input:invalid~.custom-control-label{color:#e3342f}.custom-control-input.is-invalid~.custom-control-label:before,.was-validated .custom-control-input:invalid~.custom-control-label:before{background-color:#f2a29f}.custom-control-input.is-invalid~.invalid-feedback,.custom-control-input.is-invalid~.invalid-tooltip,.was-validated .custom-control-input:invalid~.invalid-feedback,.was-validated .custom-control-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid:checked~.custom-control-label:before,.was-validated .custom-control-input:invalid:checked~.custom-control-label:before{background-color:#e9605c}.custom-control-input.is-invalid:focus~.custom-control-label:before,.was-validated .custom-control-input:invalid:focus~.custom-control-label:before{-webkit-box-shadow:0 0 0 1px #f8fafc,0 0 0 .2rem rgba(227,52,47,.25);box-shadow:0 0 0 1px #f8fafc,0 0 0 .2rem rgba(227,52,47,.25)}.custom-file-input.is-invalid~.custom-file-label,.was-validated .custom-file-input:invalid~.custom-file-label{border-color:#e3342f}.custom-file-input.is-invalid~.custom-file-label:after,.was-validated .custom-file-input:invalid~.custom-file-label:after{border-color:inherit}.custom-file-input.is-invalid~.invalid-feedback,.custom-file-input.is-invalid~.invalid-tooltip,.was-validated .custom-file-input:invalid~.invalid-feedback,.was-validated .custom-file-input:invalid~.invalid-tooltip{display:block}.custom-file-input.is-invalid:focus~.custom-file-label,.was-validated .custom-file-input:invalid:focus~.custom-file-label{-webkit-box-shadow:0 0 0 .2rem rgba(227,52,47,.25);box-shadow:0 0 0 .2rem rgba(227,52,47,.25)}
    </style>
    <div class="container" style="margin-top: 100px;">
        <form action="{{ route('create.worker') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <select name="organ_id" class="form-control changeOrgan select2 {{ $errors->has('organ_id') ? ' is-invalid' : '' }}" >
                @if ($errors->has('organ_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('organ_id') }}</strong>
                    </span>
                @endif
                <option value="" id="ChangingOrgan">--Tashkilotni tanlang--</option>
                @foreach($organs as $organ)
                    @if($lang == 'uz')
                        <option value="{{ $organ->id }}">{{ $organ->organ_name_uz }}</option>
                    @elseif($lang == 'en')
                        <option value="{{ $organ->id }}">{{ $organ->organ_name_en }}</option>
                    @elseif($lang == 'ru')
                        <option value="{{ $organ->id }}">{{ $organ->organ_name_ru }}</option>
                    @elseif($lang == 'cyrl')
                        <option value="{{ $organ->id }}">{{ $organ->organ_name_cyrl }}</option>
                    @endif
                @endforeach
            </select>
            <hr>
            <select name="rank_id" class="form-control select2  {{ $errors->has('rank_id') ? ' is-invalid' : '' }}" id="ranks" required>
                @if ($errors->has('rank_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rank_id') }}</strong>
                    </span>
                @endif
                <option value="">--Xodim lavozimi--</option>
                @foreach($ranks as $rank)
                        @if($lang == 'uz')
                            <option value="{{ $rank->id }}">{{ $rank->rank_name_uz }}</option>
                        @elseif($lang == 'en')
                            <option value="{{ $rank->id }}">{{ $rank->rank_name_en }}</option>
                        @elseif($lang == 'ru')
                            <option value="{{ $rank->id }}">{{ $rank->rank_name_ru }}</option>
                        @elseif($lang == 'cyrl')
                            <option value="{{ $rank->id }}">{{ $rank->rank_name_cyrl }}</option>
                        @endif
                @endforeach
            </select>
            <div class="row form-group">
                <div class="col-md-3">
                    <h3>O'zbek tili <span class="text-danger">*</span></h3>
                    <input type="text" name="worker_name_uz" class="form-control  {{ $errors->has('worker_name_uz') ? ' is-invalid' : '' }}" placeholder="Xodim ismi" value="{{ old('worker_name_uz') }}">
                    @if ($errors->has('worker_name_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('worker_name_uz') }}</strong>
                        </span>
                    @endif
                    <textarea name="commitment_uz" id="" cols="30" rows="7" placeholder="Xodim majburiyatlari" class="form-control {{ $errors->has('commitment_uz') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('commitment_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('commitment_uz') }}</strong>
                        </span>
                    @endif
                    <textarea name="biography_uz" id="" cols="30" rows="7" placeholder="Xodim biografiyasi" class="form-control  {{ $errors->has('biography_uz') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('biography_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('biography_uz') }}</strong>
                        </span>
                    @endif
                    <textarea name="work_address_uz" id="" cols="30" rows="4" placeholder="Ishxona manzili" class="form-control  {{ $errors->has('work_address_uz') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('work_address_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('work_address_uz') }}</strong>
                        </span>
                    @endif

                </div>
                <div class="col-md-3">
                    <h3>Ingliz tili <span class="text-danger">*</span></h3>
                    <input type="text" name="worker_name_en" class="form-control {{ $errors->has('worker_name_en') ? ' is-invalid' : '' }}" placeholder="Xodim ismi" value="{{ old('worker_name_en') }}">
                    @if ($errors->has('worker_name_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('worker_name_en') }}</strong>
                        </span>
                    @endif
                    <textarea name="commitment_en" id="" cols="30" rows="7" placeholder="Xodim majburiyatlari" class="form-control  {{ $errors->has('commitment_en') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('commitment_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('commitment_en') }}</strong>
                        </span>
                    @endif
                    <textarea name="biography_en" id="" cols="30" rows="7" placeholder="Xodim biografiyasi" class="form-control  {{ $errors->has('biography_en') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('biography_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('biography_en') }}</strong>
                        </span>
                    @endif
                    <textarea name="work_address_en" id="" cols="30" rows="4" placeholder="Ishxona manzili" class="form-control  {{ $errors->has('work_address_en') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('work_address_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('work_address_en') }}</strong>
                        </span>
                    @endif

                </div>
                <div class="col-md-3">
                    <h3>Rus tili <span class="text-danger">*</span></h3>
                    <input type="text" name="worker_name_ru" class="form-control {{ $errors->has('worker_name_ru') ? ' is-invalid' : '' }}" placeholder="Xodim ismi" value="{{ old('worker_name_ru') }}">
                    @if ($errors->has('worker_name_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('worker_name_ru') }}</strong>
                        </span>
                    @endif
                    <textarea name="commitment_ru" id="" cols="30" rows="7" placeholder="Xodim majburiyatlari" class="form-control {{ $errors->has('commitment_ru') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('commitment_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('commitment_ru') }}</strong>
                        </span>
                    @endif
                    <textarea name="biography_ru" id="" cols="30" rows="7" placeholder="Xodim biografiyasi" class="form-control {{ $errors->has('biography_ru') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('biography_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('biography_ru') }}</strong>
                        </span>
                    @endif
                    <textarea name="work_address_ru" id="" cols="30" rows="4" placeholder="Ishxona manzili" class="form-control {{ $errors->has('work_address_ru') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('work_address_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('work_address_ru') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <h3>O'zbek tili (krill) <span class="text-danger">*</span></h3>
                    <input type="text" name="worker_name_cyrl" class="form-control {{ $errors->has('worker_name_cyrl') ? ' is-invalid' : '' }}" placeholder="Xodim ismi" value="{{ old('worker_name_cyrl') }}">
                    @if ($errors->has('worker_name_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('worker_name_cyrl') }}</strong>
                        </span>
                    @endif
                    <textarea name="commitment_cyrl"  id="" cols="30" rows="7" placeholder="Xodim majburiyatlari" class="form-control {{ $errors->has('commitment_cyrl') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('commitment_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('commitment_cyrl') }}</strong>
                        </span>
                    @endif
                    <textarea name="biography_cyrl" id="" cols="30" rows="7" placeholder="Xodim biografiyasi" class="form-control {{ $errors->has('biography_cyrl') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('biography_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('biography_cyrl') }}</strong>
                        </span>
                    @endif
                    <textarea name="work_address_cyrl" id="" cols="30" rows="4" placeholder="Ishxona manzili" class="form-control {{ $errors->has('work_address_cyrl') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('work_address_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('work_address_cyrl') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="phone_number" class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" placeholder="Telefon raqami" value="{{ old('phone_number') }}">
                    @if ($errors->has('phone_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <input type="text" name="fax_number" class="form-control {{ $errors->has('fax_number') ? ' is-invalid' : '' }}" placeholder="Faks raqami" value="{{ old('fax_number') }}">
                    @if ($errors->has('fax_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('fax_number') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <input type="text" name="worker_email" class="form-control {{ $errors->has('worker_email') ? ' is-invalid' : '' }}" placeholder="Xodim elektron pochta manzili" value="{{ old('worker_email') }}">
                    @if ($errors->has('worker_email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('worker_email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <input type="file" name="worker_photo" class="form-control {{ $errors->has('worker_photo') ? ' is-invalid' : '' }}" placeholder="Xodim elektron pochta manzili" value="{{ old('worker_email') }}">
                    @if ($errors->has('worker_photo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('worker_photo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-success mce-btn-large form-control">Qo'shish</button>
        </form>
    </div>

    {{--<script>
        $(function () {
            $('.changeOrgan').on('change', function (e) {
                $("option:selected", this);
                var organ_id = this.value;
                var url = $(this).attr('data-url');
                // console.log(url);
                $.ajax({
                    url:url,
                    type:'GET',
                    data:{
                        organ_id:organ_id
                    },
                    success:function (data) {
                        var ranks = $('#ranks');
                        ranks.empty();
                        // ranks.append(data);
                        ranks.append("<option>--Xodim lavozimi--</option>");
                        $.each(data, function(index, element) {
                            if ('{{ $lang == 'uz' }}'){
                                ranks.append("<option value='"+ element.id +"'>" + element.rank_name_uz + "</option>");
                            }else if('{{ $lang == 'en' }}'){
                                ranks.append("<option value='"+ element.id +"'>" + element.rank_name_en + "</option>");
                            }else if('{{ $lang == 'ru' }}'){
                                ranks.append("<option value='"+ element.id +"'>" + element.rank_name_ru + "</option>");
                            }else if('{{ $lang == 'cyrl' }}'){
                                ranks.append("<option value='"+ element.id +"'>" + element.rank_name_cyrl + "</option>");
                            }
                        });
                        ranks.attr('disabled', false);
                        if (data == ''){
                            ranks.attr('disabled', true);
                        }
                    }
                });
            });
        });
    </script>--}}
@endsection