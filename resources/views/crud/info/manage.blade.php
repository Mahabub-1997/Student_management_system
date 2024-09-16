@extends('crud.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3>Student Manage Table</h3>
                    </div>
                    <div class="card-body">
                        <table class="table tab-content table-bordered table-striped table-hover">
                            <tr>
                                <th>Si</th>
                                <th>Student Name</th>
                                <th>Student Phone</th>
                                <th>Student Email</th>
                                <th>Department Name</th>
                                <th>Department Code</th>
                                <th>Student Image</th>
                                <th>Student Address</th>
                                <th>Action</th>
                            </tr>

                            @foreach($students  as $key=>$student)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{$student-> student_name  }}</td>
                                <td>{{$student-> student_phone  }}</td>
                                <td>{{$student->  student_email }}</td>
                                <td>{{$student->  department_name}}</td>
                                <td>{{$student-> dept_id  }}</td>
                                <td>
                                    <img width="50px" height="50px" src="{{$student->student_image}}" alt="">
                                </td>
                                <td>{{$student-> student_address  }}</td>

                                <td>
                                    <a href="{{route('student.edit',['id'=>$student->id])}}" class="form-control btn btn-primary">Edit</a>
                                    <a href="{{route('student.delete',['id'=>$student->id])}}" onclick="return confirm('Are You Want To Delete this!!!')" class="form-control btn btn-danger">Delete</a>
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
