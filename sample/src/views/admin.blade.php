<div class="container">
	<h1>You have {{count($users)}} user(s)</h1>
	<div class="col-md-8">
		<ul class="list-group">
			@foreach($users as $user)
			<li class="list-group-item">{{$user->username}}</li>
			@endforeach
		</ul>
	</div>
</div>