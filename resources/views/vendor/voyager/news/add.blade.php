@extends('voyager::master')
@section('content')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.css') }}">
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
        .panel-heading_one{
            background-color: white;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .panel-heading_two{
            background-color: #F2A654;
            padding-bottom: 12px;
            padding-top: 12px;
            padding-left: 12px;
            color: white;
        }
        .panel-heading_three{
            margin-top: 20px;
            background-color: #337ab7;
            padding-bottom: 12px;
            padding-top: 12px;
            padding-left: 12px;
            color: white;
        }
        .panel-heading_four{
            margin-top: 20px;
            background-color: #57C7D4;
            padding-bottom: 12px;
            padding-top: 12px;
            padding-left: 12px;
            color: white;
        }
        label{
            color: #aebcd6 !important;
        }
        #status, #categories, #slug{
            margin-top: 2px !important;
        }
        .slug-error-one{
            border: 1px solid red;
        }
        .slug-success{
            border: 1px solid green;
        }
        .slug-error-two{
            color: red;
            display: block !important;
        }
        #slug-error{
            display: none;
        }
    </style>
    <script>
        $(function () {
            $('#title_uz').on('focusout', function () {
                var title = $(this).val();
                var slug = $('#slug');
                slug.val(title);
                $.ajax({
                    url: '{{ route('checkSlug') }}',
                    type:'GET',
                    data:{
                        slug:title
                    },
                    success:function (data) {
                        if (data == 'error'){
                            slug.addClass('slug-error-one');
                            slug.removeClass('slug-success');
                            $('#slug-error').addClass('slug-error-two');
                        }else {
                            slug.removeClass('slug-error-one');
                            slug.addClass('slug-success');
                            $('#slug-error').removeClass('slug-error-two');

                        }
                    }
                })
            });
            $('#slug').on('focusout', function () {
                var slug = $(this);
                var title = slug.val();
                $.ajax({
                    url: '{{ route('checkSlug') }}',
                    type:'GET',
                    data:{
                        slug:title
                    },
                    success:function (data) {
                        if (data == 'error'){
                            slug.addClass('slug-error-one');
                            slug.removeClass('slug-success');
                            $('#slug-error').addClass('slug-error-two');
                        }else {
                            slug.removeClass('slug-error-one');
                            slug.addClass('slug-success');
                            $('#slug-error').removeClass('slug-error-two');

                        }
                    }
                })
            });
        })
    </script>
    <div class="" style="margin-top: 100px; margin-left: 15px">
        <form action="{{ route('create.post') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row form-group">
                <div class="col-md-7">
                    <div class="panel-heading_one">
                        <h3>O'zbek tili <span class="text-danger">*</span></h3>
                        <input type="text" name="title_uz" id="title_uz" class="form-control  {{ $errors->has('title_uz') ? ' is-invalid' : '' }}" placeholder="Yangilikning qisqacha mazmuni" value="{{ old('title_uz') }}">
                    </div>
                    @if ($errors->has('title_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title_uz') }}</strong>
                        </span>
                    @endif

                    <textarea name="description_uz" cols="30" rows="7" placeholder="Yangilikning qisqacha mazmuni" class=" form-control {{ $errors->has('description_uz') ? ' is-invalid' : '' }}">{{ old('description_uz') }}</textarea>
                    @if ($errors->has('description_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description_uz') }}</strong>
                        </span>
                    @endif

                    <textarea name="body_uz" cols="30" rows="7" class="ckeditor form-control {{ $errors->has('body_uz') ? ' is-invalid' : '' }}">{{ old('body_uz') }}</textarea>
                    @if ($errors->has('body_uz'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('body_uz') }}</strong>
                        </span>
                    @endif



                    <h3>O'zbek tili (krill) <span class="text-danger"></span></h3>
                    <input type="text" name="title_cyrl" class="form-control {{ $errors->has('title_cyrl') ? ' is-invalid' : '' }}" placeholder="Yangilik nomi" value="{{ old('title_cyrl') }}">
                    @if ($errors->has('title_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title_cyrl') }}</strong>
                        </span>
                    @endif

                    <textarea name="description_cyrl" id="" cols="30" rows="7" placeholder="Yangilikning qisqacha mazmuni" class="form-control {{ $errors->has('description_cyrl') ? ' is-invalid' : '' }}">{{ old('description_cyrl') }}</textarea>
                    @if ($errors->has('description_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description_cyrl') }}</strong>
                        </span>
                    @endif

                    <textarea name="body_cyrl" id="" cols="30" rows="7" class="ckeditor form-control {{ $errors->has('body_cyrl') ? ' is-invalid' : '' }}">{{ old('body_cyrl') }}</textarea>
                    @if ($errors->has('body_cyrl'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('body_cyrl') }}</strong>
                        </span>
                    @endif



                    <h3>Ingliz tili <span class="text-danger"></span></h3>
                    <input type="text" name="title_en" class="form-control {{ $errors->has('title_en') ? ' is-invalid' : '' }}" placeholder="Yangilik nomi" value="{{ old('title_en') }}">
                    @if ($errors->has('title_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title_en') }}</strong>
                        </span>
                    @endif

                    <textarea name="description_en" id="" cols="30" rows="7" placeholder="Yangilikning qisqacha mazmuni" class="form-control {{ $errors->has('description_en') ? ' is-invalid' : '' }}">{{ old('description_en') }}</textarea>
                    @if ($errors->has('description_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description_en') }}</strong>
                        </span>
                    @endif
                    <textarea name="body_en" id="" cols="30" rows="7" class="ckeditor form-control {{ $errors->has('body_en') ? ' is-invalid' : '' }}">{{ old('body_en') }}</textarea>
                    @if ($errors->has('body_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('body_en') }}</strong>
                        </span>
                    @endif



                    <h3>Rus tili <span class="text-danger"></span></h3>
                    <input type="text" name="title_ru" class="form-control {{ $errors->has('title_ru') ? ' is-invalid' : '' }}" placeholder="Yangilik nomi" value="{{ old('title_ru') }}">
                    @if ($errors->has('title_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title_ru') }}</strong>
                        </span>
                    @endif

                    <textarea name="description_ru" id="" cols="30" rows="7" placeholder="Yangilikning qisqacha mazmuni" class="form-control {{ $errors->has('description_ru') ? ' is-invalid' : '' }}">{{ old('description_ru') }}</textarea>
                    @if ($errors->has('description_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description_ru') }}</strong>
                        </span>
                    @endif

                    <textarea name="body_ru" id="" cols="30" rows="7" placeholder="Yangilik matni" class="ckeditor form-control {{ $errors->has('body_ru') ? ' is-invalid' : '' }}">{{ old('body_ru') }}</textarea>
                    @if ($errors->has('body_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('body_ru') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-5">
                    <div class="panel-heading_two dropdown-toggle " data-toggle="collapse" data-target="#postDetails" >
                        <h4>Post details <span class="float-right" style="padding-right: 15px"> <i class="fas fa-angle-double-down"></i></span></h4>
                    </div>
                    <div id="postDetails"  class="show in">
                        <label for="slug" style="margin-bottom: 0 !important; margin-top: 28px">URL slug</label>
                        <input type="text" id="slug" name="slug" class="form-control {{ $errors->has('slug') ? ' is-invalid' : '' }}" placeholder=slug value="{{ old('slug') }}">
                        <span id="slug-error">Bu URLdan foydalanib bo'lmaydi</span>
                        <br>
                        @if ($errors->has('slug'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('slug') }}</strong>
                            </span>
                        @endif

                        <label for="status" style="margin-bottom: 0 !important; margin-top: 10px">Post Status</label>
                        <select name="status" id="status" class="form-control  {{ $errors->has('status') ? ' is-invalid' : '' }}">
                            <option value="1">published</option>
                            <option value="2">draft</option>
                            <option value="3">pending</option>
                        </select>
                        @if ($errors->has('status'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif

                        <label for="categories" style="margin-bottom: 0 !important; margin-top: 10px">Post Status</label>
                        <select name="category_id" id="categories" class="form-control  {{ $errors->has('category_id') ? ' is-invalid' : '' }}">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{!! $category->name !!}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="panel-heading_three" data-toggle="collapse" data-target="#postImage">
                        <h4>Post Image <span class="float-right" style="padding-right: 15px"> <i class="fas fa-angle-double-down"></i></span></h4>
                    </div>
                    <div id="postImage" class="show in" style="background-color: white">
                        <input type="file" name="post_image" accept="image/jpeg, image/jpg, image/png" class="form-control {{ $errors->has('post_image') ? ' is-invalid' : '' }}">
                        @if ($errors->has('post_image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('post_image') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="panel-heading_four"  data-toggle="collapse" data-target="#seoContent">
                        <h4>Tags <span class="float-right" style="padding-right: 15px"> <i class="fas fa-angle-double-down"></i></span></h4>
                    </div>
                    <div id="seoContent"  class="collapse" style="background-color: white; padding: 20px">

                        <label for="metaKeywords_uz" style="margin-bottom: 0 !important; margin-top: 28px">Meta Keywords (UZ)</label>
                        <textarea name="meta_keywords_uz" id="metaKeywords_uz" cols="30" rows="3" class="form-control {{ $errors->has('meta_keywords_uz') ? ' is-invalid' : '' }}">{{ old('meta_keywords_uz') }}</textarea>
                        @if ($errors->has('meta_keywords_uz'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('meta_keywords_uz') }}</strong>
                        </span>
                        @endif

                        <label for="metaKeywords_cyrl" style="margin-bottom: 0 !important; margin-top: 28px">Meta Keywords (KRILL)</label>
                        <textarea name="meta_keywords_cyrl" id="metaKeywords_cyrl" cols="30" rows="3" class="form-control {{ $errors->has('meta_keywords_cyrl') ? ' is-invalid' : '' }}">{{ old('meta_keywords_cyrl') }}</textarea>
                        @if ($errors->has('meta_keywords_cyrl'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('meta_keywords_cyrl') }}</strong>
                        </span>
                        @endif

                        <label for="metaKeywords_ru" style="margin-bottom: 0 !important; margin-top: 28px">Meta Keywords (RUSSIAN)</label>
                        <textarea name="meta_keywords_uz" id="metaKeywords" cols="30" rows="3" class="form-control {{ $errors->has('meta_keywords_uz') ? ' is-invalid' : '' }}">{{ old('meta_keywords_uz') }}</textarea>
                        @if ($errors->has('meta_keywords_uz'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('meta_keywords_uz') }}</strong>
                        </span>
                        @endif

                        <label for="metaKeywords_en" style="margin-bottom: 0 !important; margin-top: 28px">Meta Keywords (ENGLISH)</label>
                        <textarea name="meta_keywords_en" id="metaKeywords_en" cols="30" rows="3" class="form-control {{ $errors->has('meta_keywords_en') ? ' is-invalid' : '' }}">{{ old('meta_keywords_en') }}</textarea>
                        @if ($errors->has('meta_keywords_en'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('meta_keywords_en') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mce-btn-large form-control">Qo'shish</button>
        </form>
    </div>
@endsection