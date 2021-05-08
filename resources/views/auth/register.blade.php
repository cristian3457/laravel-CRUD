
<x-guest-layout>
    <div class="container">
        <div class="row h-screen">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
            <form class="bg-white shadow rounded py-3 px-4" style=" height: 84%; width: 90%; position: absolute; left: calc(50% - 45%); top: calc(50% - 42%);" action="{{ route('register') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1 class="display-4 text-center">Registrate</h1>
                    <div class="form-group">
                            <label for="name">Nombre</label>
                            <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" id="name" type="text" name="name" placeholder="Nombre..." value="{{old('name')}}" required autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" id="email" type="email" name="email" placeholder="Email..." value="{{old('email')}}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                            <input class="form-control bg-light shadow-sm @error('password') is-invalid @else border-0 @enderror" type="password" id="password" name="password" placeholder="Contraseña..." required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirmar contraseña</label>
                            <input class="form-control bg-light shadow-sm @error('password_confirmation') is-invalid @else border-0 @enderror" type="password" id="password_confirmation" name="password_confirmation" placeholder="Repetir contraseña..." required autocomplete="password_confirmation">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="col-12">
                        <a href="{{ route('login') }}">Ya estas registrado?</a>
                    </div>
                    <button class="btn btn-primary btn-large btn-block mt-4">Registrar</button>
            </form>
            </div>
        </div>
    </div>
</x-guest-layout>
