@extends('layouts.admin')

@section('content')
<div class="min-h-screen flex cover-bg-gradient">
    <div class="m-auto rounded-lg bg-cool-grey-050 p-4">
        <h1 class="text-cool-grey-600 text-center">LOGIN</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="block my-2">
                    <label for="email" class="block text-cool-grey-600 my-2">{{ __('E-Mail Address') }}</label>

                    <div class="block">
                        <input id="email" type="email" class="bg-cool-grey-100 font-thin rounded-lg p-2 w-full" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="block my-2">
                    <label for="password" class="block text-cool-grey-600 my-2">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="bg-cool-grey-100 font-thin rounded-lg p-2 w-full" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="form-check">
                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="text-cool-grey-600 text-sm" for="remember">
                        {{ __('Recordarme') }}
                    </label>
                </div>

                <div class="">
                    <button type="submit" class="rounded px-4 py-2 bg-cyan-600 text-white mt-2 mr-2">
                        {{ __('Iniciar sesión') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="text-cyan-600 text-sm underline" href="{{ route('password.request') }}">
                            {{ __('Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
