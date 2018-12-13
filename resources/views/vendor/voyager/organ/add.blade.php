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
        <form action="{{ route('create.organ') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row form-group">
                <div class="col-md-3">
                    <h3>O'zbek tili <span class="text-danger">*</span></h3>
                    <input type="text" name="organ_name_uz" class="form-control  {{ $errors->has('organ_name_uz') ? ' is-invalid' : '' }}" placeholder="Tashkilot nomi" value="{{ old('organ_name_uz') }}">
                    @if ($errors->has('organ_name_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('organ_name_uz') }}</strong>
                        </span>
                    @endif
                    <textarea name="address_uz" id="" cols="30" rows="7" placeholder="Tashkilot manzili" class="form-control  {{ $errors->has('address_uz') ? ' is-invalid' : '' }}">{{ old('address_uz') }}</textarea>
                    @if ($errors->has('address_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address_uz') }}</strong>
                        </span>
                    @endif
                    <input name="ghazna_name_uz" id="" placeholder="G'azna nomi" class="form-control  {{ $errors->has('ghazna_name_uz') ? ' is-invalid' : '' }}" value="{{ old('ghazna_name_uz') }}">
                    @if ($errors->has('ghazna_name_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ghazna_name_uz') }}</strong>
                        </span>
                    @endif
                    <input type="text" name="bank_name_uz" class="form-control  {{ $errors->has('bank_name_uz') ? ' is-invalid' : '' }}" placeholder="Bank nomi" value="{{ old('bank_name_uz') }}">
                    @if ($errors->has('bank_name_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bank_name_uz') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <h3>Ingliz tili <span class="text-danger">*</span></h3>
                    <input type="text" name="organ_name_en" class="form-control  {{ $errors->has('organ_name_en') ? ' is-invalid' : '' }}" placeholder="Tashkilot nomi" value="{{ old('organ_name_en') }}">
                    @if ($errors->has('organ_name_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('organ_name_en') }}</strong>
                        </span>
                    @endif
                    <textarea name="address_en" id="" cols="30" rows="7" placeholder="Tashkilot manzili" class="form-control  {{ $errors->has('address_en') ? ' is-invalid' : '' }}">{{ old('address_en') }}</textarea>
                    @if ($errors->has('address_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address_en') }}</strong>
                        </span>
                    @endif
                    <input name="ghazna_name_en" id="" placeholder="G'azna nomi" class="form-control  {{ $errors->has('ghazna_name_en') ? ' is-invalid' : '' }}" value="{{ old('ghazna_name_en') }}">
                    @if ($errors->has('ghazna_name_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ghazna_name_en') }}</strong>
                        </span>
                    @endif
                    <input type="text" name="bank_name_en" class="form-control  {{ $errors->has('bank_name_uz') ? ' is-invalid' : '' }}" placeholder="Bank nomi" value="{{ old('bank_name_en') }}">
                    @if ($errors->has('bank_name_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bank_name_en') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <h3>Rus tili <span class="text-danger">*</span></h3>
                    <input type="text" name="organ_name_ru" class="form-control  {{ $errors->has('organ_name_ru') ? ' is-invalid' : '' }}" placeholder="Tashkilot nomi" value="{{ old('organ_name_ru') }}">
                    @if ($errors->has('organ_name_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('organ_name_ru') }}</strong>
                        </span>
                    @endif
                    <textarea name="address_ru" id="" cols="30" rows="7" placeholder="Tashkilot manzili" class="form-control  {{ $errors->has('address_ru') ? ' is-invalid' : '' }}">{{ old('address_ru')}}</textarea>
                    @if ($errors->has('address_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address_ru') }}</strong>
                        </span>
                    @endif
                    <input name="ghazna_name_ru" id="" placeholder="G'azna nomi" class="form-control  {{ $errors->has('ghazna_name_ru') ? ' is-invalid' : '' }}" value="{{ old('ghazna_name_ru') }}">
                    @if ($errors->has('ghazna_name_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ghazna_name_ru') }}</strong>
                        </span>
                    @endif
                    <input type="text" name="bank_name_ru" class="form-control  {{ $errors->has('bank_name_ru') ? ' is-invalid' : '' }}" placeholder="Bank nomi" value="{{ old('bank_name_ru') }}">
                    @if ($errors->has('bank_name_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bank_name_ru') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <h3>O'zbek tili (krill) <span class="text-danger">*</span></h3>
                    <input type="text" name="organ_name_cyrl" class="form-control  {{ $errors->has('organ_name_cyrl') ? ' is-invalid' : '' }}" placeholder="Tashkilot nomi" value="{{ old('organ_name_cyrl') }}">
                    @if ($errors->has('organ_name_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('organ_name_cyrl') }}</strong>
                        </span>
                    @endif
                    <textarea name="address_cyrl" id="" cols="30" rows="7" placeholder="Tashkilot manzili" class="form-control  {{ $errors->has('address_cyrl') ? ' is-invalid' : '' }}">{{ old('address_cyrl') }}</textarea>
                    @if ($errors->has('address_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address_cyrl') }}</strong>
                        </span>
                    @endif
                    <input name="ghazna_name_cyrl" id="" placeholder="G'azna nomi" class="form-control  {{ $errors->has('ghazna_name_cyrl') ? ' is-invalid' : '' }}" value="{{ old('ghazna_name_cyrl') }}">
                    @if ($errors->has('ghazna_name_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ghazna_name_cyrl') }}</strong>
                        </span>
                    @endif
                    <input type="text" name="bank_name_cyrl" class="form-control  {{ $errors->has('bank_name_cyrl') ? ' is-invalid' : '' }}" placeholder="Bank nomi" value="{{ old('bank_name_cyrl') }}">
                    @if ($errors->has('bank_name_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bank_name_cyrl') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="phone_number" class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" placeholder="Telefon raqami" value="{{ old('phone_number') }}">
                    @if ($errors->has('phone_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @endif
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Tashkilot elektron pochta manzili" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input type="text" name="fax_number" class="form-control {{ $errors->has('fax_number') ? ' is-invalid' : '' }}" placeholder="Faks raqami" value="{{ old('fax_number') }}">
                    @if ($errors->has('fax_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('fax_number') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <input type="email" name="exat_standart_uz" class="form-control {{ $errors->has('exat_standart_uz') ? ' is-invalid' : '' }}" placeholder="EXAT tizimi" value="{{ old('exat_standart_uz') }}">
                    @if ($errors->has('exat_standart_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('exat_standart_uz') }}</strong>
                        </span>
                    @endif
                    <input type="text" name="SH_X_V" class="form-control {{ $errors->has('SH_X_V') ? ' is-invalid' : '' }}" placeholder="SH.X.V" value="{{ old('SH_X_V') }}">
                    @if ($errors->has('SH_X_V'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('SH_X_V') }}</strong>
                        </span>
                    @endif
                    <input type="text" name="x_r" class="form-control {{ $errors->has('x_r') ? ' is-invalid' : '' }}" placeholder="Bank xisob raqami" value="{{ old('x_r') }}">
                    @if ($errors->has('x_r'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('x_r') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <input type="text" name="banks_code" class="form-control {{ $errors->has('banks_code') ? ' is-invalid' : '' }}" placeholder="Bank raqami" value="{{ old('banks_code') }}">
                    @if ($errors->has('banks_code'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('banks_code') }}</strong>
                        </span>
                    @endif
                    <input type="text" name="stir_number" class="form-control {{ $errors->has('stir_number') ? ' is-invalid' : '' }}" placeholder="STIR" value="{{ old('stir_number') }}">
                    @if ($errors->has('stir_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('stir_number') }}</strong>
                        </span>
                    @endif
                    <input type="file" name="organ_photo" class="form-control {{ $errors->has('organ_photo') ? ' is-invalid' : '' }}" placeholder="Xodim elektron pochta manzili" value="{{ old('worker_email') }}">
                    @if ($errors->has('organ_photo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('organ_photo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-success mce-btn-large form-control">Qo'shish</button>
        </form>
    </div>
@endsection