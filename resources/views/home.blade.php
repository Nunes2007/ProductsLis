@extends('layout')

@section('content')
<section>
    <span>
    <button class="bg-blue-500 w-15 h-10 m-2" style="border-radius: 5px;"><a href="{{route('produtos-create')}}"><i class="bi bi-plus-lg text-white"></i></a></button>
    </span>
    <div class="container">
        @foreach($produtos as $produto)
        <article>
            <div>
                <h1>{{$produto->nome}}</h1>
                <hr>
                <p>{{$produto->descrição}}</p>
            </div>
            <div class="buttons">
                <button class="bg-blue-500 w-15 h-10" style="border-radius: 5px;"><a href="{{route('produtos-edit', ['id' => $produto->id])}}"><i class="bi bi-pencil-square text-white"></i></a></button>
                <form class="form-delete" action="{{route('produtos-destroy', ['id' => $produto->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 w-15 h-10" style="border-radius: 5px;" type="submit"><i class="bi bi-trash text-white"></i></button>
                </form>
            </div>
        </article>
        @endforeach
    </div>
</section>
@endsection