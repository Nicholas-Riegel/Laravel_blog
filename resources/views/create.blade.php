@extends('layouts.app')

@section('title')
  <title>Blog_0 | Create</title>
@endsection

{{ $btn = 'btn btn-md btn-outline-info'}}
{{ $formGroup = 'form-group mb-3 border rounded'}}
{{ $formControl = 'form-control ps-1 pe-1' }}

@section('content')

  <div class='container card  p-3'>

    <form action="/posts" method="POST">
      
      @csrf

      <label 
        for="title" 
        class='mb-0'>Title:
      </label>
      <br>
      <div class='{{ $formGroup }}'>
        <input 
          type="text" 
          id="title" 
          name="title"
          class='{{ $formControl }}'>
      </div>
      <br>
      <label 
        for="content"
        class='mb-0'>Content:
      </label>
      <br>
      <div class='{{ $formGroup }}'>
        <textarea 
          name="body" 
          id="content"
          class='{{ $formControl }}'> 
        </textarea>
      </div>
      <br>
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
      <div class="w-4/8 class=m-auto text-center">
        @foreach ($errors->all() as $error)
          <li class="list-unstyled text-danger">
            {{ $error }}
          </li>
        @endforeach
      </div>
    @endif
  </div>

@endsection