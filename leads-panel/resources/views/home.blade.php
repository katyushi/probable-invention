@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('leads') }}" class="btn home-button">Leads</a>
                    <a href="{{ url('calls') }}" class="btn home-button">Ligações</a>
                    <a href="{{ url('calllogs') }}" class="btn home-button">Registro de chamadas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
