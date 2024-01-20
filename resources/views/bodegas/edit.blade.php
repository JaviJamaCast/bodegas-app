@extends('layouts.master')

@section('title', 'Lista de Artículos')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Editar Bodega
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('bodegas.update', $bodega) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" id="nombre" name="nombre" value="{{ $bodega->nombre }}" required>
                    @if ($errors->has('nombre'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nombre') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="ubicacion">Ubicacion:</label>
                    <input type="text" class="form-control {{ $errors->has('ubicacion') ? 'is-invalid' : '' }}" id="ubicacion" name="ubicacion" value="{{ $bodega->ubicacion }}" required>
                    @if ($errors->has('ubicacion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ubicacion') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control {{ $errors->has('direccion') ? 'is-invalid' : '' }}" id="direccion" name="direccion" value="{{ $bodega->direccion }}" required>
                    @if ($errors->has('direccion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('direccion') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control {{$errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" value="{{ $bodega->email }}" required>
                    @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="contacto_persona">Persona de contacto:</label>
                    <input type="text" class="form-control {{$errors->has('contacto_persona') ? 'is-invalid' : '' }}" id="contacto_persona" name="contacto_persona" value="{{ $bodega->contacto_persona}}" required>
                    @if ($errors->has('contacto_persona'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contacto_persona') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="anyo">Año de fundación:</label>
                    <input type="number" class="form-control {{ $errors->has('anyo_fundacion') ? 'is-invalid' : '' }}" id="anyo" name="anyo_fundacion" min="1900" max="{{ date('Y') }}" value="{{ $bodega->anyo_fundacion }}" required>
                    @if ($errors->has('anyo_fundacion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('anyo_fundacion') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion:</label>
                    <textarea class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" id="descripcion" name="descripcion" required>{{$bodega->descripcion}}</textarea>
                    @if ($errors->has('descripcion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descripcion') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control {{ $errors->has('telefono') ? 'is-invalid' : '' }}" id="telefono" name="telefono" value="{{ $bodega->telefono }}" required>
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
                        <input type="radio" id="disp_restaurante_si" name="disp_restaurante" value="1" {{ $bodega->disp_restaurante == 1 ? 'checked' : '' }} required>
                        <label for="disp_restaurante_si">Sí</label>
                    </div>
                    <div>
                        <input type="radio" id="disp_restaurante_no" name="disp_restaurante" value="0" {{ $bodega->disp_restaurante == 0 ? 'checked' : '' }} required>
                        <label for="disp_restaurante_no">No</label>
                    </div>

                </div>

                <!-- Campo para Dispone de Hotel -->
                <div class="form-group">
                    <label>Dispone de Hotel:</label>
                    <div>
                        <input type="radio" id="disp_hotel_si" name="disp_hotel" value="1" {{ $bodega->disp_hotel == 1 ? 'checked' : '' }} required>
                        <label for="disp_hotel_si">Sí</label>
                    </div>
                    <div>
                        <input type="radio" id="disp_hotel_no" name="disp_hotel" value="0" {{ $bodega->disp_hotel == 0? 'checked' : '' }} required>
                        <label for="disp_hotel_no">No</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-4">Editar</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer', 'Diputación Foral de Álava')