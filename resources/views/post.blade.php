@extends('layouts.main')

@section('content')
    <section id="article">
        <header >
            <div class="text-center mb-4">
                <h1>{{$post->title}}</h1>
                <h3>{{$post->subtitle}}</h3>
                <small>{{$post->author}} - {{$post->publication_date}}</small>
            </div>
        </header>
        <main>
            <p>{{$post->text}}</p>
        </main>
    </section>

    <section id="comments" class=" my-4">
        <h2>Commenti</h2>
        @foreach ($post->comments as $comment)
        <div>
            <small>{{$comment->author}} - {{$comment->created_at->format('l d/m/Y H:i:s')}}</small>
            <p>{{$comment->text}}</p>
        </div>
        @endforeach
    </section>

    <section id="form" class=" my-4">
        <form action="{{route('add-comment', $post->id)}}" method="POST">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="author">Autore</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Scrivi il tuo nickname ">
            </div>
            <div class="form-group">
                <label for="text">Testo</label>
                <textarea name="text" id="text" class="form-control" rows="6" placeholder="Scrivi il tuo commento" value=""></textarea>
              </div>
              <input type="submit" value="Invia" class="btn btn-secondary">
        </form>
    </section>
@endsection