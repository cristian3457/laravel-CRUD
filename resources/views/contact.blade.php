@extends('layout')

@section('title','Contact')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('messages.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1 class="display-4">{{__('Contact')}}</h1>
                <div class="form-group">
                <label for="nombre">Nombre</label>
                    <input class="form-control bg-light shadow-sm @error('nombre') is-invalid @else border-0 @enderror" type="text" id="nombre" name="nombre" placeholder="Nombre..." value="{{ old('nombre') }}">
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" id="email" type="text" name="email" placeholder="Email..." value="{{old('email')}}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" id="subject" type="text" name="subject" placeholder="Asunto..." value="{{old('subject')}}">
                    @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Mensaje</label>
                    <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" id="content" name="content" placeholder="Mensaje...">{{old('content')}}</textarea><br>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}}</strong>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-primary btn-large btn-block">Enviar</button>
            </form>
        </div>
    </div>

        <!-- @if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif -->

    @endsection
</div>
