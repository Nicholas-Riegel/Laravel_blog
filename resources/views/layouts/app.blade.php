<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <style>
    .card{
      box-shadow: 5px 10px 20px 1px rgba(0,0,0,0.25) !important;
      max-width: 50%;
    }
    h1:hover{
      text-decoration: underline !important;
    }
    </style>

@yield('title')

</head>

{{ $h1 = 'display-6 text-info' }}

<body>
  <nav class="navbar fixed-top bg-secondary">
    <div class="container">
      <a href="/posts" class='text-decoration-none'>
        <h1 class="{{ $h1 }}">
          Home
        </h1>
      </a>
      <a href="/posts/create" class='text-decoration-none'>
        <h1 class='{{ $h1 }}'>
          Create New Post
        </h1>
      </a>
    </div>
  </nav>
  
  <div style='margin-top: 6rem'>
    
    @yield('content')
    
  </div>

</body>
</html>