@extends('layouts.app')

@section('content')
    <!-- HAMBURGER -->
    <div class="hamb">
        <div class="hamb__bar hamb__bar--big"></div>
        <div class="hamb__bar hamb__bar--small"></div>
        <div class="hamb__bar"></div>
    </div>
    <!--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <div class="container">
    </div>



@endsection
