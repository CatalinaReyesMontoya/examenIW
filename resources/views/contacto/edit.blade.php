
Formulario para editar


<form action="{{url('/contacto/'.$contacto->$id)}}" method="post" >

@csrf 
{{ method_field('PATCH')}};

@include('contacto.form');
</form>

