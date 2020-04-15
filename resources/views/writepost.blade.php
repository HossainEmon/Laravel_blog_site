@extends('index')

@section('content')
 @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
       @endif

<div class="container">
	 <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        	<a href="{{ route('add.category')}}" class='btn btn-primary'>Add Category</a>
        	<a href="{{ route('all.category')}}" class='btn btn-danger'>All Category</a>
          <a href="{{ route('all.post')}}" class='btn btn-danger'>All Post</a>

        <form action="{{ route('store.post')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Title</label>
              <input type="text" class="form-control" placeholder="Post Title" name="title" required>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category</label>
             	<select class="form-control" id="category_name" name="category_name">
                <option>--Select One--</option>
                @foreach($category as $row)
             		<option value="{{$row->id}}">{{ $row->name}}</option>
                @endforeach
             	</select>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Image</label>
              <input type="file" class="form-control" required name="image" >
            </div>
          </div>
           <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Details</label>
              <textarea rows="5" class="form-control" placeholder="Details" name="details" required></textarea>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
          </div>
        </form>
      </div>
    </div>
</div>

@endsection




   