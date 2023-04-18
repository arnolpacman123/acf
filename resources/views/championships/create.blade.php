@extends('layouts.app')

@section('title', 'Nuevo Campeonato')

@section('content')

    <div class="card mb-4">
        <h5 class="card-header">Nuevo Campeonato</h5>
        <div class="card-body">
            <form action="{{ route('championships.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del Campeonato</label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Ingrese el nombre del campeonato"
                        value="{{ old('name', '') }}"
                    />
                </div>
                <div class="mb-3">
                    <label for="start_date" class="form-label">Fecha de Inicio</label>
                    <input
                        type="date"
                        class="form-control"
                        id="start_date"
                        name="start_date"
                        placeholder="Ingrese la fecha del campeonato"
                        value="{{ old('start_date', '') }}"
                    />
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea
                        class="form-control"
                        id="description"
                        name="description"
                        rows="3"
                        placeholder="Ingrese una descripción"
                    >{{ old('description', '') }}</textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary me-2">Guardar</button>
                    <a class="btn btn-outline-secondary" href="{{ route('championships') }}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
