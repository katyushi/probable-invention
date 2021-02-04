@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criar novo lead</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('leads') }}" class="btn back-button">< leads</a>
                    <br>

                    @if (Request::is('*/edit'))
                        <form action="{{ url('leads/update') }}/{{ $lead->id }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" value="{{ $lead->name }}" class="form-control" name="name" id="name" placeholder="john wick">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" value="{{ $lead->email }}" class="form-control" name="email" id="Email" aria-describedby="emailHelp" placeholder="john@example.com">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input type="text" value="{{ $lead->phone }}" class="form-control" name="phone" id="phone" placeholder="(16)9999-9999">
                            </div>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </form>
                    @else
                        <form action="{{ url('leads/add') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="john wick">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp" placeholder="john@example.com">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="(16)9999-9999">
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
