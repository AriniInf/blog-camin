@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card-body">
		<a class="btn btn-secondary btn-sm mb-2" href="{{url('/createpost')}}">Buat Post</a>
		<table class="table table-hover table-bordered">
			<tr>
				<th>Judul</th>
				<th>Tombol</th>
			</tr>
			@foreach($posts as $post)
				<tr>
					<td>{{$post->title}}</td>
					<td>
						<a class="btn btn-sm btn-primary" href="{{url('/edit/'.$post->id)}}">Ubah</a>
						<a class="btn btn-sm btn-danger" href="{{url('/delete/'.$post->id)}}">Hapus</a>
						<a class="btn btn-sm btn-success" href="{{url('/view/'.$post->id)}}">Lihat</a>						
						
					</td>
				</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection