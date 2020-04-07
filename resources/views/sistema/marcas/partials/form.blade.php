 <form action="productos.create" method="POST" role="form">

    {{ csrf_field() }}
       {{form::label('nombre','nombre',['class'=>'form-control'])}}

</strong>

         {{form::text('nombre',null,['class'=>'form-control','placeholder'=>'nombre'])}}

        {{form::label('apellido','apellido',['class'=>'form-control'])}}

</strong>

            {{form::text('apellido',null,['class'=>'form-control','placeholder'=>'apellido'])}}


            {{form::label('cedula','cedula',['class'=>'form-control'])}}

</strong>

            {{form::number('cedula',null,['class'=>'form-control','placeholder'=>'cedula'])}}


            {{form::label('celular','celular',['class'=>'form-control'])}}

 </strong>

            {{form::number('celular',null,['class'=>'form-control','placeholder'=>'celular'])}}

            {{form::label('fecha_salida','fecha_salida',['class'=>'form-control'])}}

  </strong>

            {{form::date('fecha_salida',null,['class'=>'form-control','placeholder'=>'fecha'])}}

            {{form::label('fecha_devolucion','fecha_devolucion',['class'=>'form-control'])}}

     </strong>

            {{form::date('fecha_devolucion',null,['class'=>'form-control','placeholder'=>'fecha'])}}


           {{form::label('hora_alquiler','hora_alquiler',['class'=>'form-control'])}}
 </strong>

            {{form::text('hora_alquiler',null,['class'=>'form-control','placeholder'=>'hora'])}}

                                                        <form>
                                                <div class="form-group">
                                                        <label for="">Categoria</label>
                                                                <select name="categorias_id" id="inputcategorias_id" class="form-control ">
                                                        <option value="">-- Escoja el categoria --</option>
                                                                        @foreach ($categorias as $item)
                                                        <option value="{{ $item['id']}}"> {{$item ['categoria'], $item ['garantia']}}</option>


                                                        @endforeach
                                                    </select>
                                                    <form>
                                                        <div class="form-group">
                                                                <label for="">marcas</label>
                                                                        <select name="marcas_id" id="inputmarcas_id" class="form-control ">
                                                                <option value="">-- Escoja el marca --</option>
                                                                                @foreach ($marcas as $item)
                                                                <option value="{{ $item['id']}}"> {{$item ['marca']}}</option>

                                                                @endforeach
                                                            </select>





                 {{form::label('placa','placa',['class'=>'form-control'])}}

    </strong>

                {{form::text('placa',null,['class'=>'form-control','placeholder'=>'placa'])}}





                 {{form::label('valor_alquiler','valor_alquiler',['class'=>'form-control'])}}
     </strong>
                  {{form::number('valor_alquiler',null,['class'=>'form-control','placeholder'=>'valor'])}}







				  <center><button type="submit" class="btn btn-success">Enviar</button></center>
                </form>
            </form>
			  </div>
			</div>
	</div>
</div>



