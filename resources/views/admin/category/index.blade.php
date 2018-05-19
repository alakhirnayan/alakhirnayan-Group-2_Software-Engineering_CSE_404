
@extends('admin.includes.main_admin')
@section('title','Category Index')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">All Categories</div>
      <div class="panel-body">
        <table class="table table-hover">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
             <td width="10">
              <a href="{{route('category.edit',$category->id)}}" class="btn btn-success btn-sm">Edit</a>
            </td>
            <td>
              <form action="{{route('category.destroy',$category->id)}}" method="post">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>

              </form>
            </td>
          </tr>
          @endforeach
        </tbody>

        </table>
    </div>
    </div>
      <div class="text-center">
        {!!$categories->links();!!}

      </div>
        
  </div>
</div>
</div>
@endsection