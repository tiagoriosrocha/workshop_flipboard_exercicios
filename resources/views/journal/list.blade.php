@extends('layouts.esqueleto')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-4">
			<p class="h1">Journals List</p>
		</div>
	</div>

	<br>

	<div class="row">
		<div class="col-md-12">
			<ul class="list-group">
			@foreach($journals as $j)
				<li class="list-group-item">
					<div class="row">
						<div class="col-md-10">
						<a href="{{ route('journals.show',$j->id) }}">{{$j->name}} </a>
						<span class="badge badge-secondary btn-sm">{{$j->posts->count()}}</span>
					</div>
					@auth
						<div class="col-md-2">
						@if($j->seguidores->contains(Auth::user()))
							<a  class="btn btn-danger btn-sm" href="/naoseguir/revista/{{$j->id}}/usuario/{{Auth::user()->id}}">Unfollow</a>
						@else
							<a  class="btn btn-success btn-sm" href="/seguir/revista/{{$j->id}}/usuario/{{Auth::user()->id}}">Follow</a>
						</div>
					</div>
						@endif
					@endauth
				</li>
			@endforeach
			</ul>
		</div>
	</div>

	<br>

	<div class="row">
		<div class="col-md-6 offset-md-5">
			{{ $journals->links() }}
		</div>
	</div>
</div>

@endsection