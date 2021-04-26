@extends('layout')
@section('Control Visitas - Login')

@section('content')
<br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-sm-8 border p-3">
                <br>
                <h2 class="text-primary text-md-center">{{ config('app.name') }}</h2>
                <br>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-user fa-1.2x"></i>
                            </span>
                        </div>
                        <input class="form-control  @error('username') is-invalid @enderror"
                                name="username" type="text" id="username"
                                placeholder="Nombre de Usuario" aria-label="username"
                                aria-describedby="basic-addon1" value="{{ old('username') }}"
                                autocomplete="off" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-unlock-alt fa-1.2x"></i>
                            </span>
                        </div>
                        <input class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" type="password"
                                placeholder="Introduzca su contraseña" >

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" value="Acceder">
                </form>
            </div>
        </div>
    </div>
@endsection
