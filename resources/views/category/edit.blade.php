@extends('layout')
@section('dashboard-content')
<h1>Update Category Form</h1>

@if (Session::get('success'))
<div class="alert alert-success" role="alert" id="gone">
    <strong>    {{ Session ::get('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if (Session::get('failed'))
<div class="alert alert-success" role="alert" id="gone">
    <strong>    {{ Session ::get('failed') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<form action="{{ URL::to('update-category') }}/{{$category->id}}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Enter Category</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category" name="categoryName" value="{{ $category->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@stop
