@extends('crud.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3> A Student Add form</h3>
                    </div>
                    <div class="card-body">
                       <table class="table table-hover table-striped table-bordered tab-content">
                           <tr>
                               <th>Si</th>
                               <th>Department Name</th>
                               <th>Department code</th>
                               <th>Action</th>
                           </tr>
                           @foreach($departments as $key=>$department)
                           <tr>
                               <td>{{++$key}}</td>
                               <td>{{$department->department_name}}</td>
                               <td>{{$department->department_code}}</td>
                               <td>
                                   <a href="{{route('dept.edit',['id'=>$department->id])}}" class="form-control btn btn-primary">Edit</a>
                                   <a href="{{route('dept.delete',['id'=>$department->id])}}" onclick="return confirm('Are You Want To Delete this!!!')" class="form-control btn btn-danger">Delete</a>
                               </td>
                           </tr>
                           @endforeach
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
