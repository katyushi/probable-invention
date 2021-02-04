@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de chamadas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('home') }}" class="btn back-button">< home</a>
                    <br>

                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome do lead</th>
                                <th scope="col">Vendedor</th>
                                <th scope="col">Data e hora da chamada</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($calls as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->lead_name }}</td>
                                    <td>{{ $item->seller }}</td>
                                    <td>{{ $item->call_date_and_time }}</td>
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
