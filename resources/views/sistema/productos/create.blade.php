@extends ("theme.$theme.layout")  <!-- */conecta ala plnatilla con contenido*/-->
@section('titulo')
Vehiculos
@endsection

@section('contenido')

    <div class="row"> <!-- nueva fila y justifcar-->
        <div class="col-lg-12"> <!-- pantallas xs md lg grande pequeñas medianas-->
            @include('includes.mensaje')
            @include('theme.lte.error')
            <div class="box box-success">
                <div class="box-header with-border">
                    <center> <h3 class="box-title"> Registro De Alquiler Vehiculos </h3> </center>
                    </div>

                    <div class="box body">


                        {{Form ::open(['route' =>['productos.store']])}}

                        @include ('sistema.marcas.partials.form')
                        {{ Form ::close( ) }}

                    </div>
                    <div class="box-footer"></div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
