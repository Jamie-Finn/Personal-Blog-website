@extends('layouts.master')

@section('title')
Contact | Jay's Blog
@stop

@section('description')
Welcome to the Contact page. Here is a form you can use to contact me if required.
@stop

@section('author')
Jamie Finn
@stop

@section('content')

<h1 id="contact_title">Contact me</h1>
<hr>

<div class="container">
	<div class="col-md-6">
 {{ Form:: open(array('url' => 'contact_request')) }} <!--contact_request is a router from Route class-->
            <ul class="errors">
                @foreach($errors->all('<li>:message</li>') as $message)
                {{ $message }}
                @endforeach
            </ul>
 	<div class="form-group">	
         {{ Form:: label ('name', 'Name*' )}}
         {{ Form:: text ('name', Input::old('title'), array('class' => 'form-control input-sm', 'placeholder' => 'Please insert your name here...')) }}
    </div>
 	<div class="form-group">
         {{ Form:: label ('email', 'Email*') }}
         {{ Form:: email ('email', Input::old('email'), array('class' => 'form-control input-sm', 'placeholder' => 'Please insert your email address here...')) }}
    </div>
 	<div class="form-group">
         {{ Form:: label ('message', 'Message*' )}}
         {{ Form:: textarea ('message', Input::old('message'), array('class' => 'form-control input-sm', 'placeholder' => 'Please insert your message here...')) }}
    </div>
         {{ Form::reset('Clear', array('class' => 'btn btn-sm btn-danger')) }}
         {{ Form::submit('Send', array('class' => 'btn btn-sm btn-primary')) }}
 
         {{ Form:: close() }}
    </div>
</div>

@stop