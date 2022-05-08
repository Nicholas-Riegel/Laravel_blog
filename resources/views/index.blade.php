@extends('layouts.app')

@section('title')
  <title>Blog_0 | Home</title>
@endsection

{{ $btn = 'btn btn-md btn-outline-info'}}
{{ $border = 'border rounded ps-1 pe-1'}}

@section('content')
  @foreach ($posts as $post)
    
    <div class='container card p-3 mb-3'>
      
      <p class='mb-0'>Title:</p>
      <h3 class='{{ $border }}'>{{ $post->title }}</h3>
      <p class='mb-0'>Content:</p>
      <p class='{{ $border }}'>{{ $post->body }}</p>
      
      <div class='text-end'>

        <a 
          href="posts/{{ $post->id }}/edit"
          class='{{ $btn }} ms-2'>
          Edit
        </a>
      
        <form 
          action="posts/{{ $post->id }}" 
          method="POST"
          style="display: inline">  
          @csrf 
          @method('DELETE')
          <button 
            type="submit"
            class='{{ $btn }}'>
            Delete
          </button> 
        </form>

      </div>
    </div>
  @endforeach

@endsection
