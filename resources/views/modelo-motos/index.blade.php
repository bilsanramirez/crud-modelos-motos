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
                            <a href="{{ route('modelos-motos.show', $modeloMoto->id ) }}">Ver</a>
                        </td>
                        <td>Editar</td>
                        <td>Eliminar</td>
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