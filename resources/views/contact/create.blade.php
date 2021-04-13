@extends('layout')
@section('title', config('app.name') . ' - Registrar contacto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4"
                      method="POST" action="{{ route('contacts.store') }}">
                    <h4>Registrar Contacto</h4>
                    <hr>
                    @include('contact._form', ['btnText' => 'Guardar'])
                </form>
            </div>
        </div>
    </div>
@endsection