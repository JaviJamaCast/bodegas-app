@extends('layouts.master')

@section('title', 'Lista de Artículos')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Crear Nueva Bodega
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('bodegas.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                    @if ($errors->has('nombre'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nombre') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="ubicacion">Ubicacion:</label>
                    <input type="text" class="form-control {{ $errors->has('ubicacion') ? 'is-invalid' : '' }}" id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}" required>
                    @if ($errors->has('ubicacion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ubicacion') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control {{ $errors->has('direccion') ? 'is-invalid' : '' }}" id="direccion" name="direccion" value="{{ old('direccion') }}" required>
                    @if ($errors->has('direccion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('direccion') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control {{$errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="contacto_persona">Persona de contacto:</label>
                    <input type="text" class="form-control {{$errors->has('persona_contacto') ? 'is-invalid' : '' }}" id="contacto_persona" name="contacto_persona" value="{{ old('contacto_persona') }}" required>
                    @if ($errors->has('persona_contacto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('persona_contacto') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="anyo_fundacion">Año de fundación:</label>
                    <input type="number" class="form-control {{ $errors->has('anyo_fundacion') ? 'is-invalid' : '' }}" id="anyo_fundacion" name="anyo_fundacion" min="1900" max="{{ date('Y') }}" value="{{ old('anyo_fundacion') }}" required>
                    @if ($errors->has('anyo_fundacion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('anyo_fundacion') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion:</label>
                    <textarea class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" id="descripcion" name="descripcion" required>{{ old('descripcion') }}</textarea>
                    @if ($errors->has('descripcion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descripcion') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control {{ $errors->has('telefono') ? 'is-invalid' : '' }}" id="telefono" name="telefono" value="{{ old('telefono') }}" required>
                    @if ($errors->has('telefono'))
                    <div class="invalid-feedback">
                        {{ $errors->first('telefono') }}
                    </div>
                    @endif
                </div>
                <!-- Campo para Dispone de Restaurante -->
                <div class="form-group">
                    <label>Dispone de Restaurante:</label>
                    <div>
                        <input type="radio" id="disp_restaurante_si" name="disp_restaurante" checked value="1" required>
                        <label for="disp_restaurante_si">Sí</label>
                    </div>
                    <div>
                        <input type="radio" id="disp_restaurante_no" name="disp_restaurante" value="0" required>
                        <label for="disp_restaurante_no">No</label>
                    </div>
                </div>

                <!-- Campo para Dispone de Hotel -->
                <div class="form-group">
                    <label>Dispone de Hotel:</label>
                    <div>
                        <input type="radio" id="disp_hotel_si" name="disp_hotel" value="1" required>
                        <label for="disp_hotel_si">Sí</label>
                    </div>
                    <div>
                        <input type="radio" id="disp_hotel_no" name="disp_hotel" checked value="0" required>
                        <label for="disp_hotel_no">No</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-4">Crear</button>
                <a href="{{ route('bodegas.index') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer', 'Diputación Foral de Álava')