@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-toolbar btn-block btn-success btn-h1-spacing">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
					<th></th>
				</thead>

				<tbody>
					
					@foreach ($posts as $post)

						<tr>
							<td>{{ $post->title }}</td>
							<td> {{ substr($post->body , 0, 20) }}{{ strlen($post->body) > 20 ? "..." : "" }}</td>
							<td> {{ date('M j, Y', strtotime($post->created_at)) }} </td>
							<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm btn-block btn-toolbar">View</a></td>
							<td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm btn-block">Edit</a></td>

						</tr>

					@endforeach

				</tbody>
			</table>
		</div>
	</div>

@endsection