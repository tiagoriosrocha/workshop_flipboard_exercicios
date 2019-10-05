<h1>Revista: {{$journal->name}}</h1>
<br>

<p>Nome: {{$journal->name}}</p>
<p>Criada em: {{$journal->created_at}}</p>
<br>

<h3>Seguidores:</h3>
	<ul>
	@foreach($journal->seguidores as $user)
		<li>{{$user->name}}</li>
	@endforeach
	</ul>
<br>

<h3>Posts:</h3>
	<ul>
	@foreach($journal->posts as $post)
		<li>{{$post->title}} - {{$post->created_at}}</li>
	@endforeach
	</ul>