@extends('layouts.app')
@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Photos</div>
				<div class="card-body">
					<p>{{$gallery->description}}</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">{{$gallery->title}}</div>
				<div class="card-body text-center">
					<img src="{{asset('galleries/' . $gallery->cover)}}" alt="cover" width="100%">
					<br><br> 
					<a href="{{route('galleryEdit', $gallery->id)}}" class="btn btn-success btn-block">Edit Gallery</a>
					<br>
					<a href="{{route('galleryDelete', $gallery->id)}}" class="btn btn-danger btn-block">Delete Gallery</a>
				</div>
			</div>
		</div>
	</div>
@endsection