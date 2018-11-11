@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card-body">
		<div class="form-group">
		<form action="{{url('/edit')}}" method="POST">
			@csrf
			<input class="form-control" type="hidden" name="id" placeholder="judul post" value="{{$post->id}}">
			<label>Title</label>
			<input class="form-control" type="text" name="title" placeholder="judul post" value="{{$post->title}}">
			<br>
			<textarea class="form-control" name="isi" placeholder="isi posts">{{$post->isi}}</textarea>
			<hr>
			<input class="btn btn-primary" type="submit" value="Simpan Post">
		</form>
		</div>
	</div>
</div>
@endsection