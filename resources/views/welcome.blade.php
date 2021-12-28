
@extends('layouts.api')

@section('header') 
    <div id="intro" class="p-3 text-center bg-light">
        <h1 class="mb-2 ">Welcome to my personal Blog!</h1>     
    </div>
@endsection

@section('content')
    @livewire('blog.index')
@endsection()  