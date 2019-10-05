<h1>Revista: {{$journal->name}}</h1>
<br>

<p>Nome: {{$journal->name}}</p>
<p>Criada em: {{$journal->created_at}}</p>
<br>

<h3>Seguidores:</h3>
	<ul>
	@foreach($journal->seguidores as $user)
		<li><a href="/user/{{$user->id}}">{{$user->name}}</a></li>
	@endforeach
	</ul>
<br>

<h3>Posts:</h3>
	<ul>
	@foreach($journal->posts as $post)
		<li><a href="/post/{{$post->id}}">{{$post->title}}</a>
			@auth
			@if($post->likes->contains(Auth::user()))
				<a href="/descurtir/post/{{$post->id}}/usuario/{{Auth::user()->id}}">Dislike</a>
			@else
				<a href="/curtir/post/{{$post->id}}/usuario/{{Auth::user()->id}}">Like</a>
			@endif
		@endauth
			{{$post->likes->count()}}
		</li>
	@endforeach
	</ul>