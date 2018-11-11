@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card-body">
		<div class="form-group">
		<form action="{{url('/createpost')}}" method="POST">
			@csrf
			<label>Title</label>
			<input class="form-control" type="text" name="title" placeholder="judul post">
			<br>
			<textarea class="form-control" name="isi" placeholder="isi posts"></textarea>
			<hr>
			<input class="btn btn-primary" type="submit" value="Buat Post">
		</form>
		</div>
	</div>
</div>
@endsection