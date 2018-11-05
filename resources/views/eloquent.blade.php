@extends('layouts.app')




    @if(Auth::user())
        {{Auth::user()->email}}
    @else
        <h1>Hallo! {{ var_dump(Auth::check())}}</h1>
    @endif
