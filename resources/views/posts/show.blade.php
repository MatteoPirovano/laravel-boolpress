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
          <td></td>
        </tr>
    @endforeach
  </table>
@endsection

@section('footer')
<div class="text-right">
  <a href="{{route('posts.index')}}" class="btn btn-primary">Lista Post</a>
</div>
@endsection