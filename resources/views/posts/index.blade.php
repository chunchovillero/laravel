@extends('layouts.app')

@section('content')


@foreach($posts as $post)
<div class="row">
			<div class="col-md-12">
				<a href="{{ route('post_path', ['post' => $post->id]) }}"><h2>{{$post->title}}</h2></a>
				<p>{{$post->created_at->diffForHumans()}}</p>
			</div>
		</div>
@endforeach

@endsection
