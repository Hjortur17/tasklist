@extends ('layouts.app')

@section ('content')
	<div class="container">
		<div class="row">
			<section id="create">
				<div class="col-md-8 col-md-offset-2">
					@include ('common.errors')

					<form action="{{ url('task') }}" method="POST" class="form-horizontal">
						{{ csrf_field() }}
						<div class="form-group">
							<h3 class="sectionTitle">Create Your Task To Day!</h3>
							<!--<p class="kicker">Create your tasklist to day for free!</p>-->
							<input type="text" name="name" id="name" placeholder="Going to the store">
						</div>
						<div class="form-group" style="text-align: center;">
							<button type="submit" class="btn_create">Add task</button>
						</div>
					</form>
				</div>
			</section>

			<section id="table">
				@if ($tasks->count())
					<div class="col-md-8 col-md-offset-2" style="padding: 0px; margin-top: 70px;">
						<h3 class="sectionTitle">Your tasklist</h3>
						<table class="table table-striped" style="margin-top: 30px;">
							<tbody>
								@foreach ($tasks as $task)
									<tr>
										<td>{{ $task->name }}</td>
										<td>
											<form action="{{ url('task/' . $task->id) }}" method="POST">
												<button type="submit" class="btn btn-danger" style="float: right;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
												{{ method_field('DELETE') }}
												{{ csrf_field() }}
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				@endif
			</section>
		</div>
	</div>
@endsection