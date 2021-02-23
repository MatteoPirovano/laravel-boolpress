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
        <td>ID</td>  
        <td>title</td>  
        <td>subtitle</td>  
        <td>text</td>  
        <td>author</td>  
        <td>publication_date</td>  
        <td>created_at</td>  
        <td>updated_at</td>  
        <td></td>
        <td></td>
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
            {{-- <td>{{$post->infoPost->post_status}}</td> --}}
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