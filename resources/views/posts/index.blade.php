@extends('layouts.main')

@section('header')
  <h1>Post</h1>
@endsection

@section('content')    
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
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
          <tr>
            <td>{{$post->id}}</td>  
            <td>{{$post->title}}</td>  
            <td>{{$post->subtitle}}</td>  
            <td>{{$post->text}}</td>  
            <td>{{$post->author}}</td>  
            <td>{{$post->publication_date}}</td>  
            <td>{{$post->created_at}}</td>  
            <td>{{$post->updated_at}}</td> 
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection