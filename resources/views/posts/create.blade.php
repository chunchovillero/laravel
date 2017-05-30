@extends('layouts.app')

@section('content')

<form action="" method="POST">

	<div class="form-group">
		
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control" value=""/>		

	</div>

	<div class="form-group">
		
		<label for="description">Description</label>
		<input type="text" name="description" class="form-control" value=""/>		

	</div>

	<div class="form-group">
		
		<label for="title">Title</label>
		<textarea rows="5" name="title" class="form-control" value=""/>		

	</div>

	<div class="form-group">
		
		<label for="Url">Url</label>
		<input type="text" name="Url" class="form-control" value=""/>		

	</div>
	
</form>

@endsection
