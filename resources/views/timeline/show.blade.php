<h1><a href="/user/{{$user->id}}">{{$user->name}}</a> Timeline</h1>
<br>

<h3>Unread posts from journals you're following  {{$postsnaolidos->count()}}: </h3>
@foreach($postsnaolidos as $post)
	<p><a href="post/{{$post->id}}">{{$post->id}} - {{$post->title}}</a></p>
@endforeach
----------------------------------------------
<br>


<h3>Suggested posts  {{$postsSugeridos->count()}}: </h3>
@foreach($postsSugeridos as $post)
	<p><a href="post/{{$post->id}}">{{$post->id}} - {{$post->title}}</a></p>
@endforeach
---------------------------------------------
<br>


<h3>Read Posts {{$postslidos->count()}}: </h3>
@foreach($postslidos as $post)
	<p><a href="post/{{$post->id}}">{{$post->id}} - {{$post->title}}</a></p>
@endforeach
--------------------------------------------