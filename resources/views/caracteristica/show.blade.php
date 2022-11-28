@extends('layouts.app')

@section('template_title')
    {{ $caracteristica->name ?? 'Show Caracteristica' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Caracteristica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('caracteristicas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $caracteristica->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $caracteristica->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $caracteristica->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
