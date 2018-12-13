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
            <strong style="font-size: 30px; vertical-align: middle">Organizations</strong>
            <div class="btn-group">
                <a href="{{ route('add.organ') }}" class="btn btn-success" style="margin-left: 30px">Add organ</a>
                <button class="btn btn-danger" style="margin-left: 30px">Delete worker</button>
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
                                Search:
                                <input type="search" class="form-control input-sm" aria-controls="dataTable">
                            </label>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>TASHKILOT NOMI</th>
                        <th>TASHKILOT RASMI</th>
                        <th>ISHONCH TELEFON RAQAMI</th>
                        <th>Faks raqami</th>
                        <th>Boshqa harakatlar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($organs as $organ)
                        <tr>
                            <td>{{ $i++ }}</td>
                            @if($lang == 'uz')
                                <td>{{ $organ->organ_name_uz }}</td>
                            @elseif($lang == 'en')
                                <td>{{ $organ->organ_name_en }}</td>
                            @elseif($lang == 'ru')
                                <td>{{ $organ->organ_name_ru }}</td>
                            @elseif($lang == 'cyrl')
                                <td>{{ $organ->organ_name_cyrl }}</td>
                            @endif
                            <td>
                                <img src="{{ asset('storage/') .'/'. $organ->organ_photo}}" alt="" width="80px">
                            </td>
                            <td>{{ $organ->phone_number }}</td>
                            <td>{{ $organ->fax_number }}</td>
                            <td>
                                <button class="btn btn-warning"><i class="voyager-eye"></i></button>
                                <button class="btn btn-info"><i class="voyager-edit"></i></button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal_{{ $organ->id }}"><i class="voyager-trash"></i></button>
                            </td>
                        </tr>
                        <div class="modal fade" id="myModal_{{ $organ->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color: red; color: white">
                                        <h4 class="modal-title">Do you wanna delete?</h4>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        @if($lang == 'uz')
                                            {{ $organ->organ_name_uz }}
                                        @elseif($lang == 'en')
                                            {{ $organ->organ_name_en }}
                                        @elseif($lang == 'ru')
                                            {{ $organ->organ_name_ru }}
                                        @elseif($lang == 'cyrl')
                                            {{ $organ->organ_name_cyrl }}
                                        @endif
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <form action="{{ route('delete.organ', ['organ' => $organ]) }}" method="POST">
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