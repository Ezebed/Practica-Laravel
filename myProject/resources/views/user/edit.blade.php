@extends('layouts.landing')

@section('title', 'Crear Usuario')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')

    <a href="{{ route('user.index') }}">Cancel</a>

    <form method="POST" action="{{ route('user.update', $user->id) }}">
        @method("PUT")
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $user->name }}">

        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $user->email }}">

        <label for="age">Age</label>
        <input type="number" name="age" value="{{ $user->age }}">

        <label for="address">Address</label>
        <input type="text" name="address" value="{{ $user->address }}">

        <label for="zip_code">Zip Code</label>
        <input type="number" name="zip_code" value="{{ $user->zip_code }}">

        <input type="Submit" value="Update">
    </form>

@endsection