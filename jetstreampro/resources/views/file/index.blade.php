Inicio <br>
@if(Session::has('mensaje'))
  {{Session::get('mensaje')}}  
@endif
<br><a href="{{url('file/create')}}">Subir Video</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>ID de Usuario</th>
            <th>ID de Empresa</th>
            <th>ID de Categoria</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Archivo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($files as $file)
        <tr>
            <td>{{ $file->id}}</td>
            <td>{{ $file->usuario_id}}</td>
            <td>{{ $file->empresa_id}}</td>
            <td>{{ $file->categoria_id}}</td>
            <td>{{ $file->tipo}}</td>
            <td>{{ $file->nombre}}</td>

            <td>   
                <video controls width="200" controlslist="nodownload">
                    <source src="{{asset('storage').'/'.$file->url}}" alt="" type="video/mp4">
                </video>  
            </td>
            
            <td>

                </form>
                <a href="{{url ('/file/'.$file->id.'/edit')}}">
                    Editar
                </a>

                <form action="{{ url ('/file/'.$file->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('Desea Borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>