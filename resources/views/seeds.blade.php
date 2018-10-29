@extends('layouts.app')


@section('content')
    <h2>Graines </h2>
    <ul class="seeds">
    @foreach($seeds as $seed)
        <li class="seeds__unit">
            <ul>
                <li>{{$seed->name}}</li>
                <li>{{$seed->latin_name}}</li>
                <li>{{$seed->variety}}</li>
                <li>{{$seed->exposure}}</li>
                <li>{{$seed->price}}</li>
            </ul>
        </li>
    @endforeach
    </ul>
@endsection