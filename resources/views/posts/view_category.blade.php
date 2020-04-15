@extends('index')

@section('content')

<div class="container">
	 <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        	<a href="{{ route('add.category')}}" class='btn btn-primary'>Add Category</a>
        	<a href="{{ route('all.category')}}" class='btn btn-danger'>All Category</a>
          <hr>

        <ol>
          <li>Category Name : {{ $category->name }}</li>
          <li>Slug Name : {{ $category->slug }}</li>
          <li>Created at : {{ $category->created_at }}</li>

        </ol>

      </div>
    </div>
</div>

@endsection