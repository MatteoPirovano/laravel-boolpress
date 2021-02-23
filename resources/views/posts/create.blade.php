@extends('layouts.main')

@section('header')
  <h1>Crea un nuovo post</h1>
@endsection

@section('content')
  <form action="{{route('posts.store')}}" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
      <label for="name">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
    </div>

    <div class="form-group">
      <label for="name">Sottotitolo</label>
      <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sottotitolo">
    </div>

    <div class="form-group">
      <label for="text">Testo</label>
      <textarea name="text" id="text" class="form-control" rows="15" placeholder="Testo"></textarea>
    </div>

    <div class="form-group">
      <label for="name">Autore</label>
      <input type="author" class="form-control" id="author" name="author" placeholder="Autore">
    </div>

    <button class="btn btn-success">Salva</button>
    <a href="{{route('posts.index')}}" class="btn btn-primary" >Lista Post</a>
  </form>
@endsection
