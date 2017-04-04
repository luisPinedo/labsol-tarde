@extends('layouts.principal')

@section('contenido')

@include('parciales.alerta')

<h1>Soy el index de post</h1>

@if($edad > 17 && $edad < 200)

<h3>Soy mayor de edad</h3>

@elseif($edad == 200)

<h2>Estas muerto</h2>

@else
<h3>Soy menor de edad</h3>

@endif

<ul>
@for ($i = 0; $i < 10; $i++)
    <li>The current value is {{ $i }}</li>
@endfor
</ul>

@foreach($datos as $n)
<p>{{$n}}</p>
@endforeach



@endsection
