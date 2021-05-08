<x-guest-layout>
    <div class="container">
        <h2 class="text-center mt-4">No recuerdas tu contraseña</h2>
        <div class="mb-4 text-sm text-gray-600 mt-4">    
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        @include('partials.session-status')
        <div class="row ">

            <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
            <form class="bg-white shadow rounded py-3 px-4" style="margin-top:4rem"  action="{{ route('password.email') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1 class="display-5 text-center">Restablecer contraseña</h1>
                    <div class="form-group mt-4">
                            <label for="email">Email</label>
                            <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" id="email" type="email" name="email" placeholder="Email..." value="{{old('email')}}" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div>
                        <a class="col-12" href="{{ route('login')}}">Ir a iniciar sesión</a>
                    </div>
                    <button class="btn btn-primary btn-large btn-block mt-4">Restablecer contraseña</button>
            </form>
            </div>
        </div>
    </div>
</x-guest-layout>

