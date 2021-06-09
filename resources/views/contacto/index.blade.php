Mostrar la lista de los contactos de un usuario
<a href="{{ url ('empleado/create')}}">Registrar nuevo empleado</a>

<table class="table table-light">
  <thead class:"thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">telefonoFijo</th>
      <th scope="col">telefonoCelular</th>
      <th scope="col">fechaNacimiento</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contactos as $contacto)
    <tr>
      <td>{{ $contacto -> id }}</td>
      <td>{{ $contacto -> Nombre }}</td>
      <td>{{ $contacto -> Apellido }}</td>
      <td>{{ $contacto -> telefonoFijo }}</td>
      <td>{{ $contacto -> telefonoCelular }}</td>
      <td>{{ $contacto -> fechaNacimiento }}</td>
      <td>{{ $contacto-> Correo }}</td>
      <td>
      
      <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}"> Editar</a>
      
      
      <form action="{{ url('/empleado/'.$empleado->id )}}" method="post">
      @csrf 
      {{ method_field('DELETE')}}
      <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
      </form>
      
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
