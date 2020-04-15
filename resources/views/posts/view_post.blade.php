@extends('index')

@section('content')

<div class="container">
	 <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        
         
          <img src="{{ URL::to( $post->image)}}"
           height="340px;">
             <p>Category Name : {{ $post->name }}</p>
              <h3>{{ $post->title }}</h3>
          <p>{{ $post->details }}</p>


      </div>
    </div>
</div>

@endsection