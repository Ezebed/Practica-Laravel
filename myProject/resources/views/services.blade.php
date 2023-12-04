@extends('layouts.landing')

@section('title', 'Servicios')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')
    <h1>Servicios</h1>
    <p>Estos son los servicios que poseemos</p>

    @component('_components.card')
        @slot('title', 'titulo de la tarjeta')
        @slot('content', 'lorem ipsum nos e que no se que mas')

    @endcomponent
@endsection

