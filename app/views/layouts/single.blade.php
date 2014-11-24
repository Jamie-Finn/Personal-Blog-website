<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap core CSS -->
    {{ HTML::style('http://fonts.googleapis.com/css?family=Cabin:600italic') }}
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
    {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}
    
    <!-- Add custom CSS here -->
    {{ HTML::style('css/blog-home.css') }}
    {{ HTML::style('css/blog-post.css') }}

  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="shutterIcon fa fa-bars"></i>
          </button>
          {{ HTML::link('/', 'Jamie Finn', array('class' => 'navbar-brand')) }}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>{{ HTML::link('about', 'ABOUT ME') }}</li>
            <li>{{ HTML::link('portfolio', 'PORTFOLIO') }}</li>
            <li>{{ HTML::link('contact', 'CONTACT') }}</li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        @yield('content')
        </div>
      <hr>
      
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Jay's Blog 2014 &middot; {{ HTML::link('http://www.facebook.com/jamie.finn.963', '', array('class' => 'fa fa-facebook-square', 'id' => 'footerLink')) }} &middot; {{ HTML::link('http://twitter.com/JamieF2591', '', array('class' => 'fa fa-twitter', 'id' => 'footerLink')) }} </p>
          </div>
        </div
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}
    {{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js')}}
  </body>
</html>