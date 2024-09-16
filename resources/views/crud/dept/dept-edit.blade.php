
@extends('crud.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3> A Student Edit form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('dept.update')}}" method="post">
                            @csrf
                            <input type="hidden" class="form-control" value="{{$department->id}}" name="department_id">
                            <div class="mb-3">
                                <label  class="form-label">Department Name</label>
                                <input type="text" name="department_name" value="{{$department->department_name}}" class="form-control"  placeholder="Department Name...">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Student Code</label>
                                <input type="text" name="department_code"  value="{{$department->department_code}}" class="form-control"  placeholder="Student Code...">
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="submit" class="form-control btn btn-outline-primary" >
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
