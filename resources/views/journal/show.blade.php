<h1>{{$journal->name}} Journal</h1>
<br>

<p>Name: {{$journal->name}}</p>
<p>Created at: {{\Carbon\Carbon::parse($journal->created_at)->format('d/m/Y h:m')}}</p>
<br>

<h3>Followers:</h3>
	<ul>
	@foreach($journal->seguidores as $user)
		<li><a href="/user/{{$user->id}}">{{$user->name}}</a></li>
	@endforeach
	</ul>
<br>

<h3>Posts:</h3>
	<ul>
	@foreach($journal->posts as $post)
		<li>
			<a href="/post/{{$post->id}}">{{$post->title}}</a> 
			{{$post->likes->count()}}
		</li>
	@endforeach
	</ul>

	<br>
	<a href="/journals"><< Journals List</a>