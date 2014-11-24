@extends('layouts.master')

@section('title')
Jay's Blog
@stop

@section('description')
Welcome to Jay's Blog. Feel free to browse around my blog to see if the stuff I chat about is interesting to you.
@stop

@section('author')
Jamie Finn
@stop

@section('content')

<h1 id="blog_title">Welcome to my Blog and Portfolio <i class="fa fa-home"></i></h1>

<hr>
@foreach($posts as $p)
<div class="col-lg-8">
	<h1>{{ HTML::link('blog/'.$p->slug, $p->title) }}</h1>
	<p class="lead">By {{ ucwords( $p->user->username ) }}</p>
	<hr>
	<p><span class="glyphicon glyphicon-time"></span> Posted {{ Carbon::createFromTimeStamp(strtotime($p->created_at))->formatLocalized('%A %d %B %Y')}}</p>
	<p>{{ Str::limit($p->body, 120)}}{{HTML::link('blog/'.$p->slug, 'Read More &rarr;')}}</p>
</div>

@endforeach

{{ $posts->links() }}

@stop



