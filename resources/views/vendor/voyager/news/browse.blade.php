@extends('voyager::master')
@section('content')
    @php
        $lang = App::getLocale();
       $i = 1;
    @endphp
    @include('sweetalert::alert')
    <style>
        * a{
            padding: 10px;
            text-decoration: none !important;
        }
        * a:hover{
            text-decoration: none !important;
        }
        .activee{
            border-bottom: 2px solid #4cae4c;
            color: #1a6ef4;
            font-size: 16px;
        }
    </style>
    <div class="float-right" style="padding: 10px;">
        <a href="{{route('locale', ['locale' => 'uz'])}}" class="{{ ($lang == 'uz')?'activee': '' }}">UZB</a>
        <a href="{{route('locale', ['locale' => 'en'])}}" class="{{ ($lang == 'en')?'activee': '' }}">ENG</a>
        <a href="{{route('locale', ['locale' => 'ru'])}}" class="{{ ($lang == 'ru')?'activee': '' }}">РУС</a>
        <a href="{{route('locale', ['locale' => 'cyrl'])}}" class="{{ ($lang == 'cyrl')?'activee': '' }}">ЎЗБ</a>
    </div>
    <div class="">
        <div style="margin-left: 40px">
            <i style="font-size: 50px; vertical-align: middle" class="voyager-company"></i>
            <strong style="font-size: 30px; vertical-align: middle">NEWS</strong>
            <div class="btn-group">
                <a href="{{ route('add.post') }}" class="btn btn-success" style="margin-left: 30px">Add news</a>
                <button class="btn btn-danger" style="margin-left: 30px">Delete news</button>
            </div>
            <div>
                <div class="row">
                    <div class="col-sm-6">
                        <div id="dataTable_length" class="dataTables_length">
                            <label>
                                <span>Show</span>
                                <select name="dataTable_length" aria-controls="dataTable" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="dataTable_filter">
                            <label>
                                Search:<input type="search" class="form-control input-sm" aria-controls="dataTable">
                            </label>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>YANGILIK NOMI</th>
                        <th>YANGILIK RASMI</th>
                        <th>QISQACHA MAZMUNI</th>
                        <th>Boshqa harakatlar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $i++ }}</td>
                            @if($lang == 'uz')
                                <td>{{ $post->title_uz }}</td>
                            @elseif($lang == 'en')
                                <td>{{ $post->title_en }}</td>
                            @elseif($lang == 'ru')
                                <td>{{ $post->title_ru }}</td>
                            @elseif($lang == 'cyrl')
                                <td>{{ $post->title_cyrl }}</td>
                            @endif
                            <td>
                                <img src="{{ asset('storage/') .'/'. $post->image}}" alt="" width="80px">
                            </td>
                            @if($lang == 'uz')
                                <td>{{ $post->excerpt_uz }}</td>
                            @elseif($lang == 'en')
                                <td>{{ $post->excerpt_en }}</td>
                            @elseif($lang == 'ru')
                                <td>{{ $post->excerpt_ru }}</td>
                            @elseif($lang == 'cyrl')
                                <td>{{ $post->excerpt_cyrl }}</td>
                            @endif
                            <td>
                                <button class="btn btn-warning"><i class="voyager-eye"></i></button>
                                <button class="btn btn-info"><i class="voyager-edit"></i></button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal_{{ $post->id }}"><i class="voyager-trash"></i></button>
                            </td>
                        </tr>
                        <div class="modal fade" id="myModal_{{ $post->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color: red; color: white">
                                        <h4 class="modal-title">Do you wanna delete?</h4>
                                        {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        @if($lang == 'uz')
                                            {{ $post->title_uz }}
                                        @elseif($lang == 'en')
                                            {{ $post->title_en }}
                                        @elseif($lang == 'ru')
                                            {{ $post->title_ru }}
                                        @elseif($lang == 'cyrl')
                                            {{ $post->title_cyrl }}
                                        @endif
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <form action="{{ route('delete.post', ['post' => $post]) }}" method="POST">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Yes, Delete!</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection