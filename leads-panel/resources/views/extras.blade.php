@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Extras</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('home') }}" class="btn back-button">< home</a>
                    <br>
                    <iframe src="https://open.spotify.com/embed/playlist/0MJBni0UzdnML1amikx0Rc" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    <iframe src="https://open.spotify.com/embed/album/00OQIrRjQgZmacSnjK8L7M" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    <iframe src="https://open.spotify.com/embed/playlist/0Lsn03u71VE6nqS4BHiJ56" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    <iframe src="https://open.spotify.com/embed/playlist/2kuweyHPmWCn4K9Go2vpRy" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
