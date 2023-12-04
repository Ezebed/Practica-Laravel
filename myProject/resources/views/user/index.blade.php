@extends("layouts.landing")

@section('title', 'Usuario')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('content')

    <a href="{{ route('user.create') }}">Create User</a>

    <h2>Lista de Usuarios:</h2>
    <ul>
        <!-- meetodo foreach con casos de condiciones especificas -->
        @forelse($users as $user)
            <li> 
                <a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a> |
                <a href="{{ route('user.edit', $user->id) }}">Edit</a> |
                <form method="POST" action="{{ route('user.delete', $user->id) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </li>
        @empty
            <p>Lista Vacia</p>
        @endforelse
    </ul>
    
@endsection