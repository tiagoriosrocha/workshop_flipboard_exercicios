<h1>User {{$user->name}}</h1>
<br>
<p>Name: {{$user->name}}</p>
<p>Id: {{$user->id}}</p>
<br>
<h3>Following {{$user->seguindo->count()}} journals:</h3>
<ul>
@foreach($user->seguindo as $journal)
	<li><a href="/journal/{{$journal->id}}">{{$journal->name}}</a></li>
@endforeach
</ul>
<br>
<h3>Liked {{$user->likes->count()}} posts:</h3>
<ul>
@foreach($user->likes as $post)
	<li><a href="/post/{{$post->id}}">{{$post->title}}</a></li>
@endforeach
</ul>
<br>
<h3>Read {{$user->visualizados->count()}} posts:</h3>
<ul>
@foreach($user->visualizados as $post)
	<li><a href="/post/{{$post->id}}">{{$post->title}}</a></li>
@endforeach
</ul>