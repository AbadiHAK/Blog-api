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
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{ URL::to('edit-category') }}/{{ $category->id }}" class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                            |
                            <a href="{{ URL::to('delete-category') }}/{{ $category->id }}" class="btn btn-danger btn-icon-split">
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
