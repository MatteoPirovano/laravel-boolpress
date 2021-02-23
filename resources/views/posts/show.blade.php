@extends('layouts.main')

@section('header')
    <h1>Dettagio Post</h1>
    {{-- <p>Post status: {{$post->infoPost->post_status}}</p>
    <p>Coment status: {{$post->infoPost->comment_status}}</p> --}}
@endsection

@section('content')
  <table class="table table-dark table-stripped table-bordered">
    @foreach ($post->getAttributes() as $key=>$value)
        <tr>
          <td><strong>{{$key}}</strong></td>
          <td>{{$value}}</td>
        </tr>
    @endforeach
    
  </table>
  
  <h2>Status</h2>
  <table class="table table-dark table-stripped table-bordered">
    @foreach ($post->infopost->getAttributes() as $key=>$value)
        <tr>
          <td><strong>{{$key}}</strong></td>
          <td>{{$value}}</td>
        </tr>
    @endforeach
  </table>

  <h2>Commenti</h2>
  <ul>
    @foreach ($post->comments as $comment)
        <li>
          <p>{{$comment->text}}</p>
          <small>{{$comment->author}}</small>
        </li>
    @endforeach
  </ul>
@endsection

@section('footer')
<div class="text-right">
  <a href="{{route('posts.index')}}" class="btn btn-primary">Lista Post</a>
</div>
@endsection