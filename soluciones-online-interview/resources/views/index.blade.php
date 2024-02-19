@extends('layouts.MainLayout')

@section('title','Soluciones Online')

@section('content')
    <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-y-1 ml-2 mt-2 " >

        @livewire('blog-entry',['blogTitle'=>'Aprende Guitarra','imgUrl'=>'img/'])
        @livewire('blog-entry',['blogTitle'=>'Aprende Piano','imgUrl'=>'img/'])
        @livewire('blog-entry',['blogTitle'=>'Aprende Bateria','imgUrl'=>'img/'])
        @livewire('blog-entry',['blogTitle'=>'Aprende Violin','imgUrl'=>'img/'])
        
        
        
    </div>

    <livewire:show-chat-box />
    
@endSection