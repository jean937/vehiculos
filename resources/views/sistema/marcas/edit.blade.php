@extends ("theme.$theme.layout")  <!-- */conecta ala plnatilla con contenido*/-->
@section('titulo')
Marcas
@endsection

@section('contenido')

    <div class="row "> <!-- nueva fila y justifcar-->
        <div class="col-lg-12"> <!-- pantallas xs md lg grande pequeñas medianas-->
            @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <center><h3 class="box-title"> Editar Campos Marcas</h3> </center>
                    </div>

                    <div class="box body">

                        @include('theme.lte.error')
                        {{Form ::model($marca, ['route' =>['marcas.update',$marca->id],'method'=>'PUT'])}}

                        @include ('sistema.marcas.partials.formulario')
                        {{ Form ::close( ) }}


                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
