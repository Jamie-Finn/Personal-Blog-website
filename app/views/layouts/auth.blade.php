<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
    {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}
    
    <!-- Add custom CSS here -->
    {{ HTML::style('css/blog-home.css') }}
    {{ HTML::style('css/blog-post.css') }}

  </head>

  <body>
    
    @yield('content')
    

    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}
    {{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js')}}
  </body>
</html>