@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Leads</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('home') }}" class="btn back-button">< home</a>
                    <br>

                    <table class="table table-hover table-bordered">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>
                        </tr>
                        @foreach ($leads as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td scope="row">{{ $item->name }}</td>
                                <td scope="row">{{ $item->email }}</td>
                                <td scope="row">{{ $item->phone }}</td>
                                <td scope="row">
                                    <a href="leads/{{$item->id}}/edit" class="btn btn-warning">Editar</a>
                                </td>
                                <td scope="row">
                                    <form action="leads/delete/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <br>
                    </table>
                    <a href="{{ url('leads/new') }}" class="btn home-button">+ novo lead</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
