@foreach ($usuarios as $usuario)
      <p> {{$usuario->email}}</p>
      <p>{{$usuario->password}}</p>

@endforeach
