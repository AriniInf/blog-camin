@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card-body">
		<h4>Post Viral</h4>
		<br>
		<div class="form-group">
		<form action="{{url('/edit')}}" method="POST">
			@csrf
			<input class="form-control" type="hidden" name="id" placeholder="judul post" value="{{$post->id}}">
			
			<input class="form-control" type="text" name="title" placeholder="judul post" value="{{$post->title}}" readonly="">
			<br>
			<textarea class="form-control" name="isi" placeholder="isi posts" readonly="">{{$post->isi}}</textarea>
			<hr>
		</form>
		<hr>
		<h4>Komen Netijen</h4>
		@foreach($comment as $comment)
			<div class="card card-body m-2">
				<p>{{ $comment->isi_comment }}</p>				
				<small class="text-muted">{{ $comment->created_at }}</small>
				<hr>
				<a class="text-muted" href="{{ url('/deletecomment/'.$comment->id) }}">Delete</a>
			</div>
		@endforeach
		<hr>
		<form action="{{url('/comment')}}" method="POST">
			@csrf
			<input class="form-control" type="hidden" name="id" placeholder="judul post" value="{{$post->id}}">
			<textarea class="form-control" name="comment" placeholder="Comment"></textarea>
			<input class="btn btn-secondary mt-2" type="submit" value="Komen">
		</form>
		</div>
	</div>
</div>
@endsection