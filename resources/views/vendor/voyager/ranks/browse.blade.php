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
    <i style="font-size: 50px; vertical-align: middle" class="voyager-person"></i>
    <strong style="font-size: 30px; vertical-align: middle">Ranks</strong>
    <div class="btn-group">
        <a href="{{ route('add.rank') }}" class="btn btn-success" style="margin-left: 30px">Add rank</a>
        <button class="btn btn-danger" style="margin-left: 30px">Delete rank</button>
    </div>
    <div>
        <div style="padding: 20px" class="float-left">
            <span>Show</span>
            <select name="" id="">
                <option value="">10</option>
                <option value="">25</option>
                <option value="">50</option>
                <option value="">100</option>
            </select>
        </div>
        <div class="float-right">
            <label>Search:</label>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="">
        <table class="table">
            <thead>
            <tr>
                <th>№</th>
                <th>Lavozim nomi</th>
                <th>Boshqa harakatlar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ranks as $rank)
                <tr>
                    <td>{{ $i++ }}</td>
                    @if($lang == 'uz')
                        <td>{{ $rank->rank_name_uz }}</td>
                    @elseif($lang == 'en')
                        <td>{{ $rank->rank_name_en }}</td>
                    @elseif($lang == 'ru')
                        <td>{{ $rank->rank_name_ru }}</td>
                    @elseif($lang == 'cyrl')
                        <td>{{ $rank->rank_name_cyrl }}</td>
                    @endif
                    <td>
                        <a href="{{ route('rank.view', [$rank]) }}" class="btn btn-warning"><i class="voyager-eye"></i></a>
                        <button class="btn btn-info"><i class="voyager-edit"></i></button>
                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#myModal_{{ $rank->id }}"><i class="voyager-trash"></i></button>
                    </td>
                </tr>
                <div class="modal fade" id="myModal_{{ $rank->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: red; color: white">
                                <h4 class="modal-title">Do you wanna delete?</h4>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h3>
                                    @if($lang == 'uz')
                                        {{ $rank->rank_name_uz }}
                                    @elseif($lang == 'en')
                                        {{ $rank->rank_name_en }}
                                    @elseif($lang == 'ru')
                                        {{ $rank->rank_name_ru }}
                                    @elseif($lang == 'cyrl')
                                        {{ $rank->rank_name_cyrl }}
                                    @endif
                                </h3>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <form action="{{ route('delete.rank', ['rank' => $rank]) }}" method="POST">
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

@endsection