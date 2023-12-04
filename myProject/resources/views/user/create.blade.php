@extends('layouts.landing')

@section('title', 'Crear Usuario')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')

    <a href="{{ route('user.index') }}">Cancel</a>

    <form class="userform" method="POST" action="{{ route('user.store') }}">
         @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" >
        </div>
        
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" >            
        </div>

        <div>
            <label for="age">Age</label>
            <input type="number" name="age">
        </div>

        <div>
            <label for="address">Address</label>
            <input type="text" name="address">
        </div>

        <div>
            <label for="zip_code">Zip Code</label>
            <input type="number" name="zip_code" >
        </div>

        <input class="submitBtn" type="Submit" value="Create">
    </form>

@endsection