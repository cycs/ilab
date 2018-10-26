@extends('layouts.app')


@section('content')

    @foreach($seeds as $seed)
        <li>
            <ul>
                <li>{{$seed->name}}</li>
                <li>
            @foreach($seed->illnesses as $illness)
                {{$illness->name}}
            @endforeach
                </li>
            </ul>
        </li>
    @endforeach
@endsection