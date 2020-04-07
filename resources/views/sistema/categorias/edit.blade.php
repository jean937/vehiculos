@extends ("theme.$theme.layout")  <!-- */conecta ala plnatilla con contenido*/-->
@section('titulo')
Categoria
@endsection

@section('contenido')

    <div class="row "> <!-- nueva fila y justifcar-->
        <div class="col-lg-12"> <!-- pantallas xs md lg grande pequeñas medianas-->
            @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"> Editar Campos Categorias </h3>
                    </div>

                    <div class="box body">


                        {{Form ::model($categoria, ['route' =>['categorias.update',$categoria->id],'method'=>'PUT'])}}

                        @include ('sistema.categorias.formula')
                        {{ Form ::close( ) }}









                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
