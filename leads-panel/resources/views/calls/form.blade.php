@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criar nova ligação</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('home') }}" class="btn back-button">< Voltar</a>
                    <br>
                    <form action="{{ url('calls/add') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome do lead</label>
                            <select class="form-control" name="lead_name">
                                @foreach ($leads as $lead)
                                    <option>{{$lead->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="seller">vendedor</label>
                            <input type="text" class="form-control" name="seller" id="seller" aria-describedby="emailHelp" placeholder="john wick">
                        </div>
                        <div class="form-group">
                            <label for="seller">vendedor</label>
                            <input type="text" class="form-control" name="call_date_and_time" id="call_date_and_time" aria-describedby="emailHelp" placeholder="YYYY-MM-DD HH:MI:SS">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
