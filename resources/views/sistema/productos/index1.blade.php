@extends ("theme.$theme.layout")  <!-- */conecta ala plnatilla con contenido*/-->
@section('titulo')
Vehiculos
@endsection

@section('contenido')

    <div class="row "> <!-- nueva fila y justifcar-->
        <div class="col-lg-12"> <!-- pantallas xs md lg grande pequeñas medianas-->
            <div class="box box-primary">
                <div class="box-header with-border">
                </div>
                        <div class="box-body table responsive no-padding">
                        <table class="table table-bordered table-hovez-table-stripe">
                             <thead>
                                <center> <h3>DETALLE DE REGISTRO</h3></center>

                                        <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Cedula</th>
                                        <th>Celular</th>
                                        <th>Fecha_s</th>
                                        <th>Fecha_d</th>
                                        <th>Horas o Dias
                                            
                                        </th>
                                        <th>Garantia</th>
                                        <th>Categoria</th>
                                        <th>Marca</th>
                                        <th>Placa</th>

                                        <th>valor</th>




                                        </tr>
                                </thead>
                                <tbody>
                                @foreach ($productos as $item)
                                    <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->apellido}}</td>
                                    <td>{{$item->cedula}}</td>
                                    <td>{{$item->celular}}</td>
                                    <td>{{$item->fecha_salida}}</td>
                                    <td>{{$item->fecha_devolucion}}</td>
                                    <td>{{$item->hora_alquiler}}</td>
                                    <td>{{$item->categorias->garantia}}</td>
                                    <td>{{$item->categorias->categoria}}</td>
                                    <td>{{$item->marcas->marca}}</td>
                                    <td>{{$item->placa}}</td>

                                    <td>{{$item->valor_alquiler}}</td>





                                    <td>

                                    </td>

                                    <td>

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
