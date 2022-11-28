@extends('layouts.app')

@section('template_title')
    Caracteristica
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Caracteristica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('caracteristicas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Detalle</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caracteristicas as $caracteristica)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caracteristica->nombre }}</td>
											<td>{{ $caracteristica->detalle }}</td>
											<td>{{ $caracteristica->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('caracteristicas.destroy',$caracteristica->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('caracteristicas.show',$caracteristica->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('caracteristicas.edit',$caracteristica->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $caracteristicas->links() !!}
            </div>
        </div>
    </div>
@endsection
