
@extends('layouts.api')

@section('header') 
    <div id="intro" class="p-3 text-center bg-light ">
        <h1 class="mb-3 ">
            {{ $blog->title }}
        </h1>     
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="border-bottom mb-4 ">
                    <img src="{{ Storage::url($blog->photo) }}"
                    class="img-fluid shadow-2-strong rounded-5 mb-4" alt="" style="display: block;
                    margin-left: auto;  margin-right: auto; width:50%; "/>
                    <div class="row align-items-center mb-4">
                        <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                            <img src="{{ Storage::url($blog->photo) }}" class="rounded-5 shadow-1-strong me-2"
                            height="35" alt="" loading="lazy" />
                            <span> Published <u>{{ $blog->created_at }}</u> by  </span><a href="" class="text-dark">{{ $blog->user->name }}</a>
                        </div>
                    </div>
                </section>
                <section>
                    {{ $blog->text }}
                </section>
            <hr>
            </div>
        </div>
    </div>
@endsection()  