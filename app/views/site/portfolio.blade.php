@extends('layouts.master')

@section('title')
Portfolio | Jay's Blog
@stop

@section('description')
Welcome to the Portfolio page. Here you will find information on projects that I have undertaken for clients.
@stop

@section('author')
Jamie Finn
@stop

@section('content')

<h1 id="portfolio_title">My Portfolio</h1>
<hr>

<div class="container">
	<h3>Keido Hair & Beauty Freelance project</h3>
    
    <a href="#myModal1" data-toggle="modal"><img class="col-xs-6 col-md-4" src="img/keidoexample.png"	alt="Keido Example" /></a>

    <div class="col-xs-6 col-md-3">
    	<p>I created this website for a local firm in Stoke-on-Trent who wanted a better 
    	looking website to be able to advertise their company better online.</p>
	<p>It was completely revamped using Twitter Bootstrap as the foundation template for the design and then adding custom modifications in a separate CSS file to complete the layout(site also fully mobile responsive).</p>
	<p>It was also built in the Laravel PHP framework which provides simple routing to allow site pages to be assigned to a route get method e.g about.blade.php file is assigned to "www.keidosalon.co.uk/about".</p>
	<p><a href="www.keidosalon.co.uk">www.keidosalon.co.uk</a></p>
    </div>
</div>

<div class="container">
	<h3>WordPress blog created on local machine</h3>
    
    <a href="#myModal2" data-toggle="modal"><img class="col-xs-6 col-md-4" src="img/wordpressblog.png"	alt="Wordpress blog" /></a>

    <div class="col-xs-6 col-md-3">
    	<p>I created this blog template for a fictional gaming blog on my local machine. It enabled me to develop my skills in using content management systems in this case WordPress.
    	</p>
	<p>As the PHP code was already provided baring a few tweaks, WordPress only teaches you what PHP does visually whereas I prefer to have full control in actually writing the code myself and to work within an MVC framework like Laravel.</p>
	<p>The benefits of WordPress do far outweigh the negatives though and it is fantastic for being able to get a blog site up and running in as minimal time as possible.</p>
        <p>GitHub source code: <a href="http://github.com/Jamie-Finn/WordPress-gaming-blog">github.com/Jamie-Finn/WordPress-gaming-blog</a></p>
    </div>
</div>

<div class="container">
	<h3>Personal blog and portfolio site</h3>

    <a href="#myModal3" data-toggle="modal"><img class="col-xs-6 col-md-4" src="img/personalblog.png"	alt="Personal blog" /></a>


    <div class="col-xs-6 col-md-3">
    	<p>This personal blog and portfolio site that you are currently on is a custom built content management system made with the Laravel MVC framework.
    	</p>
	<p>An MVC framework such as Laravel uses Object-Oriented PHP that allows you to set up and maintain larger web applications that were more difficult with procedural PHP. I was able to create a functional login and register system to access the admin pages of the site and be able to store submitted blog data into a MySql database.</p>
    	<p>GitHub source code: <a href="http://github.com/Jamie-Finn/Personal-Blog-website">github.com/Jamie-Finn/Personal-Blog-website</a></p>
    </div>
</div>

<div class="container">
	<h3>Subscription payment using Laravel and Stripe</h3>
    
    <a href="#myModal4" data-toggle="modal"><img class="col-xs-6 col-md-4" src="img/subscription.png"	alt="Subacription payments" /></a>

    <div class="col-xs-6 col-md-3">
    	<p>The great thing about using Laravel and the Stripe API is that they work tremendously well together to provide a simple billing system where people's details do not touch your server.
    	</p>
	<p>This web application allows a user to subscribe to a small plan or large plan, enter their payment details and then be able to upgrade or cancel their subscription at any time. Their canceled contract also lasts until the end of the current month so that they still get their current months worth of subscription.</p>
        <p>GitHub source code: <a href="http://github.com/Jamie-Finn/Laravel-Stripe-subscription-billing">github.com/Jamie-Finn/Laravel-Stripe-subscription-billing</a></p>
    </div>
</div>


<!--modal content-->
<div class="modal fade" id="myModal1">
   <button class="close" data-dismiss="modal">&times;</button>
    <img class="col-xs-12 col-md-12" src="img/keidoexamplehd.png"  alt="Keido example" />
</div>

<div class="modal fade" id="myModal2" role="dialog">
    <button class="close" data-dismiss="modal">&times;</button>
    <img class="col-xs-12 col-md-12" src="img/wordpressbloghd.png"  alt="Wordpress blog" />
</div>

<div class="modal fade" id="myModal3">
    <button class="close" data-dismiss="modal">&times;</button>
    <img class="col-xs-12 col-md-12" src="img/personalbloghd.png"  alt="Personal blog" />
</div>

 <div class="modal fade" id="myModal4">
    <button class="close" data-dismiss="modal">&times;</button>
    <img class="col-xs-12 col-md-12" src="img/subscriptionhd.png"  alt="Subscription payments" />
 </div>
<!--modal content ends-->

@stop
