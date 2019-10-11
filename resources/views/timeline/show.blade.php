<h1>Timeline do {{$user->name}}</h1>
<br>
<h3>Posts Não Lidos {{$postsnaolidos->count()}}: </h3>
@foreach($postsnaolidos as $post)
	<p><a href="post/{{$post->id}}">{{$post->id}} - {{$post->title}}</a></p>
@endforeach
<br>
<h3>Posts Lidos {{$postslidos->count()}}: </h3>
@foreach($postslidos as $post)
	<p><a href="post/{{$post->id}}">{{$post->id}} - {{$post->title}}</a></p>
@endforeach