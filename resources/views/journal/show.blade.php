<h1>Revista: {{$journal->name}}</h1>
<br>
<p>Nome: {{$journal->name}}</p>
<p>Criada em: {{$journal->created_at}}</p>
<br>
<p>Seguidores:</p>
<ul>
@foreach($journal->seguidores as $user)
<li>{{$user->name}}</li>
@endforeach
</ul>