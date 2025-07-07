@extends('layout')

@section('content')

<form class="form" action="{{route('produtos-update', ['id' => $produtos->id])}}" method="PUT">
        @csrf
        @method('put')
        <input type="text" value="{{$produtos->nome}}" placeholder="nome" name="nome">
        <input type="text" value="{{$produtos->descrição}}" placeholder="Desc" name="descrição">
        <input type="submit" value="atualizar">
</form>
@endsection