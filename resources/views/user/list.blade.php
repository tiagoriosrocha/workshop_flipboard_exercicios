<h1>Users List</h1>
<br>

<ul>
@foreach($users as $user)
<li>{{$user->id}} - {{$user->name}} - {{$user->email}}</li>
@endforeach
</ul>