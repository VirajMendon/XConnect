@extends('studentDetails_view')
@section('content')
	<section class="container">
		<div class="container-page">
			<form method="post" action="{{route('course.store')}}">
				{{ csrf_field() }}
				<div class="col-md-12">
					<br>
					<h4 class="dark-grey">Add Course</h4>
					<br>
					<div class="col-sm-12">
						@if(session()->has('success'))
							<div class="alert alert-success" role="alert">
							   <strong> Success !! </strong> {{ session()->get('success')}}
							</div>
						@endif
					</div>
					<div class="col-sm-12">
						@if($errors->any())
							<div class="alert alert-danger" role="alert">
								@foreach($errors->all() as $err)
									<strong> Error !! </strong> {{ $err }} <br>
								@endforeach
							</div>
						@endif
					</div>
					<div class="form-group col-lg-6">
						<label>Name</label>
						<input type="text" name="cName" class="form-control" id="cName">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Code</label>
						<input type="text" name="cCode" class="form-control" id="cCode">
					</div>	
					
					<div class="form-group col-lg-6">
						<button type="submit" class="btn">Save</button>
						<button type="submit" class="btn">Save</button>
						<button type="button" class="btn">Cancel</button>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection