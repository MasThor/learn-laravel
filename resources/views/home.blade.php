@extends('layouts.app' , ["title" => "Home"])

@section('content')
    <p>Home</p>

    @component('components.alert')
        it's slot. <br>
        (children)
    @endcomponent


@endsection