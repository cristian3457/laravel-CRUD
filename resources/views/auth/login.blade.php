<x-guest-layout>
    <div class="container">
        <div class="row h-screen">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
            <form class="bg-white shadow rounded py-3 px-4" style=" height: 60%; width: 90%; position: absolute; left: calc(50% - 45%); top: calc(50% - 30%);" action="{{ route('login') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1 class="display-4 text-center">Iniciar sesión</h1>
                    <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" id="email" type="email" name="email" placeholder="Email..." value="{{old('email')}}" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                            <input class="form-control bg-light shadow-sm @error('password') is-invalid @else border-0 @enderror" type="password" id="password" name="password" placeholder="Password..." minlength="8" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                            @endif
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-check float-md-right">
                                <input class="form-check-input" type="checkbox" value="" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    Recordarme
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-large btn-block mt-4">Ingresar</button>
            </form>
            </div>
        </div>
    </div>
</x-guest-layout>