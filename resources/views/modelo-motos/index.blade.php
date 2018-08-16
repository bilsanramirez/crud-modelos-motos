@extends('../layout/layout')
@section('content')
    <div class="col-sm-8">
        <h2>
            Listado Modelos Motos
            <a href="" class="btn btn-primary float-right">Nuevo</a>
        </h2>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    {{--<th>Prima</th>--}}
                    {{--<th>Requiere prima</th>--}}
                    {{--<th>Url imagen</th>--}}
                    {{--<th>Estado</th>--}}
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($modelosMotos as $modeloMoto)
                    <tr>
                        <td>{{$modeloMoto->id}}</td>
                        <td>{{$modeloMoto->nombre}}</td>
                        <td>{{$modeloMoto->precio}}</td>
                        {{--<td>{{$modeloMoto->prima}}</td>--}}
                        {{--<td>{{$modeloMoto->requiere_prima}}</td>--}}
                        {{--<td>{{$modeloMoto->url_imagen}}</td>--}}
                        {{--<td>{{$modeloMoto->estado}}</td>--}}
                        <td>
                            <a href="{{ route('modelos-motos.show', $modeloMoto->id ) }}" class="btn btn-link">Ver</a>
                        </td>
                        <td>
                            <a href="{{ route('modelos-motos.edit', $modeloMoto->id ) }}" class="btn btn-link">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('modelos-motos.destroy', $modeloMoto->id ) }}" method="POST">
                               {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-link">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $modelosMotos->render() !!}
    </div>
    <div class="col-sm-4">
        mensaje
    </div>
@endsection