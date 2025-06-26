<h1>{{$titulo}}</h1>  
<form method="post" action="{{route('eliminar usuario')}}">  
    @csrf  
<input type="text" name="nombre" placeholder="Ingrese su nombre">  
<input type="submit" value="Enviar">  
    @method("DELETE")  
</form>  
<a href="{{route('inicio')}}">Inicio</a>  