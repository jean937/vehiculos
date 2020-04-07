@extends ('plantilla')  <!-- */conecta ala plnatilla con contenido*/-->

@section('contenido')


{!! Form::open(['route', 'producto'])!!}

<div class="form-group">

    {!! Form ::label('name',  '*NOMBRE'); !!}

    {!! Form ::text('name',null,  ['class'=>'form-control']) !!}



</div>

    {!! Form ::submit('Guardar',  ['class'=>'btn btn-primary']) !!}



{!! Form::close() !!}












	<!-- <div class="col-10">
		<b><center><h1>PRODUCTOS</h1></center></b><
		<div class="card">
			  <div class="card-body">
              <tr class="table-active"></tr>


			    <form method="post" action="">

                    <div class="form-group">
                    <em><option>*Marcas</option></em>
                    <select name="menu"class="form-control">
                 <option>Marcas</option>
                   <option value="2">chevrolet</option>
               <option value="three">ferrari</option>
              </select> </div>


              <div class="form-group">
              <option>*</option>
                    <select name="menu"class="form-control">
                 <option>Categorias</option>
                   <option value="2">Buena</option>
               <option value="three">Mala</option>
              </select> </div>


                 <div class="form-group">
				    <label >* Codigo</label>
                <input type="number" class="form-control"  aria-describedby="cadigoHelp" placeholder=codigo>
				   </div>

                    <div class="form-group">
				   <label >* Nombre</label>
                   <input type="number" class="form-control"  aria-describedby="cadigoHelp" placeholder=nombre>
				   </div>

				  <div class="form-group">
				    <label >* Descripcion</label>
				    <textarea name="descrpcion" class="form-control" ></textarea>

				</div>

                  <div class="form-group">
                  <label >* Estado</label>
                   <input type="text" class="form-control"  aria-describedby="cadigoHelp" placeholder=estado>
                  </div>



				  <center><button type="submit" class="btn btn-success">Enviar</button></center>
				</form>
			  </div>
			</div>
	</div>
</div>-->

@endsection
