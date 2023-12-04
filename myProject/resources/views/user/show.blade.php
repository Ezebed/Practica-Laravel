@extends('layouts.landing')

@section('title', "User Info")

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Age: {{ $user->age }}</p>
    <p>Address: {{ $user->address }}</p>
    <p>Zip_code: {{ $user->zip_code }}</p>
@endsection