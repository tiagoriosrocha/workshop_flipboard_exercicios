<h1>Lista de Revistas</h1>
<br>
<ul>
@foreach($journals as $j)
	<li>
		<a href="{{ route('journals.show',$j->id) }}">{{$j->name}}</a>

		@auth
			@if($j->seguidores->contains(Auth::user()))
				<a href="/naoseguir/revista/{{$j->id}}/usuario/{{Auth::user()->id}}">Unfollow</a>
			@else
				<a href="/seguir/revista/{{$j->id}}/usuario/{{Auth::user()->id}}">Follow</a>
			@endif
		@endauth
	</li>

@endforeach
</ul>