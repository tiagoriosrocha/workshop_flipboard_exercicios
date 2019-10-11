<h1>Timeline do {{$user->name}}</h1>
<br>
<h3>Posts Não Lidos {{$posts->count()}}: </h3>
@foreach($posts as $post)
	<p>{{$post->id}} - {{$post->title}}</p>
@endforeach