@extends('layouts.main')

@section('header')
  <h1>Post</h1>
@endsection

@section('content')    

  @if (session('message'))
    <div class="alert alert-succes">
      {{session('message')}}
    </div>     
  @endif
  <table class="table table-dark table-stripped table-bordered">
    <thead>
      <tr>
        <th>ID</th>  
        <th>title</th>  
        <th>subtitle</th>  
        <th>text</th>  
        <th>author</th>  
        <th>publication_date</th>  
        <th>created_at</th>  
        <th>updated_at</th>  
        <th>status</th>
        <th>comment</th>
        <th>info</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
          <tr>
            <td>{{$post->id}}</td>  
            <td>{{$post->title}}</td>  
            <td>{{$post->subtitle}}</td>  
            <td>{{substr($post->text, 0,10)}}</td>  
            <td>{{$post->author}}</td>  
            <td>{{$post->publication_date}}</td>  
            <td>{{$post->created_at}}</td>  
            <td>{{$post->updated_at}}</td>
            <td>{{$post->infoPost->post_status}}</td>
            <td>{{$post->infoPost->comment_status}}</td>

            <td>
              <a href="{{route('posts.show', $post->id)}}" class="btn btn-success">
                <i class="fas fa-search"></i>
              </a>
            </td>
            <td>
              <a href="{{route('posts.edit', $post->id)}}" class="btn btn-success">
                <i class="fas fa-pencil-alt"></i>
              </a>
            </td>
            <td>
              <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
              </form>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection