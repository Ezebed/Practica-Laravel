@extends('layouts.MainLayout')

@section('title','Soluciones Online')

@section('content')
    <p>hola</p>
    <div class="grid grid-cols-2 gap-y-1 ml-2 " >
        @include('components.BlogEntry', ['title' => 'Aprende Guitarra'])   
        @include('components.BlogEntry', ['title' => 'Aprende Piano'])
        @include('components.BlogEntry', ['title' => 'Aprende Bateria'])
        @include('components.BlogEntry', ['title' => 'Aprende Violin'])
    </div>
@endSection