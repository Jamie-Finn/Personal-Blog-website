@extends('layouts.single')

@section('content')
<div class="col-lg-12">
	<hr>
	<h1>{{ $post->title }}</h1>
	<p class="lead">By {{ ucwords($post->user->username)}}</p>
	<hr>
	<p><span class="glyphicon glyphicon-time"></span> Posted {{ $date }}</p>
	<hr>
	<p class="lead">{{ $post->body}}</p>
	<hr>
	{{ HTML::link('/', 'Go Back')}}

	<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'jayblog25'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>

@stop