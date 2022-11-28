@extends('layouts.app')

@section('template_title')
    {{ $domo->name ?? 'Show Domo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Domo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('domos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombredomo:</strong>
                            {{ $domo->nombredomo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $domo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodomo:</strong>
                            {{ $domo->tipodomo }}
                        </div>
                        <div class="form-group">
                            <strong>Caracteristicas Id:</strong>
                            {{ $domo->caracteristicas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad:</strong>
                            {{ $domo->capacidad }}
                        </div>
                        <div class="form-group">
                            <strong>Numerobaños:</strong>
                            {{ $domo->numerobaños }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
