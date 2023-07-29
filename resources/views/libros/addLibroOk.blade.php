@extends('app')
@section('title', "¿Que a pasado con mi libro?")
@section('content')
    @if($id > 0)
    <x-alert type="green">
        <h2 class="m-2 y-2 bg-green-200">Agregado correctamente</h2>
    </x-alert>
    @else
    <x-alert type="red">
        <h2 class="m-2 y-2">Ha ocurrido un error al insertar</h2>
    </x-alert>
    @endif
@endsection