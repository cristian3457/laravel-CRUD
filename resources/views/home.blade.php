@extends('layout')

@section('title','Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo web</h1>
            <p class="lead text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quam aliquid animi, odio ea dolores debitis reiciendis 
                atque maxime amet unde dolorem dignissimos cumque molestiae. 
                Nobis nostrum error dolorem illo dolor.
            </p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/images/home.svg" alt="Desarrollo web">
        </div>
    </div>
</div>
    
@endsection