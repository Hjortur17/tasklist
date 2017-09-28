@extends ('layouts.app')

@section ('content')
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="{{ url('task') }}" method="POST" class="form-horizontal">
					<div class="form-group align-self-center">
						<div class="col-3">
							<label for="name" class="control-label">Task</label>
						</div>
						<div class="col-6">
							<input type="text" name="name" id="name" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="col-6 align-self-center">
							<button type="submit" class="btn btn-success">Add task</button>
						</div>
					</div>

					{{ csrf_field() }}
				</form>
			</div>
		</div>
		</div>
	</div>
@endsection