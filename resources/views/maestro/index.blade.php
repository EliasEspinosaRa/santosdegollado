@extends('layouts.app')

@section('template_title')
    Maestro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Maestro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('maestros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Maestro') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('Exito'))
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
										<th>Apellidos</th>
										<th>Edad</th>
										<th>Grupos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($maestros as $maestro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $maestro->nombre }}</td>
											<td>{{ $maestro->apellidos }}</td>
											<td>{{ $maestro->edad }}</td>
											<td>{{ $maestro->grupos }}</td>

                                            <td>
                                                
                                                <form action="{{ route('maestros.destroy',$maestro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('maestros.show',$maestro->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('maestros.edit',$maestro->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $maestros->links() !!}
            </div>
        </div>
    </div>
@endsection
