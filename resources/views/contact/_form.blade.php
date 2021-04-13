@csrf
<div class="form-group">
    <label for="name"> Nombre Usuario </label>
    <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
           id="name" name="name" value="{{ old('name', $contact->name) }}">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="email"> Correo Usuario </label>
    <input type="email" class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
           id="email" name="email" value="{{ old('email', $contact->email) }}">
    @error('email')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="email"> Teléfono de contacto </label>
    <input class="form-control bg-light shadow-sm @error('phone_number') is-invalid @else border-0 @enderror"
           id="phone_number" type="text" name="phone_number" {{-- minlength="7" maxlength="7" --}} autocomplete="off" 
           value="{{ old('phone_number', $contact->phone_number) }}">
    @error('phone_number')
    <span class="invalid-feedback">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('contacts.index') }}">Cancelar</a>