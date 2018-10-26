@extends('layouts.app')


@section('content')
    <table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Danger level</th>
        </tr>
    @foreach($bears as $bear)
        <tr>
            <td>{{ $bear->name }}</td>
            <td>{{ $bear->type }}</td>
            <td>{{ $bear->danger_level }}</td>
        </tr>
    @endforeach
    @foreach($seeds as $seed)
            {{$seed->name}}

            @foreach($seed->illnesses as $illness)
                {{$illness->name}}
            @endforeach
    @endforeach
    </table>
@endsection