<h1>{{$user->name}} Timeline</h1>
<br>
<h3>Unread Posts {{$postsnaolidos->count()}}: </h3>
@foreach($postsnaolidos as $post)
	<p><a href="post/{{$post->id}}">{{$post->id}} - {{$post->title}}</a></p>
@endforeach
<br>
<h3>Read Posts {{$postslidos->count()}}: </h3>
@foreach($postslidos as $post)
	<p><a href="post/{{$post->id}}">{{$post->id}} - {{$post->title}}</a></p>
@endforeach