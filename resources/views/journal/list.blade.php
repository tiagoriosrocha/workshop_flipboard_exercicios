<h1>Lista de Revistas</h1>
<br>
<ul>
@foreach($journals as $j)
	<a href="{{ route('journals.show',$j->id) }}"><li>{{$j->name}}</li></a>
@endforeach
</ul>