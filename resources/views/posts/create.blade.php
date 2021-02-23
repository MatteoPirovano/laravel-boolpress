@extends('layouts.main')

@section('header')
  <h1>Crea un nuovo post</h1>
@endsection

@section('content')
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif


  <form action="{{route('posts.store')}}" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{old('title')}}">
    </div>

    <div class="form-group">
      <label for="subtitle">Sottotitolo</label>
      <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sottotitolo" value="{{old('subtitle')}}">
    </div>

    <div class="form-group">
      <label for="text">Testo</label>
      <textarea name="text" id="text" class="form-control" rows="6" placeholder="Testo" value="{{old('mediumText')}}"></textarea>
    </div>

    <div class="form-group">
      <label for="author">Autore</label>
      <input type="author" class="form-control" id="author" name="author" placeholder="Autore" value="{{old('author')}}">
    </div>

    <div class="form-group">
      <label for="publication_date">Data pubblicazione</label>
      <input type="date" class="form-control" name="publication_date" id="publication_date" placeholder="Data pubblicazione" value="{{old('publication_date')}}">
    </div>

    <button class="btn btn-success">Salva</button>
    <a href="{{route('posts.index')}}" class="btn btn-primary" >Lista Post</a>
  </form>
@endsection
