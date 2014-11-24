
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