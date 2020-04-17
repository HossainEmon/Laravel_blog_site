@extends('index')

@section('content')

<div class="container">
	 <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        	<a href="{{ route('all.student')}}" class='btn btn-danger'>All Student</a>
          <hr>

          <h3>New Student Inserted</h3>

          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
         @endif

        <form action="{{ route('store.student')}}" method="post">
        	@csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Student Name</label>
              <input type="text" class="form-control" placeholder="Student Name" name="name" required>
            </div>

            <div class="form-group floating-label-form-group controls">
              <label>Student  Email</label>
              <input type="text" class="form-control" placeholder="Student Email" name="email" required>
            </div>
             <div class="form-group floating-label-form-group controls">
              <label>Student  Email</label>
              <input type="text" class="form-control" placeholder="Student Phone" name="phone" required>
            </div>
          </div>
      
          <br>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
</div>

@endsection