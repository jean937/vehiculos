@extends ("theme.$theme.layout")  <!-- */conecta ala plnatilla con contenido*/-->
@section('titulo')
Editar registro Alquiler Vehiculo
@endsection

@section('contenido')

    <div class="row "> <!-- nueva fila y justifcar-->
        <div class="col-lg-12"> <!-- pantallas xs md lg grande pequeñas medianas-->
            @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <center><h3 class="box-title"> Editar Registro cliente Alquiler </h3> </center>
                    </div>

                    <div class="box body">

                        @include('theme.lte.error')

                        {{Form ::model($productos, ['route' =>['productos.update',$productos->id],'method'=>'PUT'])}}

                        @include ('sistema.marcas.partials.form')
                        {{ Form ::close( ) }}

                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
