@extends('studentDetails_view')
@section('content')
	<section class="container">
		<div class="container-page">	
			<form method="post" action="{{route('students.store')}}">	
				{{ csrf_field() }}
				<div class="col-md-12">
					<br>
					<h4 class="dark-grey">Add Student</h4>
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
						<input type="text" name="name" class="form-control" id="name">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Select Course</label>
						<select class="form-control" name="course">
							@foreach($courses as $course)
								<option value="{{ $course['id']}}">{{ $course['name']}}</option>
							@endforeach
						</select>
					</div>	
					
					<div class="form-group col-lg-6">
						<label>Code</label>
						<input type="text" name="code" class="form-control" id="code">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Branch</label>
						<input type="text" name="branch" class="form-control" id="branch">
					</div>
									
					<div class="form-group col-lg-6">
						<label>Phone</label>
						<input type="number" name="phone" class="form-control" id="phone">
					</div>	
					
					<div class="form-group col-lg-6">
						<button type="submit" class="btn">Save</button>
						<button type="button" class="btn">Cancel</button>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection