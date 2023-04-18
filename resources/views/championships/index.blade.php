@extends('layouts.app')

@section('title', 'Campeonatos')

@section('content')
    <h5>Campeonatos</h5>
    <!-- Account -->
    <div class="d-flex align-items-start align-items-sm-center gap-4">
        <div class="card shadow" style="width: 15rem; height: 13rem">
            <div class="card-body text-center">
                <p class="card-title"><i style="font-size: 100px"
                                         class="menu-icon tf-icons bx bxs-trophy text-warning"></i>
                </p>
                <a href="{{ route('championships.create') }}" class="btn btn-primary">Nuevo Campeonato</a>
            </div>
        </div>
        @foreach($championships as $championship)
            <div class="card shadow" style="width: 15rem; height: 13rem">
                <div class="card-body text-center">
                    <p class="card-title">{{ $championship->name }}</p>
                    <div class="d-grid gap-2 d-md-flex">
                        <a href="{{ route('championships.edit', $championship->id) }}"
                           class="btn btn-primary">Ver</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
