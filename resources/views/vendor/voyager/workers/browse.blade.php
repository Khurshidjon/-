@extends('voyager::master')

@section('content')
    @php
        $lang = App::getLocale();
    $i = 1;
    @endphp
    <style>
        * a {
            text-decoration: none !important;
        }
    </style>
    <div class="">
        <div style="margin-left: 40px">
            <i style="font-size: 50px; vertical-align: middle" class="voyager-person"></i>
            <strong style="font-size: 30px; vertical-align: middle">Workers</strong>
            <div class="btn-group">
                <a href="{{ route('add.worker') }}" class="btn btn-success" style="margin-left: 30px">Add worker</a>
                <button class="btn btn-danger" style="margin-left: 30px">Delete worker</button>
            </div>
            <div>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Xodim ismi</th>
                            <th>Xodim rasmi</th>
                            <th>Telefon raqami</th>
                            <th>Faks raqami</th>
                            <th>Boshqa harakatlar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($workers as $worker)
                            <tr>
                                <td>{{ $i++ }}</td>
                                @if($lang == 'uz')
                                    <td>{{ $worker->worker_name_uz }}</td>
                                @elseif($lang == 'en')
                                    <td>{{ $worker->worker_name_en }}</td>
                                @elseif($lang == 'ru')
                                    <td>{{ $worker->worker_name_ru }}</td>
                                @elseif($lang == 'cyrl')
                                    <td>{{ $worker->worker_name_cyrl }}</td>
                                @endif
                                <td>
                                    <img src="{{ asset('storage/') .'/'. $worker->worker_photo}}" alt="" width="80px">
                                </td>
                                <td>{{ $worker->phone_number }}</td>
                                <td>{{ $worker->fax_number }}</td>
                                <td>
                                    <a href="{{ route('worker.view', $worker) }}" class="btn btn-warning"><i class="voyager-eye"></i></a>
                                    <button class="btn btn-info"><i class="voyager-edit"></i></button>
                                    <button class="btn btn-danger"  type="button" data-toggle="modal" data-target="#myModal_{{ $worker->id }}"><i class="voyager-trash"></i></button>
                                </td>
                            </tr>
                            <div class="modal fade" id="myModal_{{ $worker->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red; color: white">
                                            <h4 class="modal-title">Do you wanna delete?</h4>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <h3>
                                                @if($lang == 'uz')
                                                    {{ $worker->worker_name_uz }}
                                                @elseif($lang == 'en')
                                                    {{ $worker->worker_name_en }}
                                                @elseif($lang == 'ru')
                                                    {{ $worker->worker_name_ru }}
                                                @elseif($lang == 'cyrl')
                                                    {{ $worker->worker_name_cyrl }}
                                                @endif
                                            </h3>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <form action="{{ route('delete.worker', ['worker' => $worker]) }}" method="POST">
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