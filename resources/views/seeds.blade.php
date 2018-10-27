@extends('layouts.app')


@section('content')
    <ul>
    @foreach($seeds as $seed)
        <li>
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