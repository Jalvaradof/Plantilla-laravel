@extends('layout')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">{{ config('app.name') }}</h1>
                <p class="lead text-secondary">
                    Aquí se agrega un descripción del aplicativo.
                </p>
                <p class="lead text-secondary">
                    El nombre el aplicativo se modifica en el archivo ".env"
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <img  class="img-fluid mb-4" src="/img/home.svg" alt="Control de Visitas">
            </div>
        </div>
    </div>
@endsection
