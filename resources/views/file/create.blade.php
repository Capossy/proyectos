
<form action="{{ url('/file')}}" method="post" enctype="multipart/form-data"> 
@csrf
@include('file.form',['modo'=>'Crear'])
</form>