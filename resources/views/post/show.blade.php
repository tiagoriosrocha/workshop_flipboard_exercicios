<h1>Post {{$post->id}}</h1>
<br>
<p>Title: {{$post->title}}</p>
<p>Text: {{$post->content}}</p>
<p>Created at: {{$post->created_at}}</p>
<br>
<h3>Curtidas: {{$post->likes->count()}}</h3>
<ul>
	@foreach($post->likes as $user)
		<li>{{$user->name}}</li>
	@endforeach
</ul>
<br>
