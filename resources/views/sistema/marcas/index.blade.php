@extends ("theme.$theme.layout")  <!-- */conecta ala plnatilla con contenido*/-->
@section('titulo')
Marcas
@endsection

@section('contenido')

    <div class="row "> <!-- nueva fila y justifcar-->
        <div class="col-lg-12"> <!-- pantallas xs md lg grande pequeñas medianas-->
            <div class="box box-primary">
                <div class="box-header with-border">
                <center><h3> REGISTRO MARCAS
                        <a href="{{route('marcas.create') }}" class="btn btn-success bd-purple-light">ingresa marca</a>
                        </h3><center>

                        </div>
                        <div class="box-body table responsive no-padding">
                        <table class="table table-bordered table-hovez-table-stripe">
                             <thead>
                                     <tr>
                                        <th>Id</th>
                                        <th>Marca</th>
                                        <th>Botones</th>
                                        <th>Botones</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach ($marcas as $item)
                                    <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->marca}}</td>
                                    <td>
                                        <a href="{{route('marcas.edit', $item->id)}}" class="btn btn-success">editar</a>
                                    </td>

                                    <td>
                                        <form method="post" action="{{ url('/marcas/'.$item->id) }}">

                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿BORRAR?');">Borrar</button>
                                         {{ csrf_field() }}
                                         {{ method_field('DELETE') }}

                                    </td>

                                      </form>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
