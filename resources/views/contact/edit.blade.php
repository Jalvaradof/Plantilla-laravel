@extends('layout')
@section('title', config('app.name') . ' - Editar contacto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('contacts.update', $contact) }}">
                    @method('PATCH')
                    <h4>Editar contacto</h4>
                    <hr>
                    @include('contact._form', ['btnText' => 'Actualizar'])
                </form>
            </div>
        </div>
    </div>
@endsection