@extends('index')

@section('content')

<div class="container">
	 <div class="row">
      <div class="col-lg-12 mx-auto">
        	<a href="{{ route('writepost')}}" class='btn btn-danger'>Write Post</a>
          <hr>

          <table class="table table-responsive">
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Category</th>
                    <th scope="col">title</th>
                    <th scope='col'>Image</th>
                    <th scope="col">Action</th>
                  </tr>
              @foreach($post as $row)
                  <tr>
                    <td>{{ $row->id}} </td>
                    <td>{{ $row->name}}</td>
                    <td>{{ $row->title}}</td>
                     <td><img src="{{ URL::to($row->image )}}" style="height: 40px; width: 70px;"</td>
                    <td>
                      <a href="{{ URL::to('edit.post/'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ URL::to('delete.post/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                      <a href="{{ URL::to('view.post/'.$row->id)}}" class="btn btn-sm btn-success">view</a>

                    </td>
                  </tr>
                @endforeach
                
      </table>


      </div>
    </div>
</div>

@endsection