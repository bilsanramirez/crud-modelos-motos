@extends('../layout/layout')
@section('content')
    <div class="col-sm-8">
        <table class="table table-bordered table-responsive">
            <tbody>
                <tr>
                    <td><strong>Modelo: </strong> {{ $modeloMoto->nombre  }}</td>
                </tr>
                <tr>
                    <td><strong>Precio: </strong>{{ $modeloMoto->precio  }}</td>
                </tr>
                <tr>
                    <td><strong>Prima: </strong>{{ $modeloMoto->prima  }}</td>
                </tr>
                <tr>
                    <td><strong>Imagen: </strong><img class="img-responsive" src="http://www.didemo.hn/{{ $modeloMoto->url_imagen  }}"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-sm-4">
        mensaje
    </div>
@endsection