@extends('layouts.app')

@section('template_title')
    Domo
@endsection

@section('contenido_app')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Domo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('domos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombredomo</th>
										<th>Descripcion</th>
										<th>Tipodomo</th>
										<th>Caracteristicas Id</th>
										<th>Capacidad</th>
										<th>Numerobaños</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($domos as $domo)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $domo->nombredomo }}</td>
											<td>{{ $domo->descripcion }}</td>
											<td>{{ $domo->tipodomo }}</td>
											<td>{{ $domo->caracteristicas_id }}</td>
											<td>{{ $domo->capacidad }}</td>
											<td>{{ $domo->numerobaños }}</td>

                                            <td>
                                                <form action="{{ route('domos.destroy',$domo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('domos.show',$domo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('domos.edit',$domo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $domos->links() !!}
            </div>
        </div>
    </div>
@endsection
