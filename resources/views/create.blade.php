@extends('layout')

@section('content')

<form class="form" action="{{route('produtos-insert')}}" method="POST">
        @csrf
        <input type="text" placeholder="Nome" name="nome">
        <input type="text placeholder="Desc" name="descrição">
        <input type="submit" value="cadastrar">
</form>
@endsection