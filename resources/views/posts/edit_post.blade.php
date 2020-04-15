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
          <a href="{{ route('all.post')}}" class='btn btn-danger'>All Post</a>

        <form action="{{ url('update.post/'.$post->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Title</label>
              <input type="text" class="form-control" value="{{ $post->title }}" name="title" required>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category</label>
             	<select class="form-control" name="category_name">
                @foreach($category as $row)
             		<option value="{{$row->id}}" <?php if($row->id == $post->category_name) echo "selected"; ?> >{{ $row->name}}</option>
                @endforeach
             	</select>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>new Image</label>
              <input type="file" class="form-control" name="image" >
             Old Image : <img src="{{ URL::to($post->image )}}" style="height: 80px; width: 140px;">
             <input type="hidden" name="old_photo" value="{{ $post->image}}">
            </div>
          </div>
           <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Details</label>
              <textarea rows="5" class="form-control" name="details" required>{{ $post->details }}</textarea>
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
