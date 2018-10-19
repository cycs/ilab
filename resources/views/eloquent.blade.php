@extends('layouts.app')


@section('content')
    @foreach($bears as $bear)
        <li>{{ $bear->name }} ---------- {{ $bear->type }} </li>
    @endforeach
@endsection