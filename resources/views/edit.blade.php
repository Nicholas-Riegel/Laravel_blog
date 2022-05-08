@extends('layouts.app')

@section('title')
  <title>Blog_0 | Edit</title>
@endsection

{{ $btn = 'btn btn-md btn-outline-info'}}
{{ $formGroup = 'form-group mb-3 border rounded'}}

@section('content')

  <div class='card container border p-3 rounded'>

    <form action="/posts/{{ $post->id }}" method="POST">
      
      @csrf
      @method('PUT')

      <label 
        for="title"
        class='mb-0'>
        Title:
      </label>
      <br>
      <div class='{{ $formGroup }}'>
        <input 
          type="text" 
          id="title" 
          name="title"
          class='form-control'
          value="{{ $post->title }}">
      </div>
      <label 
        for="content"
        class='mb-0'>
        Content:
      </label>
      <div class='{{ $formGroup }}'>
        <textarea 
          name="body" 
          id="content"
          class="form-control">{{ $post->body }}</textarea>
      </div>
      <div class='text-end'>
        <input 
          type="submit" 
          value="Save"
          class='{{ $btn }}'>
    </form>
        <a 
          href="/posts"
          class='{{ $btn }} ms-2'>
          Cancel
        </a>
      </div>
        {{-- validation: $errors is a global variable --}}
    @if ($errors->any())
      <div class="text-center">
        @foreach ($errors->all() as $error)
          <li class="list-unstyled text-danger">
            {{ $error }}
          </li>
        @endforeach
      </div>
    @endif
  </div>

@endsection