@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Datas</h2>
                    </div>

                    <div class="card-body">
                        <table class="table table-dark table-hover table-bordered">
                            <thead>
                                <tr style="text-align: center;">
                                    <th scope="col">ID</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">USER NAME</th>
                                    <th scope="col">FATHER NAME</th>
                                    <th scope="col">MOTHER NAME</th>
                                    <th scope="col">PHONE NUMBER</th>
                                    <th scope="col">ADDRESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data )
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->nanme }}</td>
                                        <td>{{ $data->uname }}</td>
                                        <td>{{ $data->fname }}</td>
                                        <td>{{ $data->mname }}</td>
                                        <td>{{ $data->pnumber }}</td>
                                        <td>{{ $data->address }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
