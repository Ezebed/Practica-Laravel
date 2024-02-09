@extends('layouts.MainLayout')

@section('title','Soluciones Online')

@section('content')
    <div class="grid grid-cols-2 gap-y-1 ml-2 mt-2 " >
        @include('components.BlogEntry', ['title' => 'Aprende Guitarra', 'imgUrl' => 'https://images.unsplash.com/photo-1564186763535-ebb21ef5277f'])   
        @include('components.BlogEntry', ['title' => 'Aprende Piano','imgUrl' => 'https://images.unsplash.com/photo-1513883049090-d0b7439799bf'])
        @include('components.BlogEntry', ['title' => 'Aprende Bateria','imgUrl' => 'https://images.unsplash.com/photo-1519892300165-cb5542fb47c7'])
        @include('components.BlogEntry', ['title' => 'Aprende Violin','imgUrl' => 'https://images.unsplash.com/photo-1566913485268-1287f67f87fe'])
    </div>
    <div class="fixed right-2 bottom-0" >
        <livewire:chat-box />
    </div>
    
@endSection