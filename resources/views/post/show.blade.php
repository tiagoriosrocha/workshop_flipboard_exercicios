<h1>Post {{$post->id}}</h1>
<br>
<p>Revista: <a href="/journals/{{$post->revista->id}}">{{$post->revista->name}}</a></p>
<p>Title: {{$post->title}}</p>
<p>Text: {{$post->content}}</p>
<p>Created at: {{$post->created_at}}</p>
<br>
<h3>Curtidas: {{$post->likes->count()}}</h3>
<ul>
	@foreach($post->likes as $user)
		<li><a href="/user/{{$user->id}}">{{$user->name}}</a></li>
	@endforeach
</ul>
<br>
