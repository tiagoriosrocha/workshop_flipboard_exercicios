<h1>User {{$user->id}}</h1>
<br>
<p>Name: {{$user->name}}</p>
<br>
<h3>Seguindo {{$user->seguindo->count()}} revistas:</h3>
<ul>
@foreach($user->seguindo as $journal)
	<li><a href="/journals/{{$journal->id}}">{{$journal->name}}</a></li>
@endforeach
</ul>
<br>
<h3>Curtindo {{$user->likes->count()}} posts:</h3>
<ul>
@foreach($user->likes as $post)
	<li><a href="/post/{{$post->id}}">{{$post->title}}</a></li>
@endforeach
</ul>