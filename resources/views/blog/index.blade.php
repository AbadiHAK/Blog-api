@extends('layout')
@section('dashboard-content')

@if (Session::get('deleted'))
<div class="alert alert-success" role="alert" id="gone">
    <strong>    {{ Session ::get('deleted') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if (Session::get('deleted-failed'))
<div class="alert alert-success" role="alert" id="gone">
    <strong>    {{ Session ::get('deleted-failed') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Blog title</th>
                        <th>Blog deatils</th>
                        <th>Blog Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>
                    @foreach ($blogs as $blog)
                    <tr>
                        <td>{{$blog->title}}</td>
                        <td>{!! $blog->details !!}</td>
                        <td><img src="{{$blog->featured_image_url}}" width="100" height="100" style="border-radius: 30px"></td>



                        <td>
                            <a href="{{ URL::to('edit-blog') }}/{{ $blog->id }}" class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                            |
                            <a href="{{ URL::to('delete-blog') }}/{{ $blog->id }}" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text" onclick="checkDelete()">Delete</span>
                            </a>
                        </td>
                    </tr>


@endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function checkDelete(){
        confirm("Are you sure ?");
        if(check){
            return true;
        }
        return false;
    }

</script>

@stop
