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

<h1 id="portfolio_title">My Portfolio/Personal projects</h1>
<p><i>Projects are listed in order of completion and the images can be clicked for fullscreen view</i></p>
<hr>

<div class="container">
	<h3>Keido Hair & Beauty Freelance project</h3>
    
    <a href="#myModal1" data-toggle="modal"><img class="col-xs-6 col-md-4" src="img/keidoexample.png"	alt="Keido Example" /></a>

    <div class="col-xs-6 col-md-3">
    	<p>I created this website for a local firm in Stoke-on-Trent who wanted a better 
    	looking website to be able to advertise their company better online.</p>
		<p>It was completely revamped using Twitter Bootstrap as the foundation template for the design and then adding custom modifications in a separate CSS file to complete the layout(site also fully mobile responsive).</p>
		<p>It was also built in the Laravel PHP framework which provides simple routing to allow site pages to be assigned to a route get method e.g about.blade.php file is assigned to "www.keidosalon.co.uk/about".</p>
		<p><a href="http://www.keidosalon.co.uk">www.keidosalon.co.uk</a></p>
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
		<p>This web application allows a user to subscribe to a small plan or large plan, enter their payment details and then be able to upgrade or cancel their subscription at anytime. Their canceled contract also lasts until the end of the current month so that they still get their current months worth of subscription.</p>
        <p>GitHub source code: <a href="http://github.com/Jamie-Finn/Laravel-Stripe-subscription-billing">github.com/Jamie-Finn/Laravel-Stripe-subscription-billing</a></p>
    </div>
</div>

<div class="container">
    <h3>QR Code Generator using the endroid/QrCode library</h3>
    
    <a href="#myModal5" data-toggle="modal"><img class="col-xs-6 col-md-4" src="img/qrcode.png"   alt="QR Code Generator" /></a>

    <div class="col-xs-6 col-md-3">
        <p>The endroid/QrCode library provides ready-made methods that allow you to generate a QR code in an image format using PHP and then display it to the user so that they can scan it with their Smartphone.
        </p>
        <p>You can provide either a link to a website or just simple text that is then displayed to the user when they have scanned the code. If you click on the image on the left you will see it in higher quality and then you can scan it with your Smartphone which will contain a link to my personal blog site!</p>
        <p>GitHub source code: <a href="http://github.com/Jamie-Finn/QR-Code-Generator-using-Endroid">github.com/Jamie-Finn/QR-Code-Generator-using-Endroid</a></p>
    </div>
</div>

<div class="container">
    <h3>Login and Register system using OOP PHP</h3>
    
    <a href="#myModal6" data-toggle="modal"><img class="col-xs-6 col-md-4" src="img/loginreg.png"   alt="OOP Login and Register System login" /></a>

    <div class="col-xs-6 col-md-3">
        <p>This Login and Register authentication system was coded using Object-Oriented PHP.
        </p>
        <p>It allows the user to be able to register for an account, sign in and then be able to update their profile name and change their password. There is also a remember me functionality on the login page.</p>
        <p>The authentication system is protected from CSRF and SQL injection by generating a token and using prepared statements.</p>
        <p>This can be integrated with the To do list app below for more functionality.</p>
        <p>GitHub source code: <a href="http://github.com/Jamie-Finn/Login-and-Register-system-using-OOP">github.com/Jamie-Finn/Login-and-Register-system-using-OOP</a></p>
    </div>
</div>

<div class="container">
    <h3>To do list app using PHP</h3>
    
    <a href="#myModal7" data-toggle="modal"><img class="col-xs-6 col-md-4" src="img/todo.png"   alt="PHP To do list" /></a>

    <div class="col-xs-6 col-md-3">
        <p>This To do list app was coded using Object-Oriented PHP.
        </p>
        <p>It allows the user to be able to add a list item, mark it as done and then be able to undo the marked item or remove it from the list.</p>
        <p>As stated with the Login and Register system, this To do app can be combined with it! as a proper authentication system is a better alternative than to simulate a user being signed in through a session.</p>
        <p>The user being signed in was simulated as it helped when developing the app.</p>
        <p>GitHub source code: <a href="http://github.com/Jamie-Finn/To-do-list-using-PHP">github.com/Jamie-Finn/To-do-list-using-PHP</a></p>
    </div>
</div>

<div class="container">
    <h3>Authentication system created in Laravel</h3>
    
    <a href="#myModal8" data-toggle="modal"><img class="col-xs-6 col-md-4" src="img/laravelauth.png"   alt="Laravel Authentication system" /></a>

    <div class="col-xs-6 col-md-3">
        <p>This Authentication system was created in Laravel
        </p>
        <p>It is similar to my OOP Login and Register system but this time it was built within a PHP framework.</p>
        <p>It also includes some different functionality such as a Password reminder feature which sends an email to an authenticated user with a link that redirects them to the Reset password page. This works by generating a database table using Laravel's migrate feature and a controller which includes the process of allowing the user to reset their password.</p>
        <p>The main benefit of using a PHP framework like Laravel for an authentication system is that it allows other developers familiar with Laravel to jump right in and begin to use it. Another advantage is that it automatically protects against SQL injection without the need to actually enter much code. You do still have to enter some code to protect against CSRF but again this can easily be done by using Laravel's features to be able to generate tokens for your form input.</p>
        <p>GitHub source code: <a href="http://github.com/Jamie-Finn/Laravel-Authentication-system">github.com/Jamie-Finn/Laravel-Authentication-system</a></p>
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

 <div class="modal fade" id="myModal5">
    <button class="close" data-dismiss="modal">&times;</button>
    <img class="col-xs-12 col-md-12" src="img/qrcodehd.png"  alt="QR Code Generator" />
 </div>

 <div class="modal fade" id="myModal6">
    <button class="close" data-dismiss="modal">&times;</button>
    <img class="col-xs-12 col-md-12" src="img/loginreghd.png"  alt="OOP Login and Register system login" />
 </div>

 <div class="modal fade" id="myModal7">
    <button class="close" data-dismiss="modal">&times;</button>
    <img class="col-xs-12 col-md-12" src="img/todohd.png"  alt="PHP To do list" />
 </div>

 <div class="modal fade" id="myModal8">
    <button class="close" data-dismiss="modal">&times;</button>
    <img class="col-xs-12 col-md-12" src="img/laravelauthhd.png"  alt="Laravel Authentication system" />
 </div>

<!--modal content ends-->

@stop