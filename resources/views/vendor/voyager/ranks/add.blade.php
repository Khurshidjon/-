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
        <form action="{{ route('create.rank') }}" method="POST">
            {{ csrf_field() }}

            <div class="row form-group">
                <div class="col-md-3">
                    <h3>O'zbek tili <span class="text-danger">*</span></h3>
                    <input type="text" name="rank_name_uz" class="form-control  {{ $errors->has('rank_name_uz') ? ' is-invalid' : '' }}" placeholder="Lavozim ismi" value="{{ old('rank_name_uz') }}">
                    @if ($errors->has('rank_name_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('rank_name_uz') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <h3>Ingliz tili <span class="text-danger">*</span></h3>
                    <input type="text" name="rank_name_en" class="form-control {{ $errors->has('rank_name_en') ? ' is-invalid' : '' }}" placeholder="Lavozim ismi" value="{{ old('rank_name_en') }}">
                    @if ($errors->has('rank_name_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('rank_name_en') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <h3>Rus tili <span class="text-danger">*</span></h3>
                    <input type="text" name="rank_name_ru" class="form-control {{ $errors->has('rank_name_ru') ? ' is-invalid' : '' }}" placeholder="Lavozim ismi" value="{{ old('rank_name_ru') }}">
                    @if ($errors->has('rank_name_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('rank_name_ru') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                    <h3>O'zbek tili (krill) <span class="text-danger">*</span></h3>
                    <input type="text" name="rank_name_cyrl" class="form-control {{ $errors->has('rank_name_cyrl') ? ' is-invalid' : '' }}" placeholder="Lavozim ismi" value="{{ old('rank_name_cyrl') }}">
                    @if ($errors->has('rank_name_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('rank_name_cyrl') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-success mce-btn-large form-control">Qo'shish</button>
        </form>
    </div>
@endsection