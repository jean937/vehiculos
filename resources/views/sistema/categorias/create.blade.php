@extends ("theme.$theme.layout")  <!-- */conecta ala plnatilla con contenido*/-->
@section('titulo')
CATEGORIAS
@endsection

@section('contenido')

    <div class="row "> <!-- nueva fila y justifcar-->
        <div class="col-lg-12"> <!-- pantallas xs md lg grande pequeñas medianas-->
            @include('includes.mensaje')
            @include('theme.lte.error')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"> crear categoria </h3>
                    </div>

                    <div class="box body">
                        {{Form ::open(['route' =>['categorias.store']])}}

                        @include ('sistema.categorias.formula')
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
