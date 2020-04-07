
@if(session()->has('errors'))
@foreach($errors->all() as $error)
<label> {{$error}} </label>

@endforeach
@endif

<div class="card">
    <div class="card-body">
    <tr class="table-active">
    <div class="col-12">
    <strong>

{{form::label('categoria','Categorias',['class'=>'form-control'])}}

</strong>

{{form::text('categoria',null,['class'=>'form-control','required','minlength=2','maxlength=20','placeholder'=>'ingresa un categoria'])}}

{{form::label('descripcion','Descripcion',['class'=>'form-control'])}}

</strong>

{{form::text('descripcion',null,['class'=>'form-control','required','minlength=2','maxlength=20','placeholder'=>'ingresa una descripcion'])}}



{{ Form::submit('Guardar',['class'=>'btn btn-success']) }}
         </div>
     </div>
</div>
</div>
