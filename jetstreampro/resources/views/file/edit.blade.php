
<form action="{{url ('/file/'.$file->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
@include('file.form',['modo'=>'Editar']);
</form>