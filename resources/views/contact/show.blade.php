@extends('layout')
@section('title', config('app.name') . ' - Contacto')

@section('content')
    <div class="container">
        <div class="bg-white p-5 shadow rounded col-12 col-sm-10 col-lg-9 mx-auto">
            <h1>
                {{ $contact->name }}
            </h1>

            <p class="text-secondary">
                <strong>Correo:</strong> 
                <strong class="text-primary">
                    {{ $contact->email }}
                </strong>
            </p>

            <p class="text-secondary">
                <strong>Teléfono:</strong> 
                <strong class="text-primary">
                    {{ $contact->phone_number }}
                </strong>
            </p>

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('contacts.index') }}">Menú principal</a>
                    <div class="btn-group btn-group-sm">
                        <a class="btn btn-primary" href="{{ route('contacts.edit', $contact) }}">Editar</a>
                    </div>
                    <form id="delete-contacts" class="d-none" method="POST" action="{{ route('contacts.destroy', $contact) }}">
                        @csrf @method('DELETE')
                    </form>
            </div>
        </div>
    </div>
@endsection  