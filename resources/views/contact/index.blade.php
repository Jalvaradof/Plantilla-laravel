@extends('layout')
@section('title', config('app.nick_name') . ' - Asignaciones')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-10 mx-auto">
				<div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="mb-0">Contactos</h2>
                    @auth
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-success"
                               href="{{ route('contacts.create') }}"
                               data-toggle="tooltip" data-placement="top" title="Registrar contacto">
                                {{-- Asignar --}}
                                <i class="fas fa-plus-circle fa-1.2x p-1"></i>
                            </a>
                        </div>
                        <form id="delete-assignedFloors" class="d-none" method="POST" action="{{-- {{ route('assigned-floor.destroyAll', $assignedFloors) }} --}}">
                            @csrf @method('DELETE')
                        </form>
                    @endauth
                </div>

				<table class="table table-hover">
					<thead class="text-center">
						<th class="align-middle">Id</th>
						<th class="align-middle">Nombre</th>
						<th class="align-middle">Email</th>
						<th class="align-middle">Teléfono</th>
						<th class="align-middle">Acciones</th>
					</thead>
					<tbody>
						@foreach($contacts  as $contact)
							<tr>
								<td>{{ $contact->id }}</td>
								<td>{{ $contact->name }}</td>
								<td>{{ $contact->email }}</td>
								<td>{{ $contact->phone_number }}</td>
								<td>
                                    <div class="btn-group btn-group-sm">
                                        <a 
                                            class="btn btn-primary" 
                                            href="{{ route('contacts.show', $contact) }}"
                                            data-toggle="tooltip" data-placement="top" title="Ver">
                                            <i class="fas fa-eye fa-1.2x"></i>
                                        </a>
                                        <a 
                                            class="btn btn-primary" 
                                            href="{{ route('contacts.edit', $contact) }}"
                                            data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="fas fa-edit fa-1.2x"></i>
                                        </a>
	                                    <form method="POST" action="{{ route('contacts.destroy', $contact) }}" class="confirm-delete">
									        @csrf @method('DELETE')
									        <button class="btn btn-danger btn-sm" type="submit"
									            data-toggle="tooltip" data-placement="top" title="Eliminar">
									            <i class="fas fa-trash-alt fa-1.2x"></i>
									        </button>
									    </form>
                                    </div>
                                </td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
	</div>
@endsection