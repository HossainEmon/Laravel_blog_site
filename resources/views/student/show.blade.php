@extends('index')

@section('content')

<div class="container">
	 <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        	<a href="{{ route('all.student')}}" class='btn btn-primary'>All Student</a>
          <hr>

        <ol>
          <li>Student Name : {{ $student->name }}</li>
          <li>Sudent Email : {{ $student->email }}</li>
          <li>Student Phone : {{ $student->phone }}</li>

        </ol>

      </div>
    </div>
</div>

@endsection