<h1>Post Id {{$post->id}}</h1>
<p>
	@auth
		@if($post->likes->contains(Auth::user()))
			<a href="/descurtir/post/{{$post->id}}/usuario/{{Auth::user()->id}}">Dislike</a>
		@else
			<a href="/curtir/post/{{$post->id}}/usuario/{{Auth::user()->id}}">Like</a>
		@endif
	@endauth
</p>
<br>
<p>Journal: <a href="/journal/{{$post->revista->id}}">{{$post->revista->name}}</a></p>
<p>Title: {{$post->title}}</p>
<p>Text: {{$post->content}}</p>
<p>Created at: {{$post->created_at}}</p>
<br>
<h3>Likes: {{$post->likes->count()}}</h3>
<ul>
	@foreach($post->likes as $user)
		<li><a href="/user/{{$user->id}}">{{$user->name}}</a></li>
	@endforeach
</ul>
<br>
<h3>Read: {{$post->visualizou->count()}}</h3>
<ul>
	@foreach($post->visualizou as $user)
		<li><a href="/user/{{$user->id}}">{{$user->name}}</a></li>
	@endforeach
</ul>

<br>
<a href="/journal/{{$post->revista->id}}"><< Journal</a><br>
<a href="/home"><< Home</a>
