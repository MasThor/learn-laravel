@extends('layouts.app' , ["title" => "Home"])

@section('content')
    <p>Home</p>

    @component('components.alert')
        @slot('header')
            It's Header
        @endslot
        it's slot (children). <br>
        It's Default Component
        @slot('footer')
            It's Footer
        @endslot

    @endcomponent
@endsection
